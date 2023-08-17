<?php

namespace App\Http\Controllers;

use App\Models\Easy;
use App\Models\Tree;
use App\Models\Yaad;
use App\Models\Admin;
use App\Models\Mahol;
use App\Models\Detail;
use App\Models\Member;
use Illuminate\Http\Request;
use App\Imports\TreeDataImport;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;
use App\Exports\TreeDataExport;

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

    public function upload(Admin $admin)
    {
        return view('admin.uploadfile', compact( 'admin'));
    }

    public function uploadFile(Request $request)
    {
        Tree::truncate();
        Detail::truncate();
        Easy::truncate();
        Mahol::truncate();
        Yaad::truncate();
        ini_set('max_execution_time', 3600);
        $this->validate($request, [
            'file' => 'required'
        ]);

        Excel::queueImport(new TreeDataImport, $request->file);
        Session::flash('message', 'Tree data Imported successfully.');
        return Redirect::to('/upload');
    }

    public function download()
    {
        return Excel::download(new TreeDataExport(), 'tree_data.xlsx');
    }
}
