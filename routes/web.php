<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;



// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('newvisitor','VisitorsController@index');
Auth::routes();
Route::get('/tree2',function(){
    return view('tree');
});
Route::view('marhabah','Marhabah');
Route::get('/tree', 'CategoryController@manageCategory');
Route::post('add-category','CategoryController@addCategory')->name('add.category');
Route::get('/home', 'HomeController@index')->name('home');


Route::get('/login/admin', 'Auth\LoginController@showAdminLoginForm')->name('login/admin');
Route::get('/register/admin', 'Auth\RegisterController@showAdminRegisterForm')->middleware('guest:admin');

Route::get('/login/branch', 'Auth\LoginController@showBranchLoginForm')->name('login/branch');
Route::post('/login/branch', 'Auth\LoginController@branchLogin');
Route::view('/branch', 'dashboards.branch');


Route::post('/login/admin', 'Auth\LoginController@adminLogin');
Route::post('/register/admin', 'Auth\RegisterController@createAdmin')->middleware('guest:admin');

Route::view('/admin', 'dashboards.admin')->middleware('auth.admin');


Route::group(['middleware' => ['auth.admin']], function () {

    Route::get('admin-profile','AdminController@profile');
    Route::get('/register/member', 'Auth\RegisterController@showMemberRegisterForm');
    Route::post('/register/member', 'Auth\RegisterController@createMember');
    Route::get('/members', 'AdminController@members');
    Route::get('/admin/{admin}/edit', 'AdminController@editAdmin');
    Route::patch('/admin/{admin}', 'AdminController@updateAdmin');
    Route::get('/member/{member}/edit', 'AdminController@editMember');
    Route::patch('/member/{member}', 'AdminController@updateMember');
    Route::get('delete2/{member}','AdminController@destroy');

});

Route::prefix('admin')->namespace('Auth\Admin')->group(function(){
    Route::get('password/reset','ForgotPasswordController@showLinkRequestForm')->name('admin.password.request');
    Route::post('password/email','ForgotPasswordController@sendResetLinkEmail')->name('admin.password.email');
    Route::get('password/reset/{token}','ResetPasswordController@showResetForm')->name('admin.password.reset');
    Route::post('password/reset','ResetPasswordController@reset')->name('admin.password.update');
});




// Route::any('/who-you-are', 'UserCheckController@userCheckView')->name('userCheck');
// Route::any('/login', 'UserCheckController@toLoginView')->name('login');
Route::get('{any}','UserCheckController@userCheckView')->where('any','.*');