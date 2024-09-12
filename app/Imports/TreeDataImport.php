<?php

namespace App\Imports;

use App\Models\Detail;
use App\Models\Easy;
use App\Models\Mahol;
use App\Models\Tree;
use App\Models\Yaad;
use Exception;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Maatwebsite\Excel\Concerns\WithChunkReading;
use Maatwebsite\Excel\Events\AfterImport;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Concerns\ToArray;

class TreeDataImport implements ToArray, ShouldQueue, WithChunkReading, WithHeadingRow
{
    private $row;
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
            $count = 1;
            $tempArray = $structure = $marchesCols = [];
            $matched = false;
            $matching_columns = ['bunyadi_unwan', 'zayalunwan'];
            $treeArray = $easyArray = $yaadArray = $detailArray = $maholArray = $titles = $parents = [];
            foreach ($array as $index => $row) {
                $this->row = $row;
                if(is_null($row)) {
                    continue;
                }
                foreach ($row as $key => $value) {
                    if (($key == $matching_columns[0] || str_contains($key, $matching_columns[1]))) {
                        $structure[$index][$key] = $value;
                    }
                }

                for ($children = 1; $children < 11; $children++) {
                    if (empty($row['zayalunwan_' . $children])) {
                        $level = $children - 1;
                        $row['title'] = $row['zayalunwan_' . $level] ?? $row['bunyadi_unwan'];
                        $row['levels'] = $level;
                        if ($level == 0) {
                            $row["parentTitle"] = 0;
                        } else {
                            $row["parentTitle"] = $level === 1 ? $row['bunyadi_unwan'] : $row['zayalunwan_' . ($level - 1)];
                        }
                        break;
                    }
                }
//                if (isset($value) && ($key == $matching_columns[0] || str_contains($key, $matching_columns[1]))) {

//                        if (key_exists($key, $tempArray) && $tempArray[$key] == $value) {
//                            $matched == true;
//                            continue;
//                        }else{
                    $matched == false;
//                    if (!isset($row['agmaly_aanoan'])) {
//                        echo $key . '====' . $value . '@@@@@ <br>';
//                    }
                    if (!isset($row['title']) && in_array($row['title'], $titles)) {
                        continue;
                    }
                    if (!isset($parents[$row['parentTitle']])) {
                        $parentTitle = Tree::whereTitle($row["parentTitle"])->first();
                        $parents[$row['parentTitle']] = $parentTitle;
                    } else {
                        $parentTitle = $parents[$row['parentTitle']];
                    }
                    DB::transaction(function () use ($row, $structure, $index, $count, $parentTitle, &$titles) {
                        $tree = new Tree;
                        $tree->title = $row['title'];
                        $tree->government_com = $row["government_com"] ?? 0;
                        $tree->parent()->associate($parentTitle ?? null);
                        $tree->structure = json_encode($structure[$index]);
                        $tree->levels = $row["levels"] ?? 0;
                        $tree->save();
                        if ($tree) {
                            $titles[] = $row['title'];
                        }

                        $detail = new Detail;
                        $detail->abrar_id = $row["abrar_sahb_nmbr_shmar"];
                        $detail->asif_id = $row["asf_sahb_nmbr_shmar"];
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
//                            $tempArray = $row;
//                        }
                    }, 5);
//                }
                $count++;
            }
//            foreach (array_chunk(array_values($treeArray),1000) as $t)
//            {
//
//                Tree::insert(array_values($t));
//            }
//            foreach (array_chunk(array_values($detailArray),1000) as $t)
//            {
//                Detail::insert(array_values($t));
//            }
//            foreach (array_chunk(array_values($easyArray),1000) as $t)
//            {
//                Easy::insert(array_values($t));
//            }
//            foreach (array_chunk(array_values($maholArray),1000) as $t)
//            {
//                Mahol::insert(array_values($t));
//            }
//            foreach (array_chunk(array_values($yaadArray),1000) as $t)
//            {
//                Yaad::insert(array_values($t));
//            }
        } catch (Exception $e) {
            dd($e->getMessage(), $this->row );
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
}
