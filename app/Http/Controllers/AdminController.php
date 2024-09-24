<?php

namespace App\Http\Controllers;

use App\Models\Tree;
use App\Models\Admin;
use App\Models\Member;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use App\Imports\TreeDataImport;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;
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
//        Tree::truncate();
//        Detail::truncate();
//        Easy::truncate();
//        Mahol::truncate();
//        Yaad::truncate();
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
     * @throws \Throwable
     */
    public function showDownloadFileOptions(){
        try {
            return view('admin.downloadFile');
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    /**
     * Handle the download of an Excel file based on selected topic titles.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Symfony\Component\HttpFoundation\BinaryFileResponse
     */
    public function downloadFileByTitles(Request $request) {
        try {
            $selectedId = $request->input('titleId' ,0);
            return Excel::download(new TreeDataExport(Tree::with('children')->find($selectedId)), 'export_courses.xlsx');
        } catch (\Throwable $th) {
            throw $th;
        }
    }
    
    /**
     * Download topics within a specified date range.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Symfony\Component\HttpFoundation\BinaryFileResponse
     */
    public function downloadFileByDate(Request $request){
        try {
            $startDate = $request->input('start_date');
            $endDate = $request->input('end_date');

            $validatedData = $request->validate([
                'start_date' => 'required|date',
                'end_date' => 'required|date|after_or_equal:start_date',
            ]);

            return Excel::download(new TreeDataExport([], $startDate, $endDate), 'tree_data_by_date_range.xlsx');
        } catch (\Throwable $th) {
            throw $th;
        }
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
        try {
            $pendingTopics = Tree::whereIn('status', ['pending', 'approved', 'rejected'])->get();
    
            if ($pendingTopics->isEmpty()) {
                // Handle the case when there are no pending topics
                $error = 'Oops! No pending topics found.';
                return view('admin.pendingTopics', compact('pendingTopics', 'error'));
            }
            return view('admin.pendingTopics', compact('pendingTopics'));
        } catch (\Throwable $th) {
            throw $th;
        }
    }
    /**
     * @method members
     * @return View
     */
    public function members()
    {
        try {
            $members = Member::all();
            if ($members->isEmpty()) {
                // Handle the case when there are no members
                return redirect()->back()->with('error', 'No members found.');
            }
            return view('admin.members', compact('members'));
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    /**
     * Approve a member by setting their type to 0.
     *
     * @param  int  $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function approveMember($id)
    {
        try {
            $member = Member::find($id);

            // Check if the member exists
            if (!$member) {
                return redirect()->back()->with('error', 'Member not found.');
            }
            // Set the member's type to 0 (approved)
            $member->temp = 0;
            $member->save();

            return redirect()->back()->with('success', 'Member approved successfully!');
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    /**
     * Delete a member.
     *
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function deleteMember($id)
    {
        try {
            $member = Member::find($id);
            // Check if the member exists
            if (!$member) {
                return redirect()->back()->with('error', 'Member not found.');
            }
            $member->delete();

            return redirect()->back()->with('success', 'Member deleted successfully.');
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    /**
     * Approve a topic from 'pending' to 'approve'.
     *
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function acceptTopic($id)
    {
        try {
            $topic = Tree::where('status', 'Pending')->find($id);

            if (!$topic) {
                return redirect()->back()->with('error', 'Topic not found');
            }
            // Update the status to 'approve' if it's 'pending'
            if ($topic->status === 'Pending') {
                $topic->status = 'Approved';
                $topic->save();
            }
            return redirect()->back()->with('success', 'Topic status updated to approve.');
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    /**
     * Reject a topic by removing it from the list.
     *
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function reject($id)
    {
        try {
            $topic = Tree::find($id);
            // Check if the topic exists
            if (!$topic) {
                return redirect()->back()->with('error', 'Topic not found.');
            }
            // Update the topic's status to 'Rejected'
            $topic->status = 'Rejected';
            $topic->save();
            // Redirect back with a success message
            return redirect()->back()->with('success', 'Topic rejected and removed successfully.');
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    /**
     * @method searchByTitle
     * @param Request $request
     * @return JsonResponse
     * @author Muhammad ali khalid ramay
     */
    public function filterByTitle(Request $request): JsonResponse
    {
        $titles = !empty($request->get("title")) ? Tree::where('title','LIKE',trim($request->get("title"))."%")->get(['title','id']) : [];
        return response()->json(["filterTitles" => $titles ]);
    }
}
