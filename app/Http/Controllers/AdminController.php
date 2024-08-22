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

    /**
     * Show the file download view with available options.
     *
     * @return \Illuminate\View\View
     */
    public function showDownloadFileOptions(){
        // Fetch only the 'title' and 'id' columns from the 'tree' table
        $topics = Tree::pluck('title', 'id');

        // Check if the $topics collection is empty, and handle the case accordingly
        if ($topics->isEmpty()) {
            return view('admin.downloadFile', ['topics' => [], 'message' => 'No topics available for download.']);
        }
        return view('admin.downloadFile', compact('topics'));
    }

    /**
     * Handle the download of an Excel file based on selected topic titles.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Symfony\Component\HttpFoundation\BinaryFileResponse
     */
    public function downloadFileByTitles(Request $request){

        $selectedIds = $request->input('topics', []);
        $topics = Tree::whereIn('id', $selectedIds)->get();
        // Convert the collection to an array of titles
        $selectedTitles = $topics->pluck('title')->toArray();
        // Generate and return the file download
        return Excel::download(new TreeDataExport($selectedTitles), 'selected_topics.xlsx');
    }
    
    /**
     * Download topics within a specified date range.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Symfony\Component\HttpFoundation\BinaryFileResponse
     */
    public function downloadFileByDate(Request $request){
        $startDate = $request->input('start_date');
        $endDate = $request->input('end_date');

        $validatedData = $request->validate([
            'start_date' => 'required|date',
            'end_date' => 'required|date|after_or_equal:start_date',
        ]);

        return Excel::download(new TreeDataExport([], $startDate, $endDate), 'tree_data_by_date_range.xlsx');
    }

    public function downloadFile()
    {
        return Excel::download(new TreeDataExport(), 'tree_data.xlsx');
    }
    /**
     * Display topics with 'pending' status in the admin dashboard.
     *
     * This function retrieves all topics from the Tree model where the status 
     * is set to 'pending'.
     *
     * @return \Illuminate\View\View
     */
    public function pendingTopics(){
        $pendingTopics = Tree::where('status', 'pending')->get();
        return view('admin.pendingTopics', compact('pendingTopics'));
    }
    /**
     * @method members
     * @return View
     */
    public function members()
    {
        $members = Member::all();
        return view('admin.members', compact('members'));
    }

    /**
     * Approve a member by setting their type to 0.
     *
     * @param  int  $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function approveMember($id)
    {
        $member = Member::find($id);

        // Check if the member exists
        if (!$member) {
            return redirect()->back()->with('error', 'Member not found.');
        }
        // Set the member's type to 0 (approved)
        $member->temp = 0;
        $member->save();

        return redirect()->back()->with('success', 'Member approved successfully!');
    }

    /**
     * Delete a member.
     *
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function deleteMember($id)
    {
        $member = Member::find($id);
        // Check if the member exists
        if (!$member) {
            return redirect()->back()->with('error', 'Member not found.');
        }
        $member->delete();

        return redirect()->back()->with('success', 'Member deleted successfully.');
    }

}
