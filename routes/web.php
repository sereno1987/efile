<?php

use App\Http\Controllers\Admin\UsersController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::group(['prefix'=>'admin', 'namespace' => 'Admin'], function () {
    Route::get('/users', [UsersController::class, 'index'])->name('admin.user.list');
    Route::get('/users/create', [UsersController::class, 'create'])->name('admin.user.create');
    Route::post('/users/create', [UsersController::class, 'store'])->name('admin.user.store');


});

//Route::group(['prefix'=>'front', 'namespace' => 'FrontEnd'], function () {
//    Route::get('/users', [UsersController::class, 'index'])->name('front.users.list');
//
//
//});
