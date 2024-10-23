<?php

namespace App\Imports;

use App\Models\Detail;
use App\Models\Easy;
use App\Models\Mahol;
use App\Models\Tree;
use App\Models\Yaad;
use Exception;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Maatwebsite\Excel\Concerns\WithChunkReading;
use Maatwebsite\Excel\Events\AfterImport;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Concerns\ToArray;
use Illuminate\Support\MessageBag;

class TreeDataImport implements ToArray, ShouldQueue, WithChunkReading, WithHeadingRow
{
    private $row;
    private array $courses;
    /** @var MessageBag $creatorMsgBag */
    private MessageBag $creatorMsgBag;
    /** @var MessageBag $updaterMsgBag */
    private MessageBag $updaterMsgBag;
    /** @var MessageBag $errorsMsgBag */
    private MessageBag $errorsMsgBag;

    private int $count = 1;

    public function __construct()
    {
        $this->creatorMsgBag = new MessageBag;
        $this->updaterMsgBag = new MessageBag;
        $this->errorsMsgBag  = new MessageBag;
    }

    public static function afterImport(AfterImport $event)
    {
        Log::info('After import excel file');
    }

    /**
     * @param array $array
     */
    public function array(array $array)
    {
        try {
            $structure = [];
            $matching_columns = ['bunyadi_unwan', 'zayalunwan'];
            $titles = $parents = [];
            $tree = Tree::all();
            $existsTitles = $tree->pluck('id', 'title')->toArray();
            $this->courses = $tree->keyBy('id')->toArray();
            foreach (array_chunk($array, 1000) as $index => $rowChunk) {
                foreach ($rowChunk as $keyChunk => $row) {
                    $this->row = $row;
                    if (is_null($row)) {
                        continue;
                    }
                    foreach ($row as $key => $value) {
                        if (($key == $matching_columns[0] || str_contains($key, $matching_columns[1]))) {
                            $structure[$index][$key] = $value;
                        }
                    }

                    if(!empty($row['parent_id']) || !empty($row["shnakht"])) {
                        $this->updateSheet();
                        continue;
                    }

                    $row["titleStructure"]  = "";
                    for ($children = 0; $children < 11; $children++) {
                        if($children === 0) { // parent
                            $row['title']   = trim($row['bunyadi_unwan']);
                            $row['levels']  = $children;
                            $row["parentTitle"] = null;
                        } else {
                            $childrenCol        = $row['zayalunwan_'.$children];
                            if(empty($childrenCol)) {
                                break;
                            }
                            $row['title']       = trim($childrenCol);
                            $row['levels']      = $children;
                            $row["parentTitle"] = trim($children - 1 == 0 ? $row['bunyadi_unwan'] : $row['zayalunwan_' . ($children - 1)]);
                        }
                        $row["titleStructure"]  .=  ','.$row["title"];
                    }
                    if (!isset($row['title']) || empty($row['title']) || in_array($row['titleStructure'], $titles) || isset($existsTitles[$row['title']])) {
                        continue;
                    }
                    if (!isset($parents[$row["titleStructure"]])) {
                        $parentTitle = Tree::whereTitle($row["parentTitle"])->orderBy("id","desc")->first();
                        $parents[$row["titleStructure"]] = $parentTitle;
                    } else {
                        $parentTitle = $parents[$row["titleStructure"]];
                    }
                    DB::transaction(function () use ($row, $structure, $index, $parentTitle, &$titles) {
                        

                        $tree = new Tree;
                        $tree->title = $row['title'];
                        $tree->government_com = $row["government_com"] ?? 0;
                        $tree->parent()->associate($parentTitle ?? null);
                        $tree->structure = json_encode($structure[$index]);
                        $tree->levels = $row["levels"] ?? 0;
                        $tree->added_by = \Auth::user()->name ?? NULL;
                        // if($row["title"] == "آپ  ﷺ  کے آباء واجداد") {
                        //     dd($row, $structure, $parentTitle, $row["titleStructure"], $tree);
                        // }
                        // Log::info('Start row excel file1', [$row, $structure, $parentTitle, $row["titleStructure"], $tree]);
                        $tree->save();
                        if ($tree) {
                            // dd($tree);
                            // Log::info('Start row excel file2', [$row, $structure, $parentTitle, $row["titleStructure"], $tree]);
                            $titles[] = $row["titleStructure"];
                        }
                        // Log::info('Start row excel file3', [$row, $structure, $parentTitle, $row["titleStructure"], $tree]);
                        $detail = new Detail;
                        $detail->abrar_id = $row["abrar_sahb_nmbr_shmar"];
                        $detail->asif_id  = $row["asf_sahb_nmbr_shmar"];
                        $detail->age = 1;
                        $detail->age_sr = $row["blhath_aamr"];
                        $detail->course_no = $row["nsaby_nmbr"];
                        $detail->detail = $row["mkhtsr_tfsyl"];
                        $detail->tree()->associate($tree);
                        $detail->save();

                        $easy = new Easy();
                        $easy->easy = $row["tsyl"];
                        $easy->mukhatab = $row["aaoam_khoas_mktdaaa"];
                        $easy->rafe_ishkal = $row["rfaa_ashkal"];
                        $easy->qaida = $row["kly_akthry_gzoyastthnaaa"];
                        $easy->rahe_adal = $row["kanonadyan_ahsanamksodmksod_balthatthrayaa"];
                        $easy->husool = $row["hsol_ka_tryk"];
                        $easy->tamheed_khas = $row["khas"];
                        $easy->hukam = $row["hkmbnyaddfaa_mdrt"];
                        $easy->hasiat = $row["anfrady_agtmaaay"];
                        $easy->shoba = $row["akrokylggmalk"];
                        $easy->class = $row["gmaaat"];
                        $easy->jins = $row["mrd_aaort_dono_k_ly"];
                        $easy->zamana = $row["zman"];
                        $easy->taleem = $row["aalmy_o_aamly"];
                        $easy->amli_mashq = $row["aamly_mshky"];
                        $easy->taluq = $row["thary_batny"];
                        $easy->muharik = $row["mhrkat_onthryat"];
                        $easy->tree()->associate($tree);
                        $easy->save();

                        $mahol = new Mahol();
                        $mahol->sunana = $row["sunana"];
                        $mahol->kehalwana = $row["kehalwan"];
                        $mahol->dekhana = $row["dekhana"];
                        $mahol->mashq = $row["mashq"];
                        $mahol->batana = $row["batana"];
                        $mahol->sikhana = $row["sikhana"];
                        $mahol->adat = $row["adat"];
                        $mahol->samjhana = $row["samjhana"];
                        $mahol->parhana = $row["parhana"];
                        $mahol->tree()->associate($tree);
                        $mahol->save();

                        $yaad = new Yaad();
                        $yaad->yad_dehani = $row["tkrar_aalmy_aamly"];
                        $yaad->kitni_takrar = $row["ktny_bar_tkrar_kry"];
                        $yaad->revision = $row["pchly_ktab_ky_drayy"];
                        $yaad->ahwal = $row["daralhrbno_mslmanda"];
                        $yaad->pasaymanzar = $row["ps_mnthr"];
                        $yaad->result = $row["trz_aaml"];
                        $yaad->shaz = $row["shath_msayl"];
                        $yaad->hawala = $row["ktab"];
                        $yaad->government_ref = $row["srkary_ktab"];
                        $yaad->tree()->associate($tree);
                        $yaad->save();
                    }, 5);
                    $this->row = $row;
                    $this->count++;
                }
            }

        } catch (Exception $e) {
            dd($e);
            \Log::error("Create & Update Error! ",[$e->getMessage(), "row" => $this->row]);
            \Log::error("Create & Update Detailed Error! ",[$e, "row" => $this->row]);
            $this->errorsMsgBag->add("errors","Oops! Something went wrong.");
        }
    }

