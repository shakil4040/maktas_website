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
use Maatwebsite\Excel\Concerns\WithTitle;
use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet;
use PhpOffice\PhpSpreadsheet\Cell\Coordinate;
use Carbon\Carbon;

class TreeDataExport implements FromCollection, WithHeadings, WithChunkReading, WithStyles, WithTitle
{
    protected ?Tree $selectedTitle;
    protected ?Carbon $startDate;
    protected ?Carbon $endDate;
    protected array $topicsId =[];

    public function __construct(Tree $selectedTitle = null, $startDate = null, $endDate = null){
        $this->selectedTitle = $selectedTitle;
        // Parse and validate dates using Carbon
        $this->startDate = $startDate ? Carbon::parse($startDate)->startOfDay() : null;
        $this->endDate = $endDate ? Carbon::parse($endDate)->endOfDay() : null;
    }


    /**
     * @param Tree|null $item
     * @return array
     */
    private function getChildrenRecursive(?Tree $item): array
    {
        $children = [];
        $children[]         = $item;
        $this->topicsId[]   = $item->id;
        // Convert children collection to array and then reverse the order
        $reversedChildren = array_reverse($item->children->toArray());

        // Recursively retrieve each child and their children in reverse order
        foreach ($reversedChildren as $child) {
            // Fetch children of this child and merge them at the end
            $children = array_merge($children, $this->getChildrenRecursive(Tree::find($child['id']))); // Use find() to get Tree instance
            $this->topicsId[] = $child['id'];
        }

        return $children;
    }
    /**
     * @return Collection
     */
    public function collection()
    {
        $topics =[];
        // Fetch the data from the database using the appropriate model
        if (!empty($this->selectedTitle)) {
            // Fetch data based on selected titles
            /** @var  $topics */
            $topics     = $this->getChildrenRecursive($this->selectedTitle);
            $mahol      = Mahol::whereIn('tree_id', $this->topicsId)->get()->keyBy('tree_id');
            $yaad       = Yaad::whereIn('tree_id', $this->topicsId)->get()->keyBy('tree_id');
            $easy       = Easy::whereIn('tree_id', $this->topicsId)->get()->keyBy('tree_id');
            $detail     = Detail::whereIn('tree_id', $this->topicsId)->get()->keyBy('tree_id');
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
        $exportData = [];
        foreach ($topics as $data) {
            $parentArray[$data->id] = $data->title;
            $structure = json_decode($data->structure, true);
            $exportData[$data->id] = [
                'ابرار صاحب نمبر شمار' => $detail[$data->id]->abrar_id ?? "",
                'آصف صاحب نمبر شمار' => $detail[$data->id]->asif_id ?? "",
                'بلحاظ عمر' => $detail[$data->id]->age_sr ?? "",
                'نصابی نمبر' => $detail[$data->id]->course_no ?? "",
                'شناخت' => $data->id,
                'parent_id' => $data->parent_id,
            ];
            if(!empty($structure['bunyadi_unwan'])) {
                $exportData[$data->id] = array_merge($exportData[$data->id], [
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
                    'zayalunwan_10' => key_exists('zayalunwan_10', $structure) ? $structure['zayalunwan_10'] : ""
                ]);
            }

            $exportData[$data->id] = array_merge($exportData[$data->id],[
                'اجمالی عنوان' => $data->title,
                'مختصر تفصیل' => $detail[$data->id]->detail ?? "",
                'پس منظر' => $yaad[$data->id]->pasaymanzar ?? "",
                'طرز عمل' => $yaad[$data->id]->result ?? "",
                'تسہیل' => $easy[$data->id]->easy ?? "",
                'عوام-خواص-مقتداء' => $easy[$data->id]->mukhatab ?? "",
                'رفع اشکال' => $easy[$data->id]->rafe_ishkal ?? "",
                'کلی، اکثری، جزوی،استثناء' => $easy[$data->id]->qaida ?? "",
                'قانونا/دیانۃ/ احسانا/مقصود/مقصود بالذات/ذرائع' => $easy[$data->id]->rahe_adal ?? "",
                'حصول کا طریقہ' => $easy[$data->id]->husool,
                'خاص' => $easy[$data->id]->tamheed_khas ?? "",
                'عام' => $easy[$data->id]->tamheed_khas ?? "",
                'حکم/بنیاد/دفع مضرت' => $easy[$data->id]->hukam ?? "",
                'انفرادی-اجتماعی' => $easy[$data->id]->hasiat ?? "",
                'ڈاکٹر/وکیل/جج/مالک' => $easy[$data->id]->shoba ?? "",
                'جماعت' => $easy[$data->id]->class ?? "",
                'مرد -عورت - دونوں کے لئے ' => $easy[$data->id]->jins ?? "",
                'زمانہ' => $easy[$data->id]->zamana ?? "",
                'علمی و عملی' => $easy[$data->id]->taleem ?? "",
                'عملی مشقی' => $easy[$data->id]->amli_mashq ?? "",
                'ظاہری ، باطنی' => $easy[$data->id]->taluq ?? "",
                'محرکات ونظریات' => $easy[$data->id]->muharik ?? "",
                'تکرار، علمی، عملی' => $yaad[$data->id]->yad_dehani ?? "",
                'کتنی بار تکرار کریں' => $yaad[$data->id]->kitni_takrar ?? "",
                'پچھلی کتاب کی دہرائی' => $yaad[$data->id]->revision ?? "",
                'دارالحرب/نو مسلم/آندھا' => $yaad[$data->id]->ahwal ?? "",
                ' شاذ مسائل' => $yaad[$data->id]->shaz ?? "",
                'کتاب' => $yaad[$data->id]->hawala ?? "",
                'سرکاری کتاب' => $yaad[$data->id]->government_ref ?? "",
                'government_com' => $data->government_com,
                'sunana' => $mahol[$data->id]->sunana ?? "",
                'kehalwan' => $mahol[$data->id]->kehalwana ?? "",
                'dekhana' => $mahol[$data->id]->dekhana ?? "",
                'mashq' => $mahol[$data->id]->mashq ?? "",
                'batana' => $mahol[$data->id]->batana ?? "",
                'sikhana' => $mahol[$data->id]->sikhana ?? "",
                'adat' => $mahol[$data->id]->adat ?? "",
                'samjhana' => $mahol[$data->id]->samjhana ?? "",
                'parhana' => $mahol[$data->id]->parhana ?? "",
            ]);
        }

        return collect($exportData);
    }

    /**
     * @return array
     */
    public function headings(): array
    {
        return config("settings.CoursesColumns");
    }

    public function styles(Worksheet $sheet)
    {
        $sheet->setRightToLeft(true);
        return [
            1 => ['font' => ['bold' => true, 'size' => 14] ,
                'fill' => [
                    'fillType' => \PhpOffice\PhpSpreadsheet\Style\Fill::FILL_SOLID,
                    'startColor' => ['rgb' => '8fb7f2'],
                    'name' => 'Jameel Noori Nastaleeq',
                ],
                'borders' => [
                    'allBorders' => [
                        'borderStyle' => \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THIN,
                        'color' => ['rgb' => '000000'],  // Black border color
                    ],
                ],
            ],
        ];
    }

    public function chunkSize(): int
    {
        // Define the number of rows to be written per chunk
        return 35000;
    }

    /**
     * @return string
     */
    public function title(): string {
        return 'Courses Sheet';
    }
}
