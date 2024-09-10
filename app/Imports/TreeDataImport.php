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
    public static function afterImport(AfterImport $event)
    {
        Log::info('After import excel file');
    }

    /**
     * @param  array  $array
     */
    public function array(array $array)
    {
        try {
            $count = 1;
            $tempArray = $structure = $marchesCols = [];
            $matched = false;
            $matching_columns = ['bunyadi_unwan', 'zayalunwan'];
            $treeArray = $easyArray = $yaadArray = $detailArray = $maholArray = $titles = $parents =[];
            foreach ($array as $index => $row) {
                foreach ($row as $key => $value) {
                    if (($key == $matching_columns[0] || str_contains($key, $matching_columns[1]))) {
                        $structure[$index][$key] = $value;
                    }
                }
                foreach ($row as $key => $value) {
                    for($children = 1; $children < 11; $children++) {
                        if(empty($row['zayalunwan_'.$children])) {
                            $level = $children - 1;
                            $row['title']   = $row['zayalunwan_'.$level] ?? $row['bunyadi_unwan'];
                            $row['levels']  = $level;
                            if($level == 0){
                                $row["parentTitle"] = 0;
                            } else {
                                $row["parentTitle"] = $level === 1 ? $row['bunyadi_unwan'] : $row['zayalunwan_'.($level - 1)];
                            }
                            break;
                        }
                    }
                    if (isset($value) && ($key == $matching_columns[0] || str_contains($key, $matching_columns[1]))) {

//                        if (key_exists($key, $tempArray) && $tempArray[$key] == $value) {
//                            $matched == true;
//                            continue;
//                        }else{
                            $matched == false;
                            if(!isset($row['agmaly_aanoan'])){
                                echo $key .'===='. $value. '@@@@@ <br>';
                            }
                            if(in_array($row['title'], $titles)) {
                                continue;
                            }
                            if(!isset($parents[$row['parentTitle']])) {
                                $parentTitle = Tree::whereTitle($row["parentTitle"])->first();
                                $parents[$row['parentTitle']] = $parentTitle;
                            } else {
                                $parentTitle = $parents[$row['parentTitle']];
                            }

                            $tree = new Tree;
                            $tree->title            = $row['title'];
                            $tree->government_com   = $row["government_com"] ?? 0;
                            $tree->parent()->associate($parentTitle ?? null);
                            $tree->structure        = json_encode($structure[$index]);
                            $tree->levels           = $row["levels"] ?? 0;
                            $tree->save();
                            if($tree) {
                                $titles[]       = $row['title'];
                            }

                            $detail             = new Detail;
                            $detail->abrar_id   = $row["abrar_sahb_nmbr_shmar"];
                            $detail->asif_id    = $row["asf_sahb_nmbr_shmar"];
                            $detail->age        = 1;
                            $detail->age_sr     = $row["blhath_aamr"];
                            $detail->course_no  = $count;
                            $detail->detail     = $row["mkhtsr_tfsyl"];
                            $detail->tree()->associate($tree);
                            $detail->save();
//
//                            $tempArray = $row;
//                            $easyArray[$count] = [
//                                'id' => $count,
//                                'easy' => $row["tsyl"],
//                                'mukhatab' => $row["aaoam_khoas_mktdaaa"],
//                                'rafe_ishkal' => $row["rfaa_ashkal"],
//                                'qaida' => $row["kly_akthry_gzoyastthnaaa"],
//                                'rahe_adal' => $row["kanonadyan_ahsanamksodmksod_balthatthrayaa"],
//                                'husool' => $row["hsol_ka_tryk"],
//                                'tamheed_khas' => $row["khas"],
//                                'hukam' => $row["hkmbnyaddfaa_mdrt"],
//                                'hasiat' => $row["anfrady_agtmaaay"],
//                                'shoba' => $row["akrokylggmalk"],
//                                'class' => $row["gmaaat"],
//                                'jins' => $row["mrd_aaort_dono_k_ly"],
//                                'zamana' => $row["zman"],
//                                'taleem' => $row["aalmy_o_aamly"],
//                                'amli_mashq' => $row["aamly_mshky"],
//                                'taluq' => $row["thary_batny"],
//                                'muharik' => $row["mhrkat_onthryat"],
//                            ];
//                            $yaadArray[$count] = [
//                                'id' => $count,
//                                'yad_dehani' => $row["tkrar_aalmy_aamly"],
//                                'kitni_takrar' => $row["ktny_bar_tkrar_kry"],
//                                'revision' => $row["pchly_ktab_ky_drayy"],
//                                'ahwal' => $row["daralhrbno_mslmanda"],
//                                'pasaymanzar' => $row["ps_mnthr"],
//                                'result' => $row["trz_aaml"],
//                                'shaz' => $row["shath_msayl"],
//                                'hawala' => $row["ktab"],
//                                'government_ref' => $row["srkary_ktab"]
//                            ];
//
//                            $detailArray[$count] = [
//                                'id' => $count,
//                                'abrar_id' => $row["abrar_sahb_nmbr_shmar"],
//                                'asif_id' => $row["asf_sahb_nmbr_shmar"],
//                                'age' => 1,//$row["age_group_mahol_mya_krnanyk_shbt_aaadt_alna_btana_sykana_smgana_pana"],
//                                'age_sr' => $row["blhath_aamr"],
//                                'course_no' => $count,
//                                'detail' => $row["mkhtsr_tfsyl"],
//                            ];
//
//                            $maholArray[$count] = [
//                                'id' => $count,
//                                'sunana' => $row["sunana"],
//                                'kehalwana' => $row["kehalwan"],
//                                'dekhana' => $row["dekhana"],
//                                'mashq' => $row["mashq"],
//                                'batana' => $row["batana"],
//                                'sikhana' => $row["sikhana"],
//                                'adat' => $row["adat"],
//                                'samjhana' => $row["samjhana"],
//                                'parhana' => $row["parhana"],
//                            ];
//                        }
                    }
                }
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
            dd($e->getMessage());
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
