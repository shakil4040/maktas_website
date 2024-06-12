<?php

namespace App\Http\Controllers;

use App\Models\Tree;
use App\Models\Course;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function course(Request $request)
    {
        $age = $request->age;
        $shoba = $request->occupation;
        if($shoba == null){
            $courses = Tree::whereRelation('mahol', 'parhana', 'LIKE', '%' . $age . '%')->orderBy('sr', 'asc')->get();
        }
        if($age == null){
            $courses = Tree::whereRelation('easy', 'shoba', 'LIKE', '%' . $shoba . '%')->orderBy('sr', 'asc')->get();
        }
        if($shoba != null && $age != null){
            $courses = Tree::whereRelation('mahol', 'parhana', 'LIKE', '%' . $age . '%')->orWhereHas('easy', function ($query) use ($shoba) {
            $query->where('shoba', 'LIKE', '%' . $shoba . '%');
        })->orderBy('sr', 'asc')->get();
        }
        
        Course::truncate();
        foreach ($courses as $course) {

            // Traverse to the root parent
            $currentTopic = $course;
            Course::create($course->toArray());
            while ($currentTopic->parent) {
                $currentTopic = $currentTopic->parent;
                $myCourse = $currentTopic->toArray();
                if(!Course::where('id',$currentTopic->id)->exists()){
                    Course::create($myCourse);
                }
            }
        }
        $categories = Course::where('parent_id',0)->get();
        return view('comparison.course', compact('categories','age','shoba'));
    }
}
