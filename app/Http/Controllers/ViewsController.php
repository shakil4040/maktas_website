<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ViewsController extends Controller
{
    public function home() {
        return view('pages.home');
    }
    public function student() {
        return view('pages.student');
    }
    public function parents() {
        return view('pages.parents');
    }
    public function parents2() {
        return view('pages.parents2');
    }
    public function teacher() {
        return view('pages.teacher');
    }
    public function gaugeYourself() {
        return view('pages.gaugeYourself');
    }
    public function gaugeYourself2() {
        return view('pages.gaugeYourself2');
    }
    public function gaugeYourself3() {
        return view('pages.gaugeYourself3');
    }
}
