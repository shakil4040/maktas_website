<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserCheckController extends Controller
{
    //
    public function userCheckView(){
        return View('welcome');
    }
    public function toLoginView()
    {
        return View('login');
    }
}
