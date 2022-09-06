<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
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

/********************************** Authentication Routes Start ***********************************/
Route::get('/', [AuthController::class, 'loginView'])->name('auth.login_view');
Route::get('/register', [AuthController::class, 'registerView'])->name('auth.register_view');
/********************************** Authentication Routes End ***********************************/

/********************************** Dashboard Routes Start ***********************************/
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
/********************************** Dashboard Routes End ***********************************/
