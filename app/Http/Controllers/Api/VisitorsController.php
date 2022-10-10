<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Visitor;

class VisitorsController extends Controller
{
    public function submit(Request $request) {
           $visitor =  $this->validate($request, [
            'name' => 'required|string|unique:visitors',
            'age' => 'required',
            'gender' => 'required',
            
        ]);
        Visitor::create($visitor);

        /*
          Add mail functionality here.
        */

        return response()->json(null, 200);
    }
}
