<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

use App\Http\Controllers\CategoryController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::get('post', [PostController::class ,'index'])->name('post');
Route::post('post', [PostController::class ,'update'])->name('post.update');


Route::group(['namespace'=>'App\Http\Controllers','prefix'=>'admin/'], function(){

    Route::get('categories','CategoryController@index');
    Route::get('categories-create','CategoryController@create');
});
