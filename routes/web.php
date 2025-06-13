<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ServiceController;
use App\Http\Controllers\StuffController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\OrderController;

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

Route::get('/', function () {
    return view('index');
});
Route::get('/services', [ServiceController::class, "show_services"]);
Route::get('/stuff', [StuffController::class, "stuff"]);

Route::get('/reg', [UserController::class, "show_reg"]);
Route::post('/register', [UserController::class, 'register']);

Route::get('/sign-in', [UserController::class, "show_sign_in"]);
Route::post('/sign-in', [UserController::class, 'sign_in']);
Route::get('/logout', [UserController::class, 'logout']);

Route::get('/profile', [UserController::class, 'profile']);

Route::get('/create', function () {  return view('createorder.menu'); });

Route::get('/createbyspecialist', [StuffController::class, "createbyspecNoparam"])->name('createbyspecialist');
Route::get('/createbyspecialist/{service_id}', [StuffController::class, "choosespecialistWithparam"]);

Route::get('/createbyservice', [ServiceController::class, "createbyserviceNoparam"])->name('createbyservice');
Route::get('/createbyservice/{stuff_id}', [ServiceController::class, "createbyspecWithparam"]);

Route::get('/createorder/{service_id}/{stuff_id}', [OrderController::class, "show_createorder"])->name('createorder');
Route::post('/makeorder', [OrderController::class, "createorder"])->name('makeorder');

Route::get('/admin', [UserController::class, 'show_admin']);
Route::get('/admin/staff', [StuffController::class, 'show_admin']);
Route::get('/admin/services', [ServiceController::class, 'show_admin']);

Route::get('admin-actors', [ActorsController::class, 'admin']);
Route::get('admin-genres', [GenreController::class, 'admin']);
Route::get('admin-panel', [FilmController::class, 'admin']);
Route::get('admin-comments', [CommentsController::class, 'admin']);