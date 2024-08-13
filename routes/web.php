<?php

use App\Mail\DeleteMail;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ViewsController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ComparisonController;

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/allSearch','SearchController@index');

Route::get('/mySearch','SearchController@search');

// Route::get('newvisitor','VisitorsController@index');
Auth::routes();

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
// Route::post('add-category','CategoryController@addCategory')->name('add.category');
Route::get('/home', 'HomeController@index')->name('home');


Route::get('/login/admin', 'Auth\LoginController@showAdminLoginForm')->name('login/admin');
Route::get('/register/admin', 'Auth\RegisterController@showAdminRegisterForm')->middleware('guest:admin');

Route::get('/login/member', 'Auth\LoginController@showMemberLoginForm')->name('login/member');
Route::post('/login/member', 'Auth\LoginController@memberLogin');
Route::view('/member', 'dashboards.member');
Route::get('/get-child/{id}/{level}/{title}','CategoryController@getChild');
Route::get('/get-child2/{id}/{level}/{title}','CategoryController@getChild2');


Route::post('/login/admin', 'Auth\LoginController@adminLogin');
Route::post('/register/admin', 'Auth\RegisterController@createAdmin')->middleware('guest:admin');

Route::view('/admin', 'dashboards.admin')->middleware('auth.admin');


Route::group(['middleware' => ['auth.admin']], function () {

    Route::get('admin-profile','AdminController@profile');
    Route::get('/register/member', 'Auth\RegisterController@showMemberRegisterForm');
    Route::post('/register/member', 'Auth\RegisterController@createMember');
    Route::get('/members', 'AdminController@members');
    Route::get('/upload', 'AdminController@upload');
    Route::get('/download', 'AdminController@download');
    Route::post('/admin/uploadFile', 'AdminController@uploadFile');
    Route::get('/admin/{admin}/edit', 'AdminController@editAdmin');
    Route::patch('/admin/{admin}', 'AdminController@updateAdmin');
    Route::get('/member/{member}/edit', 'AdminController@editMember');
    Route::patch('/member/{member}', 'AdminController@updateMember');
    Route::get('delete2/{member}','AdminController@destroy');
    Route::get('/pending-topics', 'AdminController@pendingTopics');

});

// Member Routes
Route::group(['middleware' => ['auth.member']], function () {
    Route::get('/member-profile', 'MemberController@profile');
    Route::get('/member/{member}/edit', 'MemberController@editMember');
    Route::patch('/member/{member}', 'MemberController@updateMember');
    Route::get('/member/upload', 'MemberController@upload');
    Route::post('/member/upload-File', 'MemberController@uploadFile');
    Route::get('/member/download', 'MemberController@download');
});
// Search Request 
Route::post('/searchTopic', 'CategoryController@searchCategory');

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
Route::get('/login/temporary-member', 'Auth\LoginController@showTempMemberLoginForm')->name('login/temp-member');
Route::post('/login/temporary-member', 'Auth\LoginController@tempMemberLogin');
Route::view('/temporary-member', 'dashboards.temporary-member');
Route::get('/temp-member-profile', 'MemberController@tempMemberProfile');
Route::get('/temp-member/{member}/edit', 'MemberController@editTempMember');
Route::patch('/temp-member/{member}', 'MemberController@updateTempMember');

// Route::any('/who-you-are', 'UserCheckController@userCheckView')->name('userCheck');
// Route::any('/login', 'UserCheckController@toLoginView')->name('login');
Route::get('{any}','UserCheckController@userCheckView')->where('any','.*');