    public function chunkSize(): int
    {
        return 30000;
    }

    public function startRow(): int
    {
        Log::info('Start row excel file');
        return 2;
    }

    public function headingRow(): int
    {
        return 1;
    }

    /**
     * @return void
     */
    private function updateSheet():void {
        if(!empty($this->row["shnakht"])){
            DB::transaction(function () {
                /** @var Tree $tree */
                $tree                   = Tree::find($this->row["shnakht"]);
                if(!is_null($tree)) {
                    $structure = json_decode($tree->structure, true);
                    $title = trim($this->row['agmaly_aanoan']);
                    $structure[intval($tree->levels) === 0 ? "bunyadi_unwan" : "zayalunwan_$tree->levels"] = $title;

                    $tree->title = $title;
                    $tree->government_com = $this->row["government_com"] ?? 0;
                    $tree->structure = json_encode($structure);
                    $tree->added_by = \Auth::user()->name ?? NULL;
                    $tree->save();

                    $detail = Detail::whereTreeId($tree->id)->first();
                    if (is_null($detail)) {
                        $detail = new Detail();
                    }
                    $detail->abrar_id = $this->row["abrar_sahb_nmbr_shmar"];
                    $detail->asif_id = $this->row["asf_sahb_nmbr_shmar"];
                    $detail->age = 1;
                    $detail->age_sr = $this->row["blhath_aamr"];
                    $detail->course_no = $this->row["nsaby_nmbr"];
                    $detail->detail = $this->row["mkhtsr_tfsyl"];
                    $detail->tree()->associate($tree);
                    $detail->save();

                    $easy = Easy::whereTreeId($tree->id)->first();
                    if (is_null($easy)) {
                        $easy = new Easy();
                    }
                    $easy->easy = $this->row["tsyl"];
                    $easy->mukhatab = $this->row["aaoam_khoas_mktdaaa"];
                    $easy->rafe_ishkal = $this->row["rfaa_ashkal"];
                    $easy->qaida = $this->row["kly_akthry_gzoyastthnaaa"];
                    $easy->rahe_adal = $this->row["kanonadyan_ahsanamksodmksod_balthatthrayaa"];
                    $easy->husool = $this->row["hsol_ka_tryk"];
                    $easy->tamheed_khas = $this->row["khas"];
                    $easy->hukam = $this->row["hkmbnyaddfaa_mdrt"];
                    $easy->hasiat = $this->row["anfrady_agtmaaay"];
                    $easy->shoba = $this->row["akrokylggmalk"];
                    $easy->class = $this->row["gmaaat"];
                    $easy->jins = $this->row["mrd_aaort_dono_k_ly"];
                    $easy->zamana = $this->row["zman"];
                    $easy->taleem = $this->row["aalmy_o_aamly"];
                    $easy->amli_mashq = $this->row["aamly_mshky"];
                    $easy->taluq = $this->row["thary_batny"];
                    $easy->muharik = $this->row["mhrkat_onthryat"];
                    $easy->tree()->associate($tree);
                    $easy->save();

                    $mahol = Mahol::whereTreeId($tree->id)->first();
                    if (is_null($mahol)) {
                        $mahol = new Mahol();
                    }
                    $mahol->sunana = $this->row["sunana"];
                    $mahol->kehalwana = $this->row["kehalwan"];
                    $mahol->dekhana = $this->row["dekhana"];
                    $mahol->mashq = $this->row["mashq"];
                    $mahol->batana = $this->row["batana"];
                    $mahol->sikhana = $this->row["sikhana"];
                    $mahol->adat = $this->row["adat"];
                    $mahol->samjhana = $this->row["samjhana"];
                    $mahol->parhana = $this->row["parhana"];
                    $mahol->tree()->associate($tree);
                    $mahol->save();

                    $yaad = Yaad::whereTreeId($tree->id)->first();
                    if (is_null($yaad)) {
                        $yaad = new Yaad();
                    }
                    $yaad->yad_dehani = $this->row["tkrar_aalmy_aamly"];
                    $yaad->kitni_takrar = $this->row["ktny_bar_tkrar_kry"];
                    $yaad->revision = $this->row["pchly_ktab_ky_drayy"];
                    $yaad->ahwal = $this->row["daralhrbno_mslmanda"];
                    $yaad->pasaymanzar = $this->row["ps_mnthr"];
                    $yaad->result = $this->row["trz_aaml"];
                    $yaad->shaz = $this->row["shath_msayl"];
                    $yaad->hawala = $this->row["ktab"];
                    $yaad->government_ref = $this->row["srkary_ktab"];
                    $yaad->tree()->associate($tree);
                    $yaad->save();
                    $this->count++;
                }
            }, 5);
        }
    }
}
