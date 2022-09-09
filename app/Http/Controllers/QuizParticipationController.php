<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\QuizParticipation;
use App\Models\Quiz;

class QuizParticipationController extends Controller {
    
    // show quiz participation list
    public function index(){
        return view('quiz_participation.list');
    }

    // quiz list
    public function quizList(){
        $quiz_list = Quiz::all();
        return view('quiz_participation.quiz_list',['quiz_list'=>$quiz_list]);
    }
}