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
use Carbon\Carbon;

class TreeDataExport implements FromCollection, WithHeadings, WithChunkReading
{
    protected $selectedTitles;
    protected $startDate;
    protected $endDate;

    public function __construct(array $selectedTitles = [], $startDate = null, $endDate = null){
        $this->selectedTitles = $selectedTitles;
        // Parse and validate dates using Carbon
        $this->startDate = $startDate ? Carbon::parse($startDate)->startOfDay() : null;
        $this->endDate = $endDate ? Carbon::parse($endDate)->endOfDay() : null;
    }
    /**
     * @return Collection
     */
    public function collection()
    {
        // Fetch the data from the database using the appropriate model
        if (!empty($this->selectedTitles)) {
            // Fetch data based on selected titles
            $treeData = Tree::whereIn('title', $this->selectedTitles)->get(); 
            $maholData = Mahol::whereIn('id', $treeData->pluck('id'))->get();
            $yaadData = Yaad::whereIn('id', $treeData->pluck('id'))->get();
            $easyData = Easy::whereIn('id', $treeData->pluck('id'))->get();
            $detailData = Detail::whereIn('id', $treeData->pluck('id'))->get();
        } else if ($this->startDate && $this->endDate){
            // Fetch the data based on date selected
            $treeData = Tree::whereBetween('created_at', [$this->startDate, $this->endDate])->get();
            $maholData = Mahol::whereIn('id', $treeData->pluck('id'))->get();
            $yaadData = Yaad::whereIn('id', $treeData->pluck('id'))->get();
            $easyData = Easy::whereIn('id', $treeData->pluck('id'))->get();
            $detailData = Detail::whereIn('id', $treeData->pluck('id'))->get();
        } else {
            // Fetch all data 
            $treeData = Tree::all();
            $maholData = Mahol::all();
            $yaadData = Yaad::all();
            $easyData = Easy::all();
            $detailData = Detail::all();
        }
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
            'ابرار صاحب نمبر شمار' => $detail[$data->id]['abrar_sahb_nmbr_shmar'],
            'آصف صاحب نمبر شمار' => $detail[$data->id]['asf_sahb_nmbr_shmar'],
            'بلحاظ عمر' => $detail[$data->id]['blhath_aamr'],
            'Sr: No' => $data->id,
            'نصابی نمبر' => $detail[$data->id]['nsaby_nmbr'],
            'parent' => $data->parent_id,
            'ویب سائٹ نمبر شمار' => $data->sr,
            'bunyadi_unwan' => $structure['bunyadi_unwan'],
            'zayalunwan_1' => key_exists('zayalunwan_1', $structure) ? $structure['zayalunwan_1'] : '',
            'zayalunwan_2' => key_exists('zayalunwan_2', $structure) ? $structure['zayalunwan_2'] : "",
            'zayalunwan_3' => key_exists('zayalunwan_3', $structure) ? $structure['zayalunwan_3'] : "",
            'zayalunwan_4' => key_exists('zayalunwan_4', $structure) ? $structure['zayalunwan_4'] : "",
            'zayalunwan_5' => key_exists('zayalunwan_5', $structure) ? $structure['zayalunwan_5'] : "",
            'zayalunwan_6' => key_exists('zayalunwan_6', $structure) ? $structure['zayalunwan_6'] : "",
            'zayalunwan_7' => key_exists('zayalunwan_7', $structure) ? $structure['zayalunwan_7'] : "",
            'zayalunwan_8' => key_exists('zayalunwan_8', $structure) ? $structure['zayalunwan_8'] : "",
            'zayalunwan_9' => key_exists('zayalunwan_9', $structure) ? $structure['zayalunwan_9'] : "",
            'zayalunwan_10' => key_exists('zayalunwan_10', $structure) ? $structure['zayalunwan_10'] : "",
            'اجمالی عنوان' => $data->title,
            'مختصر تفصیل' => $detail[$data->id]['mkhtsr_tfsyl'],
            'پس منظر' => $yaad[$data->id]['ps_mnthr'],
            'طرز عمل' => $yaad[$data->id]['trz_aaml'],
            'تسہیل' => $easy[$data->id]['tsyl'],
            'عوام-خواص-مقتداء' => $easy[$data->id]['mukhatab'],
            'رفع اشکال' => $easy[$data->id]['rfaa_ashkal'],
            'کلی، اکثری، جزوی،استثناء' => $easy[$data->id]['kly_akthry_gzoyastthnaaa'],
            'قانونا/دیانۃ/ احسانا/مقصود/مقصود بالذات/ذرائع' => $easy[$data->id]['kanonadyan_ahsanamksodmksod_balthatthrayaa'],
            'حصول کا طریقہ' => $easy[$data->id]['hsol_ka_tryk'],
            'خاص' => $easy[$data->id]['khas'],
            'عام' => $easy[$data->id]['khas'],
            'حکم/بنیاد/دفع مضرت' => $easy[$data->id]['hkmbnyaddfaa_mdrt'],
            'انفرادی-اجتماعی' => $easy[$data->id]['anfrady_agtmaaay'],
            'ڈاکٹر/وکیل/جج/مالک' => $easy[$data->id]['akrokylggmalk'],
            'جماعت' => $easy[$data->id]['gmaaat'],
            'مرد -عورت - دونوں کے لئے ' => $easy[$data->id]['mrd_aaort_dono_k_ly'],
            'زمانہ' => $easy[$data->id]['zman'],
            'علمی و عملی' => $easy[$data->id]['aalmy_o_aamly'],
            'عملی مشقی' => $easy[$data->id]['aamly_mshky'],
            'ظاہری ، باطنی' => $easy[$data->id]['thary_batny'],
            'محرکات ونظریات' => $easy[$data->id]['mhrkat_onthryat'],
            'تکرار، علمی، عملی' => $yaad[$data->id]['tkrar_aalmy_aamly'],
            'کتنی بار تکرار کریں' => $yaad[$data->id]['ktny_bar_tkrar_kry'],
            'پچھلی کتاب کی دہرائی' => $yaad[$data->id]['pchly_ktab_ky_drayy'],
            'دارالحرب/نو مسلم/آندھا' => $yaad[$data->id]['daralhrbno_mslmanda'],
            ' شاذ مسائل' => $yaad[$data->id]['shath_msayl'],
            'کتاب' => $yaad[$data->id]['ktab'],
            'سرکاری کتاب' => $yaad[$data->id]['srkary_ktab'],
            'government_com' => $data->government_com,
            'sunana' => $mahol[$data->id]['sunana'],
            'kehalwan' => $mahol[$data->id]['kehalwan'],
            'dekhana' => $mahol[$data->id]['dekhana'],
            'mashq' => $mahol[$data->id]['mashq'],
            'batana' => $mahol[$data->id]['batana'],
            'sikhana' => $mahol[$data->id]['sikhana'],
            'adat' => $mahol[$data->id]['adat'],
            'samjhana' => $mahol[$data->id]['samjhana'],
            'parhana' => $mahol[$data->id]['parhana'],

            ];
        }
        return collect($exportData);
    }

    /**
     * @return array
     */
    public function headings(): array
    {
        // Provide the headings for the Excel file
        return [
            'ابرار صاحب نمبر شمار',
            'آصف صاحب نمبر شمار',
            'بلحاظ عمر',
            'Sr: No',
            'نصابی نمبر',
            'parent',
            'ویب سائٹ نمبر شمار',
            'bunyadi_unwan',
            'zayalunwan_1',
            'zayalunwan_2',
            'zayalunwan_3',
            'zayalunwan_4',
            'zayalunwan_5',
            'zayalunwan_6',
            'zayalunwan_7',
            'zayalunwan_8',
            'zayalunwan_9',
            'zayalunwan_10',
            'اجمالی عنوان',
            'مختصر تفصیل',
            'پس منظر',
            'طرز عمل',
            'تسہیل',
            'عوام-خواص-مقتداء',
            'رفع اشکال',
            'کلی، اکثری، جزوی،استثناء',
            'قانونا/دیانۃ/ احسانا/مقصود/مقصود بالذات/ذرائع',
            'حصول کا طریقہ',
            'خاص',
            'عام',
            'حکم/بنیاد/دفع مضرت',
            'انفرادی-اجتماعی',
            'ڈاکٹر/وکیل/جج/مالک',
            'جماعت',
            'مرد -عورت - دونوں کے لئے ',
            'زمانہ',
            'علمی و عملی',
            'عملی مشقی',
            'ظاہری ، باطنی',
            'محرکات ونظریات',
            'تکرار، علمی، عملی',
            'کتنی بار تکرار کریں',
            'پچھلی کتاب کی دہرائی',
            'دارالحرب/نو مسلم/آندھا',
            ' شاذ مسائل',
            'کتاب',
            'سرکاری کتاب',
            'government_com',
            'sunana',
            'kehalwan',
            'dekhana',
            'mashq',
            'batana',
            'sikhana',
            'adat',
            'samjhana',
            'parhana',
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
