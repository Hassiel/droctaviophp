<?php

use Illuminate\Support\Facades\Route;

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

Auth::routes();

Route::group(['middleware' => 'auth'], function(){
Route::resource('/blogs', 'App\Http\Controllers\BlogController');

Route::resource('/temas', 'App\Http\Controllers\TopicController');

Route::resource('/productos', 'App\Http\Controllers\ProductoController');

});


Route::get('/', [
    'uses'=>'App\Http\Controllers\BlogController@principal', 
    'as' => 'principal' 
]);

    Route::resource('/blog', 'App\Http\Controllers\FrontBlog');
    Route::resource('/tienda', 'App\Http\Controllers\FrontStoreController');

    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
