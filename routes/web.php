<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\CandidateController;
use App\Http\Controllers\QuizController;
use App\Http\Controllers\QuizParticipationController;

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
    Route::post('/signup', [AuthController::class, 'register'])->name('signup');
});

Route::group(['middleware'=>'web'],function(){
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
});
/********************************** Authentication Routes End ***********************************/

/********************************** Dashboard Routes Start ***********************************/
Route::group(['middleware'=>'admin','prefix'=>'admin','as'=>'admin.'],function(){
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
});

Route::group(['middleware'=>'candidate','prefix'=>'candidate','as'=>'candidate.'],function(){
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
});
/********************************** Dashboard Routes End ***********************************/

/********************************** Candidate Routes Start ***********************************/
Route::group(['middleware'=>'admin','prefix'=>'admin','as'=>'admin.'],function(){
    Route::get('/candidate/list', [CandidateController::class, 'index'])->name('candidate.all');
    Route::get('/candidate/pending/list', [CandidateController::class, 'pendingList'])->name('candidate.pending');
    Route::get('/candidate/rejected/list', [CandidateController::class, 'rejectedList'])->name('candidate.rejected');
    Route::get('/candidate/approved/list', [CandidateController::class, 'approvedList'])->name('candidate.approved');
    Route::get('/candidate/{id}/mark_as_approved', [CandidateController::class, 'markApproved'])->name('candidate.mark_as_approved');
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

/********************************** Quiz Routes Start ***********************************/
Route::group(['middleware'=>'candidate','prefix'=>'candidate','as'=>'candidate.'],function(){
    Route::get('/participation/list', [QuizParticipationController::class, 'index'])->name('participation.list');
    Route::get('/participation/quiz/ist', [QuizParticipationController::class, 'quizList'])->name('participation.quiz_list');
    Route::get('/participation/{id}/new', [QuizParticipationController::class, 'newParticipation'])->name('participation.new');
    Route::post('/participation/{id}/save', [QuizParticipationController::class, 'saveParticipation'])->name('participation.save');
});
/********************************** Quiz Routes End ***********************************/
