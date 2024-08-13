<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Member;
use App\Exports\TreeDataExport;
use Maatwebsite\Excel\Facades\Excel;
use App\Imports\TreeDataImport;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;
use Exception;


class MemberController extends Controller
{
    public function profile()
    {
        return view('member.profile');
    }
    public function editMember(Member $member)
    {
        return view('member.edit-member', compact('member'));
    }
    public function updateMember(Request $request, Member $member)
    {
        try {
            $data = request()->validate([
                'name' => ['required', 'string', 'max:255'],
                'email' => ['required', 'string', 'email', 'max:255'],

            ]);
            auth('member')->user()->update($data);
            return redirect('/member')->with('success', 'Profile Updated Successfully');
        } catch (\Throwable $th) {
            throw $th;
        }
    }
    public function download()
    {
        try {
            return Excel::download(new TreeDataExport(), 'tree_data.xlsx');
        } catch (\Throwable $th) {
            throw $th;
        }
    }
    public function upload(Member $member)
    {
        return view('member.upload-file', compact('member'));
    }
    public function uploadFile(Request $request)
    {
        Tree::truncate();
        Detail::truncate();
        Easy::truncate();
        Mahol::truncate();
        Yaad::truncate();
        try {

            // ini_set('max_execution_time', 3600000);
            $this->validate($request, [
                'file' => 'required'
            ]);

            Excel::queueImport(new TreeDataImport, $request->file);
            Session::flash('message', 'Tree data Imported successfully.');
            return Redirect::to('/upload');
        } catch (\Throwable $th) {
            throw $th;
        }
    }
    // Temporary Member
    public function tempMemberProfile()
    {
        return view('temporary-member.temp-member-profile');
    }
}
