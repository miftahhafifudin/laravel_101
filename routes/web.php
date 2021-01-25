<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controller\PostController;
use App\Http\Controllers\DashboardController;

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
route::resource('posts','PostsController');

Route::get('/', 'PageController@index');
Route::get('/about', 'PageController@about');
Route::get('/services', 'PageController@services');


Auth::routes();
// new way of rooting, so didn't have to add something on top of a page
// Route::get('/dashboard', [App\Http\Controllers\DashboardController::class, 'index']); 
Route::get('/dashboard', 'DashboardController@index');
