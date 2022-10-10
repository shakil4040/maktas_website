<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
Route::post('newvisitor','Api\VisitorsController@submit');
// Route::namespace('CategoryController')->group(function () {
//     Route::get('/test/{id}','test');
//     Route::post('add-category','addCategory')->name('add.category');
//     Route::patch('/update/{id}','update')->name('update.category');
//     Route::get('/confirmation/{id}','delete');
//     Route::get('/delete/{id}','destroy');
//     Route::get('/edit/{id}','edit');
// });
Route::get('/test/{id}','CategoryController@test');
Route::post('add-category','CategoryController@addCategory')->name('add.category');
Route::post('add-comment','CategoryController@addComment')->name('add.comment');
Route::patch('/update/{id}','CategoryController@update')->name('update.category');
Route::get('/confirmation/{id}','CategoryController@delete');
Route::get('/delete/{id}','CategoryController@destroy');
Route::get('/edit/{id}','CategoryController@edit');
Route::get('/comment','CategoryController@comment');