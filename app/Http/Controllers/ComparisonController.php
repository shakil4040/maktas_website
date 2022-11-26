<?php

namespace App\Http\Controllers;

use App\Models\Tree;
use App\Models\Detail;
use Illuminate\Http\Request;

class ComparisonController extends Controller
{
    public function main(){
        $allCategories = Tree::pluck('title','sr')->all();
        return view('comparison.main',compact('allCategories'));
    }
    public function naseehaClasses(){
        
        $allCategories = Tree::pluck('title','sr')->all();
        return view('comparison.naseehaClasses',compact('allCategories'));
    }
    public function naseeha($class){
        $categories = Tree::whereRelation('detail', 'age', '=', $class)->orderBy('sr','asc')->get();
        $allCategories = Tree::pluck('title','sr')->all();
        return view('comparison.naseeha',compact('categories','allCategories'));
    }

    public function maktabClasses(){
        return view('comparison.maktabClasses');
    }

    public function maktab($class){
        $categories = Tree::whereRelation('detail', 'age', '=', $class)->orderBy('sr','asc')->get();
        return view('comparison.maktab',compact('categories'));
    }

    public function governmentClasses(){
        return view('comparison.governmentClasses');
    }
    public function government($class){
        $categories = Tree::whereRelation('detail', 'age', '=', $class)->orderBy('sr','asc')->get();
        return view('comparison.government',compact('categories'));
    }
}
