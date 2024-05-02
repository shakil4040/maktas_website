<?php

namespace App\Http\Controllers;

use App\Models\Tree;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SearchController extends Controller
{
    public function index()
    {
    return view('search');
    }
    public function search(Request $request)
    {
    if($request->ajax())
    {
    $output="";
    $trees=Tree::where('title','LIKE','%'.$request->search."%")->get();
    if($trees)
    {
    foreach ($trees as $key => $tree) {
     if   ($tree->parent_id >= 1000000 && $tree->parent_id < 2000000 ){
        $parent = "تمہیدات عامہ";
     }
     elseif($tree->parent_id >= 2000000 && $tree->parent_id < 3000000){
        $parent = "عقائد";
     }
     elseif($tree->parent_id >= 3000000 && $tree->parent_id < 4000000){
        $parent = "عبادات";
     }
     elseif($tree->parent_id >= 4000000 && $tree->parent_id < 5000000){
        $parent = "معاملات";
     }
     elseif($tree->parent_id >= 5000000 && $tree->parent_id < 6000000){
        $parent = "معاشرت";
     }
     elseif($tree->parent_id >= 6000000 && $tree->parent_id < 7000000){
        $parent = "اخلاقیات";
     }
     elseif($tree->parent_id >= 7000000 && $tree->parent_id < 8000000){
        $parent = "اسلامی ریاست";
     }
     elseif($tree->parent_id >= 8000000 && $tree->parent_id < 8500000){
        $parent = "قرآن مجید";
     }
     elseif($tree->parent_id >= 8500000 && $tree->parent_id < 9000000){
        $parent = "حدیث مبارکہ";
     }
     elseif($tree->parent_id >= 9000000 && $tree->parent_id < 10000000){
        $parent = "سیرت النبی صلی اللہ تعالی علیہ وآلہ وسلم";
     }
     elseif($tree->parent_id >= 10000000 && $tree->parent_id < 11000000){
        $parent = "سیرت انبیاء علیھم السلام";
     }
     elseif($tree->parent_id >= 11000000 && $tree->parent_id < 12000000){
        $parent = "سیرالصحابہ";
     }
     elseif($tree->parent_id >= 12000000 && $tree->parent_id < 13000000){
        $parent = "سیر الصالحین";
     }
     elseif($tree->parent_id >= 13000000 && $tree->parent_id < 14000000){
        $parent = "تاریخ امت مسلمہ";
     }
     elseif($tree->parent_id >= 14000000 && $tree->parent_id < 15000000){
        $parent = "حفاظت واشاعت علوم";
     }
     elseif($tree->parent_id >= 15000000 && $tree->parent_id < 16000000){
        $parent = "مجموعہ معلومات ومعاون دینی تعلیمات";
     }
    $output.='<tr>'.
    '<td>'.$tree->sr.'</td>'.
    '<td class = "title" onclick="detail(\''.$tree->detail->detail.'\',\''.$tree->title.'\')">'.$tree->title.'</td>'.
    '<td>'.$parent.'</td>'.
    '</tr>';
    }
    return Response($output);
       }
       }
    }
}
