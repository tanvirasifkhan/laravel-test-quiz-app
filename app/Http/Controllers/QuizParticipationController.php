<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\QuizParticipation;

class QuizParticipationController extends Controller {
    
    // show quiz participation list
    public function index(){
        return view('quiz_participation.list');
    }
}