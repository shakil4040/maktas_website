<?php

namespace App\Exports;

use App\Models\Tree;

// Replace with the appropriate model for your data
use App\Models\Mahol;
use App\Models\Yaad;
use App\Models\Easy;
use App\Models\Detail;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithChunkReading;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Concerns\WithStyles;
use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet;
use PhpOffice\PhpSpreadsheet\Cell\Coordinate;
class TreeDataExport implements FromCollection, WithHeadings, WithChunkReading
{
    /**
     * @return Collection
     */
    public function collection()
    {
        // Fetch the data from the database using the appropriate model
        $treeData = Tree::all(); // Replace with the appropriate query if needed
        $maholData = Mahol::all();
        $yaadData = Yaad::all();
        $easyData = Easy::all();
        $detailData = Detail::all();

        // Transform the data into a format suitable for exporting
        $exportData = $easy = $mahol = $detail = $yaad = $parentArray = [];

        // Add data from Mahol table
        foreach ($maholData as $data) {
            $mahol[$data->id] = [
                'sunana' => $data->sunana,
                'kehalwan' => $data->kehalwan,
                'dekhana' => $data->dekhana,
                'mashq' => $data->mashq,
                'batana' => $data->batana,
                'sikhana' => $data->sikhana,
                'adat' => $data->adat,
                'samjhana' => $data->samjhana,
                'parhana' => $data->parhana,
            ];
        }

        // Add data from Yaad table
        foreach ($yaadData as $data) {
            $yaad[$data->id] = [
                'tkrar_aalmy_aamly' => $data->yad_dehani,
                'ktny_bar_tkrar_kry' => $data->kitni_takrar,
                'pchly_ktab_ky_drayy' => $data->revision,
                'daralhrbno_mslmanda' => $data->ahwal,
                'ps_mnthr' => $data->pasaymanzar,
                'trz_aaml' => $data->result,
                'shath_msayl' => $data->shaz,
                'ktab' => $data->hawala,
                'srkary_ktab' => $data->government_ref
            ];
        }

        // Add data from Easy table
        foreach ($easyData as $data) {
            $easy[$data->id] = [
                'tsyl' => $data->easy,
                'mukhatab' => $data->mukhatab,
                'rfaa_ashkal' => $data->rafe_ishkal,
                'kly_akthry_gzoyastthnaaa' => $data->qaida,
                'kanonadyan_ahsanamksodmksod_balthatthrayaa' => $data->rahe_adal,
                'hsol_ka_tryk' => $data->husool,
                'khas' => $data->tamheed_khas,
                'hkmbnyaddfaa_mdrt' => $data->hukam,
                'anfrady_agtmaaay' => $data->hasiat,
                'akrokylggmalk' => $data->shoba,
                'gmaaat' => $data->class,
                'mrd_aaort_dono_k_ly' => $data->jins,
                'zman' => $data->zamana,
                'aalmy_o_aamly' => $data->taleem,
                'aamly_mshky' => $data->amli_mashq,
                'thary_batny' => $data->taluq,
                'mhrkat_onthryat' => $data->muharik,
            ];
        }

        // Add data from Detail table
        foreach ($detailData as $data) {
            $detail[$data->id] = [
                'abrar_sahb_nmbr_shmar' => $data->abrar_id,
                'asf_sahb_nmbr_shmar' => $data->asif_id,
                'age' => 1,//$data->age_group_mahol_mya_krnanyk_shbt_aaadt_alna_btana_sykana_smgana_pana,
                'blhath_aamr' => $data->age_sr,
                'nsaby_nmbr' => $data->course_no,
                'mkhtsr_tfsyl' => $data->detail,
            ];
        }

        foreach ($treeData as $data) {
            $parentArray[$data->id] = $data->title;
            $structure = json_decode($data->structure, true);
            $exportData[$data->id] = [
                'parhana' => $mahol[$data->id]['parhana'],
                'samjhana' => $mahol[$data->id]['samjhana'],
                'adat' => $mahol[$data->id]['adat'],
                'sikhana' => $mahol[$data->id]['sikhana'],
                'batana' => $mahol[$data->id]['batana'],
                'mashq' => $mahol[$data->id]['mashq'],
                'dekhana' => $mahol[$data->id]['dekhana'],
                'kehalwan' => $mahol[$data->id]['kehalwan'],
                'sunana' => $mahol[$data->id]['sunana'],
                'government_com' => $data->government_com,
                'سرکاری کتاب' => $yaad[$data->id]['srkary_ktab'],
                'کتاب' => $yaad[$data->id]['ktab'],
                ' شاذ مسائل' => $yaad[$data->id]['shath_msayl'],
                'دارالحرب/نو مسلم/آندھا' => $yaad[$data->id]['daralhrbno_mslmanda'],
                'پچھلی کتاب کی دہرائی' => $yaad[$data->id]['pchly_ktab_ky_drayy'],
                'کتنی بار تکرار کریں' => $yaad[$data->id]['ktny_bar_tkrar_kry'],
                'تکرار، علمی، عملی' => $yaad[$data->id]['tkrar_aalmy_aamly'],
                'محرکات ونظریات' => $easy[$data->id]['mhrkat_onthryat'],
                'ظاہری ، باطنی' => $easy[$data->id]['thary_batny'],
                'عملی مشقی' => $easy[$data->id]['aamly_mshky'],
                'علمی و عملی' => $easy[$data->id]['aalmy_o_aamly'],
                'زمانہ' => $easy[$data->id]['zman'],
                'مرد -عورت ۔  دونوں کے لئے ' => $easy[$data->id]['mrd_aaort_dono_k_ly'],
                'جماعت' => $easy[$data->id]['gmaaat'],
                'ڈاکٹر/وکیل/جج/مالک' => $easy[$data->id]['akrokylggmalk'],
                'انفرادی-اجتماعی' => $easy[$data->id]['anfrady_agtmaaay'],
                'حکم/بنیاد/دفع مضرت' => $easy[$data->id]['hkmbnyaddfaa_mdrt'],
                'عام' => $easy[$data->id]['khas'],
                'خاص' => $easy[$data->id]['khas'],
                'حصول کا طریقہ' => $easy[$data->id]['hsol_ka_tryk'],
                'قانونا/دیانۃ/ احسانا/مقصود/مقصود بالذات/ذرائع' => $easy[$data->id]['kanonadyan_ahsanamksodmksod_balthatthrayaa'],
                'کلی، اکثری، جزوی،استثناء' => $easy[$data->id]['kly_akthry_gzoyastthnaaa'],
                'رفع اشکال' => $easy[$data->id]['rfaa_ashkal'],
                'عوام-خواص-مقتداء' => $easy[$data->id]['mukhatab'],
                'تسہیل' => $easy[$data->id]['tsyl'],
                'طرز عمل' => $yaad[$data->id]['trz_aaml'],
                'پس منظر' => $yaad[$data->id]['ps_mnthr'],
                'مختصر تفصیل' => $detail[$data->id]['mkhtsr_tfsyl'],
                'اجمالی عنوان' => $data->title,
                'ویب سائٹ نمبر شمار' => $data->sr,
                'zayalunwan_10' => key_exists('zayalunwan_10', $structure) ? $structure['zayalunwan_10'] : "",
                'zayalunwan_9' => key_exists('zayalunwan_9', $structure) ? $structure['zayalunwan_9'] : "",
                'zayalunwan_8' => key_exists('zayalunwan_8', $structure) ? $structure['zayalunwan_8'] : "",
                'zayalunwan_7' => key_exists('zayalunwan_7', $structure) ? $structure['zayalunwan_7'] : "",
                'zayalunwan_6' => key_exists('zayalunwan_6', $structure) ? $structure['zayalunwan_6'] : "",
                'zayalunwan_5' => key_exists('zayalunwan_5', $structure) ? $structure['zayalunwan_5'] : "",
                'zayalunwan_4' => key_exists('zayalunwan_4', $structure) ? $structure['zayalunwan_4'] : "",
                'zayalunwan_3' => key_exists('zayalunwan_3', $structure) ? $structure['zayalunwan_3'] : "",
                'zayalunwan_2' => key_exists('zayalunwan_2', $structure) ? $structure['zayalunwan_2'] : "",
                'zayalunwan_1' => key_exists('zayalunwan_1', $structure) ? $structure['zayalunwan_1'] : '',
                'bunyadi_unwan' => $structure['bunyadi_unwan'],
                'parent' => $data->parent_id,
                'نصابی نمبر' => $detail[$data->id]['nsaby_nmbr'],
                'Sr: No' => $data->id,
                'بلحاظ عمر' => $detail[$data->id]['blhath_aamr'],
                'آصف صاحب نمبر شمار' => $detail[$data->id]['asf_sahb_nmbr_shmar'],
                'ابرار صاحب نمبر شمار' => $detail[$data->id]['abrar_sahb_nmbr_shmar'],
            ];
        }

//        dd($exportData);
        return collect($exportData);
    }

