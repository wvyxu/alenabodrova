<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ServiceController;
use App\Http\Controllers\StuffController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\Controller;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [UserController::class, "index"]);
Route::get('/services', [ServiceController::class, "show_services"]);
Route::get('/stuff', [StuffController::class, "stuff"]);

Route::get('/reg', [UserController::class, "show_reg"]);
Route::post('/register', [UserController::class, 'register']);

Route::get('/sign-in', [UserController::class, "show_sign_in"]);
Route::post('/sign-in', [UserController::class, 'sign_in']);
Route::get('/logout', [UserController::class, 'logout']);

Route::get('/profile', [UserController::class, 'profile']);

Route::get('/create', [OrderController::class, "menu"]);

Route::get('/createbyspecialist', [StuffController::class, "createbyspecNoparam"])->name('createbyspecialist');
Route::get('/createbyspecialist/{service_id}', [StuffController::class, "choosespecialistWithparam"]);

Route::get('/createbyservice', [ServiceController::class, "createbyserviceNoparam"])->name('createbyservice');
Route::get('/createbyservice/{stuff_id}', [ServiceController::class, "createbyspecWithparam"]);

Route::get('/createorder/{service_id}/{stuff_id}', [OrderController::class, "show_createorder"])->name('createorder');
Route::post('/makeorder', [OrderController::class, "createorder"])->name('makeorder');

Route::get('/admin', [Controller::class, 'show_admin']);

Route::get('/admin/staff', [StuffController::class, 'show_admin']);
Route::get('/admin/staff/create', [StuffController::class, 'create']);
Route::post('/admin/staff/create', [StuffController::class, 'create']);
Route::get('/admin/staff/update', [StuffController::class, 'update']);
Route::post('/admin/staff/update', [StuffController::class, 'update']);
Route::get('/admin/staff/delete', [StuffController::class, 'delete']);

Route::get('/admin/services', [ServiceController::class, 'show_admin']);
Route::get('/admin/services/create', [ServiceController::class, 'create']);
Route::post('/admin/services/create', [ServiceController::class, 'create']);
Route::get('/admin/services/update', [ServiceController::class, 'update']);
Route::post('/admin/services/update', [ServiceController::class, 'update']);
Route::post('/admin/services/delete', [ServiceController::class, 'delete']);

Route::get('/admin/users', [UserController::class, 'show_admin']);
Route::post('/admin/users/delete', [UserController::class, 'delete']);

Route::get('/admin/orders', [OrderController::class, 'show_admin_orders']);
Route::get('/admin/orders/create', [OrderController::class, 'create']);
Route::post('/admin/orders/create', [OrderController::class, 'create']);
Route::get('/admin/orders/update', [OrderController::class, 'update']);
Route::post('/admin/orders/update', [OrderController::class, 'update']);
Route::post('/admin/orders/delete', [OrderController::class, 'delete']);

