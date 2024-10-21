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
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

class AdminController extends Controller
{
    public function profile(){
        return view('admin.profile');
    }

    /**
     * Edit admin or members based on the authenticated user.
     * 
     * This function checks the authenticated user's type. If the user is an admin,
     * it fetches the admin data. If the user is a permanent or temporary member, it fetches the relevant
     * member data based on approval status. If the user is not authenticated, 
     * they are redirected to the login page.
     *
     * @return \Illuminate\View\View|\Illuminate\Http\RedirectResponse
     */
    public function editUser()
    {
        try {
            // Ensure the user is authenticated
            $user = Auth::user();
            if (!$user) {
                return redirect('login');
            }
            // Determine the data based on user type and approval status
            return view('admin.edit');
        } catch (\Exception $e) {
            // Log the exception for debugging purposes
            Log::error('Error editing user: ' . $e->getMessage());
            return back()->with('flash_message_error', 'An error occurred while trying to edit the user.');
        }
    }

    /**
     * Update the profile of the authenticated user.
     * 
     * This function validates the input data (name and email) and updates
     * the profile for either a permanent, temporary or an admin, based on the user's type.
     * 
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function updateUser(Request $request)
    {
        try {
            // Validate input data
            $data = $request->validate([
                'name' => ['required', 'string', 'max:255'],
                'email' => ['required', 'string', 'email', 'max:255'],
            ]);

            // Get authenticated user
            $user = Auth::user();

            // Ensure the user is authenticated
            if (!$user) {
                return redirect('login');
            }
            // Update profile based on user type
            if ($user->isMember()) {
                $user->userable->update($data);
            } elseif ($user->isAdmin()) {
                $user->userable->update($data);
            }
            return redirect('/dashboard/profile')->with('success', 'Profile updated successfully.');
        } catch (\Exception $e) {
            // Log the exception for debugging purposes
            Log::error('Profile update error: ' . $e->getMessage());
            return redirect('/dashboard/profile')->withErrors('An error occurred while updating the profile.');
        }
    }

    /**
     * Display the file upload page for the admin.
     * 
     * This function passes the authenticated admin data to the view
     * to allow file uploads.
     * 
     * @param \App\Models\Admin $admin
     * @return \Illuminate\View\View
     */
    public function upload(Admin $admin)
    {
        return view('admin.uploadfile', compact('admin'));
    }

    /**
     * Handle the file upload and import process.
     * 
     * This function validates the uploaded file, sets necessary PHP configurations
     * to handle large files, and uses a queued import to process the file data.
     * 
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function uploadFile(Request $request)
    {
        try {
            // Set PHP configuration for large files and extended execution time
            ini_set('max_execution_time', 36000);
            ini_set('memory_limit', -1);

            // Validate that a file is provided in the request
            $this->validate($request, [
                'file' => 'required|file',
            ]);

            // Use queued import to handle large file upload (TreeDataImport should be defined)
            Excel::queueImport(new TreeDataImport, $request->file);

            // Flash a success message to the session and redirect to the upload page
            Session::flash('message', 'File uploaded and processing started successfully.');
            return Redirect::to('/dashboard/upload');

        } catch (\Exception $e) {
            // Handle any exceptions that occur during the upload process
            return Redirect::to('/dashboard/upload')->withErrors('An error occurred during file upload. Please try again.');
        }
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
            ini_set('max_execution_time', 36000);
            ini_set('memory_limit', -1);
            return Excel::download(new TreeDataExport(null, $startDate, $endDate), 'courses_by_date_range.xlsx');
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    public function downloadFile()
    {
        ini_set('max_execution_time', 36000);
        ini_set('memory_limit', -1);
        return Excel::download(new TreeDataExport(), 'all_courses.xlsx');
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
            // Set the member's type to 1 (approved)
            $member->is_approve = 1;
            $member->save();

            return redirect()->back()->with('success', 'Member approved successfully!');
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    /**
     * Delete a member and the associated user.
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
            // Delete the associated user if it exists
            if ($member->user) {
                $member->user->delete();
            }
            // Delete the member
            $member->delete();

            return redirect()->back()->with('success', 'Member deleted successfully.');
        } catch (\Throwable $th) {
            // Handle the exception
            return redirect()->back()->with('error', 'An error occurred while deleting the member.');
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
