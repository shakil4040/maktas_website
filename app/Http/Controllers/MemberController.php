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
    /**
     * Display the profile page for the temporary member.
     *
     * This function returns the view for the temporary member's profile.
     *
     * @return \Illuminate\View\View
     */
    public function tempMemberProfile()
    {
        return view('temporary-member.temp-member-profile');
    }

    /**
     * Show the form for editing the specified temporary member's profile.
     *
     * This function returns the view to edit the temporary member's profile,
     * passing the specific member's data to the view.
     *
     * @param \App\Models\Member $member
     * @return \Illuminate\View\View
     */
    public function editTempMember(Member $member)
    {
        return view('temporary-member.edit-temp-member', compact('member'));
    }

    /**
     * Update the specified temporary member's profile.
     *
     * This function handles the validation and updating of the temporary 
     * member's profile based on the provided data. If successful, the user 
     * is redirected to the temporary member's page with a success message.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Member $member
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Throwable
     */
    public function updateTempMember(Request $request, Member $member)
    {
        try {
            $data = request()->validate([
                'name' => ['required', 'string', 'max:255'],
                'email' => ['required', 'string', 'email', 'max:255'],

            ]);
            auth('temporary-member')->user()->update($data);
            return redirect('/temporary-member')->with('success', 'Profile Updated Successfully');
        } catch (\Throwable $th) {
            throw $th;
        }
    }
}