    /**
     * @return array
     */
    public function headings(): array
    {
        // Provide the headings for the Excel file
        return [
            'parhana',
            'samjhana',
            'adat',
            'sikhana',
            'batana',
            'mashq',
            'dekhana',
            'kehalwan',
            'sunana',
            'government_com',
            'سرکاری کتاب',
            'کتاب',
            ' شاذ مسائل',
            'دارالحرب/نو مسلم/آندھا',
            'پچھلی کتاب کی دہرائی',
            'کتنی بار تکرار کریں',
            'تکرار، علمی، عملی',
            'محرکات ونظریات',
            'ظاہری ، باطنی',
            'عملی مشقی',
            'علمی و عملی',
            'زمانہ',
            'مرد -عورت ۔  دونوں کے لئے ',
            'جماعت',
            'ڈاکٹر/وکیل/جج/مالک',
            'انفرادی-اجتماعی',
            'حکم/بنیاد/دفع مضرت',
            'عام',
            'خاص',
            'حصول کا طریقہ',
            'قانونا/دیانۃ/ احسانا/مقصود/مقصود بالذات/ذرائع',
            'کلی، اکثری، جزوی،استثناء',
            'رفع اشکال',
            'عوام-خواص-مقتداء',
            'تسہیل',
            'طرز عمل',
            'پس منظر',
            'مختصر تفصیل',
            'اجمالی عنوان',
            'ویب سائٹ نمبر شمار',
            'zayalunwan_10',
            'zayalunwan_9',
            'zayalunwan_8',
            'zayalunwan_7',
            'zayalunwan_6',
            'zayalunwan_5',
            'zayalunwan_4',
            'zayalunwan_3',
            'zayalunwan_2',
            'zayalunwan_1',
            'bunyadi_unwan',
            'parent',
            'نصابی نمبر',
            'Sr: No',
            'بلحاظ عمر',
            'آصف صاحب نمبر شمار',
            'ابرار صاحب نمبر شمار',

        ];
    }



    public function styles(Worksheet $sheet)
    {
        $columnCount = count($this->headings()); // Get the number of columns

        // Define merged columns in the header
        $sheet->setMergeColumn([
            'columns' => range('A', chr(65 + $columnCount - 1)), // A, B, C, ..., Z, AA, AB, ...
            'rows' => [[1, 2, 3]], // Merged rows (A1, B1, C1, A2, B2, C2, A3, B3, C3)
        ]);

        // Set alignment for the header
        $sheet->getStyle('A1:' . chr(64 + $columnCount) . '3')->getAlignment()->setHorizontal('center');

        // ... other styles ...
    }

    public function chunkSize(): int
    {
        // Define the number of rows to be written per chunk
        return 35000;
    }
}
