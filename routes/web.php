<?php

use Illuminate\Routing\Router;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\CategoryController;


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

Auth::routes();

Route::group(['middleware' => ['auth', 'isAdmin']], function ()
{
   Route::get('/dashboard', 'Admin\DashboardController@index'); 

    //    =====category admin =====
   Route::get('categories', 'Admin\CategoryController@index');
   Route::get('add-category', 'Admin\CategoryController@add');
   Route::post('insert-category', 'Admin\CategoryController@insert');
   Route::get('edit-category/{id}',[CategoryController::class, 'edit']);
   Route::put('update-category/{id}',[CategoryController::class, 'update'] );
   Route::get('delete-category/{id}',[CategoryController::class, 'delete']);

//    ===========product admin ============
   Route::get('products', 'Admin\ProductController@index');
   Route::get('add-product', 'Admin\ProductController@create');
   Route::post('insert-product', 'Admin\ProductController@store');
   Route::get('edit-product/{id}',[ProductController::class, 'edit']);
   Route::put('update-product/{id}',[ProductController::class, 'update'] );
   Route::get('delete-product/{id}',[ProductController::class, 'delete']);


});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
