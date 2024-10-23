<?php

use App\Mail\DeleteMail;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ViewsController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ComparisonController;

Route::get('/allSearch','SearchController@index');

Route::get('/mySearch','SearchController@search');

//New site
Route::controller(ViewsController::class)->group(function(){
    Route::get('/new','home');
    Route::get('/student','student');
    Route::get('/parents','parents');
    Route::get('/parents2','parents2');
    Route::get('/teacher','teacher');
    Route::get('/gauge-yourself','gaugeYourself');
    Route::get('/gauge-yourself2','gaugeYourself2');
    Route::get('/gauge-yourself3','gaugeYourself3');
});


Route::post('/add-topic','CategoryController@addTopic');

Route::post('/deleteMail','MailController@deleteMail');
Route::post('/AddMail','MailController@AddMail');
Route::post('/EditMail','MailController@EditMail');
Route::get('/tree2',function(){
    return view('tree');
});
Route::view('marhabah','Marhabah');
Route::get('/tree', 'CategoryController@manageCategory');
Route::get('/educationist', 'CategoryController@educationist');

Route::get('/login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('/login', 'Auth\LoginController@login');

Route::get('/register/admin', 'Auth\RegisterController@showAdminRegisterForm')->middleware('guest:admin');

Route::get('/get-child/{id}/{level}/{title}','CategoryController@getChild');
Route::get('/get-child2/{id}/{level}/{title}','CategoryController@getChild2');

Route::post('/register/admin', 'Auth\RegisterController@createAdmin')->middleware('guest:admin');

Route::group(['middleware' => ['auth']], function () {
    Route::get('/dashboard', function() {
        return view('dashboards.index');
    })->name('dashboard');
    Route::get('/dashboard/profile','AdminController@profile');
    Route::get('/dashboard/register', 'Auth\RegisterController@showMemberRegisterForm');
    Route::post('/dashboard/register', 'Auth\RegisterController@createMember');
    Route::get('/dashboard/members', 'AdminController@members');
    Route::get('/dashboard/upload', 'AdminController@upload');
    Route::get('/clearCourses', 'AdminController@truncateAllCourses');
    Route::get("/filter-by-title", "AdminController@filterByTitle")->name("admin.filterTitle");
    Route::post('/dashboard/uploadFile', 'AdminController@uploadFile');
    Route::get('/dashboard/{id}/edit', 'AdminController@editUser');
    Route::patch('/dashboard/{id}', 'AdminController@updateUser');
    Route::get('/dashboard/pending-topics', 'AdminController@pendingTopics')->name('admin.pendingTopics');
    Route::get('/dashboard/download-file-options', 'AdminController@showDownloadFileOptions');
    Route::get('/dashboard/download-file', 'AdminController@downloadFile');
    Route::post('/dashboard/download-by-titles', 'AdminController@downloadFileByTitles');
    Route::post('/dashboard/download-by-date', 'AdminController@downloadFileByDate');
    Route::patch('/dashboard/member/{id}/approve', 'AdminController@approveMember')->name('members.approve');
    Route::delete('/dashboard/member/{id}/delete', 'AdminController@deleteMember')->name('members.delete');
    Route::patch('/dashboard/topics/{id}/accept', 'AdminController@acceptTopic')->name('topics.accept');
    Route::patch('/dashboard/topics/{id}/reject', 'AdminController@reject')->name('topics.reject');
});
// Search Request 
Route::get('/searchTopic', 'CategoryController@searchCategory');

Route::prefix('admin')->namespace('Auth\Admin')->group(function(){
    Route::get('password/reset','ForgotPasswordController@showLinkRequestForm')->name('admin.password.request');
    Route::post('password/email','ForgotPasswordController@sendResetLinkEmail')->name('admin.password.email');
    Route::get('password/reset/{token}','ResetPasswordController@showResetForm')->name('admin.password.reset');
    Route::post('password/reset','ResetPasswordController@reset')->name('admin.password.update');
});

Route::get('/comparison','ComparisonController@main');
Route::get('/middle/{class}','ComparisonController@middle');
Route::get('/naseehaClasses','ComparisonController@naseehaClasses');
Route::get('/naseeha/{class}','ComparisonController@naseeha');
Route::get('/maktabClasses','ComparisonController@maktabClasses');
Route::get('/maktab/{class}','ComparisonController@maktab');
Route::get('/governmentClasses','ComparisonController@governmentClasses');
Route::get('/governmentBasic/{class}','ComparisonController@governmentBasic');
Route::get('/governmentDetailed/{class}','ComparisonController@governmentDetailed');

Route::post('/logout', function () {
    // Get the currently authenticated user
    $user = auth()->user();

    // Check if the user is authenticated and has a user_type
    if ($user && $user->userable_type) {
        // Define an array of allowed user types
        $allowedUserTypes = ['App\Models\Admin', 'App\Models\Member'];
        if (in_array($user->userable_type, $allowedUserTypes)) {
            auth()->logout();
            return redirect('/login')->with('success', 'You have been logged out successfully.');;
        }
    }
    // Fallback if no user is authenticated or user_type doesn't match
    auth()->logout();
    return redirect('/login')->withErrors('Unable to logout.');;
})->name('logout');

Route::get('{any}','UserCheckController@userCheckView')->where('any','.*');
// Route::get('/home', 'HomeController@index')->name('home');