<?php

namespace App\Http\Controllers;

use App\Mail\AddMail;
use App\Mail\EditMail;
use App\Mail\DeleteMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function deleteMail(Request $request){
        Mail::to('example@example.com')->send(new DeleteMail($request));
        return redirect()->back();
    }
    public function AddMail(Request $request){
        Mail::to('example@example.com')->send(new AddMail($request));
        return redirect()->back();
    }
    public function EditMail(Request $request){
        Mail::to('example@example.com')->send(new EditMail($request));
        return redirect()->back();
    }
}
