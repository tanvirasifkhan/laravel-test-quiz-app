<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Auth;
use Validator;

class QuizController extends Controller {
    
    // show quiz list page
    public function index(){
        return view('quiz.list');
    }

    // create new quiz page
    public function create(){
        return view('quiz.create');
    }
}