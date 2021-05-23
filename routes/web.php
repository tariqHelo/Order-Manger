<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;

use App\Http\Controllers\Admin\PermissionsController;
use App\Http\Controllers\Admin\RolesController;
use App\Http\Controllers\Admin\UsersController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\UserOrderController;
use App\Http\Controllers\UserInfoController;

use App\Http\Controllers\SettingController;
use App\Http\Controllers\OrderStatusController;



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


Auth::routes();

Route::get('/',[ HomeController::class,'index']);

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('admin.app');
})->name('dashboard');
  // Permissions
  Route::delete('permissions/destroy',[PermissionsController::class,'massDestroy'])->name('permissions.massDestroy');
  Route::resource('permissions', PermissionsController::class);
  // Roles
  Route::delete('roles/destroy', [RolesController::class,'massDestroy'])->name('roles.massDestroy');
 // Route::get('roles', [RolesController::class, 'index'])->name('roles');
  Route::resource('roles', RolesController::class);
  // Users
  Route::delete('users/destroy',[UsersController::class,'massDestroy'])->name('users.massDestroy');
  Route::resource('users', UsersController::class);
  //change-password
  Route::get("/change-password", [ AdminController::class,'changePassword'])->name("change-password");
  Route::put("/change-password", [ AdminController::class,'postChangePassword'])->name("post-change-password");
  // Products
  Route::resource('products', ProductController::class);
  Route::get('products/{id}/delete', [ProductController::class , 'destroy'])->name('product-delete');
 // User Info
 Route::resource('settings', SettingController::class);
 // orders
  Route::resource('orders', OrderController::class);
  Route::get('/products/order/{id}', [OrderController::class , 'orderProduct'])->name('order-product');
  Route::get('/products/cancle-order/{id}', [OrderController::class , 'cancelOrderProduct'])->name('cancel-product-order');

   Route::get("/order/{id}/delete",[OrderController::class , 'destroy'])->name('delete-order');
   Route::get('/order-done/{id}',[OrderController::class , 'done'])->name('order.done');
   Route::get('/order-pending/{id}',[OrderController::class ,'pending'])->name('order.pending');
   Route::get('/order-cancel/{id}',[OrderController::class ,'cancel'])->name('order.cancel');
   Route::get('/order_show/{id}',[OrderController::class ,'show'])->name('orders.show');

   Route::get('/order_status/approve/{id}',[OrderController::class ,'approve'])->name('order.approve');
   Route::get('/order_status/{id}',[OrderController::class ,'cancel'])->name('order.cancel');

  // User-Orders
  Route::resource('user-order', UserOrderController::class);

 // User status
 Route::resource('user-status', OrderStatusController::class);

  

   
   
