<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\CandidateController;
use App\Http\Controllers\QuizController;

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
Route::group(['middleware'=>'guest'],function(){
    Route::get('/', [AuthController::class, 'loginView'])->name('login');
    Route::post('/authenticate', [AuthController::class, 'authenticate'])->name('authenticate');
    Route::get('/register', [AuthController::class, 'registerView'])->name('register');
});

Route::group(['middleware'=>'web'],function(){
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
});
/********************************** Authentication Routes End ***********************************/

/********************************** Dashboard Routes Start ***********************************/
Route::group(['middleware'=>'admin','prefix'=>'admin','as'=>'admin.'],function(){
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
});
/********************************** Dashboard Routes End ***********************************/

/********************************** Candidate Routes Start ***********************************/
Route::group(['middleware'=>'admin','prefix'=>'admin','as'=>'admin.'],function(){
    Route::get('/candidate/list', [CandidateController::class, 'index'])->name('candidate.all');
    Route::get('/candidate/pending/list', [CandidateController::class, 'pendingList'])->name('candidate.pending');
    Route::get('/candidate/rejected/list', [CandidateController::class, 'rejectedList'])->name('candidate.rejected');
    Route::get('/candidate/approved/list', [CandidateController::class, 'approvedList'])->name('candidate.approved');
});
/********************************** Candidate Routes End ***********************************/

/********************************** Quiz Routes Start ***********************************/
Route::group(['middleware'=>'admin','prefix'=>'admin','as'=>'admin.'],function(){
    Route::get('/quiz/list', [QuizController::class, 'index'])->name('quiz.all');
    Route::get('/quiz/create', [QuizController::class, 'create'])->name('quiz.create');
    Route::post('/quiz/store', [QuizController::class, 'store'])->name('quiz.store');
    Route::get('/quiz/{id}/detail', [QuizController::class, 'detail'])->name('quiz.detail');
});
/********************************** Quiz Routes End ***********************************/
