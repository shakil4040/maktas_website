<?php

namespace App\Http\Controllers;

use App\Models\Tree;
use App\Models\Detail;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Builder;

class ComparisonController extends Controller
{
    public function main()
    {
        $allCategories = Tree::pluck('title', 'sr')->all();
        return view('comparison.main', compact('allCategories'));
    }
    public function middle($class)
    {
        $allCategories = Tree::pluck('title', 'sr')->all();
        return view('comparison.middle', compact('allCategories', 'class'));
    }
    public function naseehaClasses()
    {

        $allCategories = Tree::pluck('title', 'sr')->all();
        return view('comparison.naseehaClasses', compact('allCategories'));
    }
    public function naseeha($class)
    {
        $categories = Tree::whereRelation('detail', 'age', '=', $class)->orderBy('sr', 'asc')->get();
        $allCategories = Tree::pluck('title', 'sr')->all();
        return view('comparison.naseeha', compact('categories', 'allCategories'));
    }

    public function maktabClasses()
    {
        $allCategories = Tree::pluck('title', 'sr')->all();
        return view('comparison.maktabClasses', compact('allCategories'));
    }

    public function maktab($class)
    {
        $categories = Tree::whereRelation('detail', 'age', '=', $class)->orderBy('sr', 'asc')->get();
        $allCategories = Tree::pluck('title', 'sr')->all();
        return view('comparison.maktab', compact('categories', 'allCategories'));
    }

    public function governmentClasses()
    {
        $allCategories = Tree::pluck('title', 'sr')->all();
        return view('comparison.governmentClasses', compact('allCategories'));
    }
    public function governmentBasic($class)
    {
        $categories = Tree::whereRelation('mahol', 'parhana', '=', $class)
            ->whereRelation('easy', function (Builder $query) {
                $query->where('hukam', '=', 'فرض')
                    ->orWhere('hukam', '=', 'واجب')
                    ->orWhere('hukam', '=', 'سنت مؤکدہ')
                    ->orWhere('hukam', '=', 'حرام')
                    ->orWhere('hukam', '=', 'بنیاد')
                    ->orWhere('hukam', '=', 'مکروہ تحریمی');
            })
            ->orderBy('sr', 'asc')->get();
        return view('comparison.government', compact('categories'));
    }
    public function governmentDetailed($class)
    {
        $categories = Tree::whereRelation('mahol', 'parhana', '=', $class)->orderBy('sr', 'asc')->get();
        $allCategories = Tree::pluck('title', 'sr')->all();
        return view('comparison.government', compact('categories', 'allCategories'));
    }
}
