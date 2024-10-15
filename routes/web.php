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

Route::view('/member', 'dashboards.member');
Route::get('/get-child/{id}/{level}/{title}','CategoryController@getChild');
Route::get('/get-child2/{id}/{level}/{title}','CategoryController@getChild2');


Route::post('/register/admin', 'Auth\RegisterController@createAdmin')->middleware('guest:admin');

Route::view('/admin', 'dashboards.admin');
// ->middleware('auth.admin');


Route::group([], function () {

    Route::get('admin-profile','AdminController@profile');
    Route::get('/register/member', 'Auth\RegisterController@showMemberRegisterForm')->name('register.member');
    Route::post('/register/member', 'Auth\RegisterController@createMember');
    Route::get('/members', 'AdminController@members');
    Route::get('/upload', 'AdminController@upload');
    Route::get('/admin-download-options', 'AdminController@showDownloadFileOptions');
    Route::get("/filter-by-title", "AdminController@filterByTitle")->name("admin.filterTitle");
    Route::post('/admin/uploadFile', 'AdminController@uploadFile');
    Route::get('/admin/{admin}/edit', 'AdminController@editAdmin');
    Route::patch('/admin/{admin}', 'AdminController@updateAdmin');
    Route::get('/member/{member}/edit', 'AdminController@editMember');
    Route::patch('/member/{member}', 'AdminController@updateMember');
    Route::get('delete2/{member}','AdminController@destroy');
    Route::get('/pending-topics', 'AdminController@pendingTopics')->name('admin.pendingTopics');;
    Route::get('/admin-download-file', 'AdminController@downloadFile');
    Route::post('/admin-download-by-titles', 'AdminController@downloadFileByTitles');
    Route::post('/admin-download-by-date', 'AdminController@downloadFileByDate');
    Route::patch('/member/{id}/approve', 'AdminController@approveMember')->name('members.approve');
    Route::delete('/member/{id}/delete', 'AdminController@deleteMember')->name('members.delete');
    Route::patch('/topics/{id}/accept', 'AdminController@acceptTopic')->name('topics.accept');
    Route::patch('/topics/{id}/reject', 'AdminController@reject')->name('topics.reject');
});

// Member Routes
// Route::group(['middleware' => ['auth.member']], function () {
    Route::get('/member-profile', 'MemberController@profile');
    Route::get('/member/{member}/edit', 'MemberController@editMember');
    Route::patch('/member/{member}', 'MemberController@updateMember');
    Route::get('/member/upload', 'MemberController@upload');
    Route::post('/member/uploadFile', 'MemberController@uploadFile');
    Route::get('/download-options', 'MemberController@showDownloadFileOptions');
    Route::get('/download-file', 'MemberController@download');
    Route::post('/download-by-titles', 'MemberController@downloadFileByTitles');
    Route::post('/download-by-date', 'MemberController@downloadFileByDate');
// });
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

// Temporary Member Dashboard Route
Route::group(['middleware' => ['auth.temporary-member']], function () {
    Route::view('/temporary-member', 'dashboards.temporary-member');
    Route::get('/temp-member-profile', 'MemberController@tempMemberProfile');
    Route::get('/temp-member/{member}/edit', 'MemberController@editTempMember');
    Route::patch('/temp-member/{member}', 'MemberController@updateTempMember');
});

Route::post('/logout', function () {
    // Get the currently authenticated user
    $user = auth()->user();

    // Check if the user is authenticated and has a user_type
    if ($user && $user->user_type) {
        if (in_array($user->user_type, ['App\Models\Admin', 'App\Models\Member', 'App\Models\TemporaryMember'])) {
            auth()->logout();
            return redirect('/login');
        }
    }
    // Fallback if no user is authenticated or user_type doesn't match
    auth()->logout();
    return redirect('/login');
})->name('logout');


Route::get('{any}','UserCheckController@userCheckView')->where('any','.*');
Route::get('/home', 'HomeController@index')->name('home');