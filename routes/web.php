<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;

use App\Http\Controllers\Admin\PermissionsController;
use App\Http\Controllers\Admin\RolesController;
use App\Http\Controllers\Admin\UsersController;


use App\Http\Controllers\Admin\AdminController;

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

Route::get('/home', [HomeController::class, 'index'])->name('home');


Auth::routes();


Route::get('/', function () {
    return view('auth.login');
});

Route::group(['prefix'=>'admin','middleware' => ['auth']], function () {

    // Permissions
    Route::delete('permissions/destroy',[PermissionsController::class
    ,'massDestroy'])->name('permissions.massDestroy');
    Route::resource('permissions', PermissionsController::class);
    // Roles
    Route::delete('roles/destroy', [RolesController::class,'massDestroy'])->name('roles.massDestroy');
    Route::resource('roles', RolesController::class);
    // Users
    Route::delete('users/destroy',[UsersController::class,'massDestroy'])->name('users.massDestroy');
    Route::resource('users', UsersController::class);
    //change-password
    Route::get("/change-password", [ AdminController::class,'changePassword'])->name("change-password");
    Route::put("/change-password", [ AdminController::class,'postChangePassword'])->name("post-change-password");

});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
