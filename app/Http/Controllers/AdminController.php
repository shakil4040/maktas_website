<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin;
use App\Models\Member;

class AdminController extends Controller
{
    public function profile(){
        return view('admin.profile');
    }


    public function editAdmin(Admin $admin)
    {
        return view('admin.edit-admin', compact( 'admin'));  
    }
    public function updateAdmin(Request $request, Admin $admin)
    {
        $data=request()->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255'],
           
          ]);
    
        auth('admin')->user()->update($data);
        return redirect('/admin')->with('success','Profile Updated Successfully');
    }

    
     
}
