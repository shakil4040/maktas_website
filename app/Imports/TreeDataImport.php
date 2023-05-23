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
            $treeArray = $easyArray = $yaadArray = $detailArray = $maholArray = $keyValueArray = [];
            foreach ($array as $index => $row) {//dd($row);
                foreach ($row as $key => $value) {
                    $row["bunyadi_unwan"] = isset($row["bunyadi_unwan"]) ? trim($row["bunyadi_unwan"]) : null;
                    if (isset($row["bunyadi_unwan"]) && !key_exists($row["bunyadi_unwan"], $keyValueArray)) {
                        $keyValueArray[$row["bunyadi_unwan"]] = $row["oyb_say_nmbr_shmar"];
                        $treeArray[] = [
                            'id' => $count,
                            'sr' => $row["oyb_say_nmbr_shmar"],
                            'title' => $row["bunyadi_unwan"],
                            'government_com' => $row["government_com"] ?? 0,
                            'parent_id' => 0,
                        ];
                    }
                    $needle   = 'zayalunwan';
                    if (str_contains($key, $needle)) {
                        $row[$key] = isset($row[$key]) ? trim($row[$key]) : null;
                        $data = explode('_', $key);
                        $parent = "bunyadi_unwan";
                        if ($data[1] > 1) {
                            $parent = $data[0].'_'.$data[1] - 1;
                        }

                        if (isset($row[$key]) && !key_exists($row[$key], $keyValueArray)) {
                            $keyValueArray[$row[$key]] = $row["oyb_say_nmbr_shmar"];
                            $treeArray[] = [
                                'id' => $count,
                                'sr' => $row["oyb_say_nmbr_shmar"],
                                'title' => $row[$key],
                                'government_com' => $row["government_com"] ?? 0,
                                'parent_id' => $keyValueArray[$row[$parent]],
                            ];
                        }
                    }
                    if (isset($row["nsaby_nmbr"]) && $row["nsaby_nmbr"] == "-") {
                        $row["nsaby_nmbr"] = null;
                    }

                    $easyArray[$count] = [
                        'id' => $count,
                        'easy' => $row["tsyl"],
                        'mukhatab' => $row["aaoam_khoas_mktdaaa"],
                        'rafe_ishkal' => $row["rfaa_ashkal"],
                        'qaida' => $row["kly_akthry_gzoyastthnaaa"],
                        'rahe_adal' => $row["kanonadyan_ahsanamksodmksod_balthatthrayaa"],
                        'husool' => $row["hsol_ka_tryk"],
                        'tamheed_khas' => $row["khas"],
                        'hukam' => $row["hkmbnyaddfaa_mdrt"],
                        'hasiat' => $row["anfrady_agtmaaay"],
                        'shoba' => $row["akrokylggmalk"],
                        'class' => $row["gmaaat"],
                        'jins' => $row["mrd_aaort_dono_k_ly"],
                        'zamana' => $row["zman"],
                        'taleem' => $row["aalmy_o_aamly"],
                        'amli_mashq' => $row["aamly_mshky"],
                        'taluq' => $row["thary_batny"],
                        'muharik' => $row["mhrkat_onthryat"],
                    ];
                    $yaadArray[$count] = [
                        'id' => $count,
                        'yad_dehani' => $row["tkrar_aalmy_aamly"],
                        'kitni_takrar' => $row["ktny_bar_tkrar_kry"],
                        'revision' => $row["pchly_ktab_ky_drayy"],
                        'ahwal' => $row["daralhrbno_mslmanda"],
                        'pasaymanzar' => $row["ps_mnthr"],
                        'result' => $row["trz_aaml"],
                        'shaz' => $row["shath_msayl"],
                        'hawala' => $row["ktab"],
                        'government_ref' => $row["srkary_ktab"]
                    ];

                    $detailArray[$count] = [
                        'id' => $count,
                        'abrar_id' => $row["abrar_sahb_nmbr_shmar"],
                        'asif_id' => $row["asf_sahb_nmbr_shmar"],
                        'age' => 1,//$row["age_group_mahol_mya_krnanyk_shbt_aaadt_alna_btana_sykana_smgana_pana"],
                        'age_sr' => $row["blhath_aamr"],
                        'course_no' => $row["nsaby_nmbr"],
                        'detail' => $row["mkhtsr_tfsyl"],
                    ];

                    $maholArray[$count] = [
                        'id' => $count,
                        'sunana' => $row["sunana"],
                        'kehalwana' => $row["kehalwan"],
                        'dekhana' => $row["dekhana"],
                        'mashq' => $row["mashq"],
                        'batana' => $row["batana"],
                        'sikhana' => $row["sikhana"],
                        'adat' => $row["adat"],
                        'samjhana' => $row["samjhana"],
                        'parhana' => $row["parhana"],
                    ];
                }
                $count++;
            }
            Tree::insert($treeArray);
//            Detail::insert(array_values($detailArray));
            foreach (array_chunk(array_values($detailArray),1000) as $t)
            {
                Detail::insert(array_values($t));
            }
            foreach (array_chunk(array_values($easyArray),1000) as $t)
            {
                Easy::insert(array_values($t));
            }
            foreach (array_chunk(array_values($maholArray),1000) as $t)
            {
                Mahol::insert(array_values($t));
            }
            foreach (array_chunk(array_values($yaadArray),1000) as $t)
            {
                Yaad::insert(array_values($t));
            }
        } catch (Exception $e) {
            dd($e->getMessage());
        }
//        dd($treeArray, $detailArray, $easyArray, $maholArray, $yaadArray);
    }

    public function chunkSize(): int
    {
        return 8000;
    }

    public function startRow(): int
    {
        Log::info('Start row excel file');
        return 2;
    }

    public function headingRow(): int
    {
        return 3;
    }
}
