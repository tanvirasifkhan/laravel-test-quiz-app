<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Quiz;
use Auth;
use Validator;
use Response;

class QuizController extends Controller {
    
    // show quiz list page
    public function index(){
        $quizes = Quiz::orderBy('id','DESC')->get();
        return view('quiz.list',['quizes'=>$quizes]);
    }

    // create new quiz page
    public function create(){
        return view('quiz.create');
    }

    // store new quiz
    public function store(Request $request){
        $quiz = new Quiz();
        $quiz->title = $request->title;
        $quiz->total_mark = $request->total_mark;
        $quiz->pass_mark = $request->pass_mark;
        $quiz->question_options = $request->question_options;
        $quiz->save();
        return Response::json($quiz);
    }

    // quiz detail
    public function detail($id){
        $quiz_detail = Quiz::where('id',$id)->get();
        return view('quiz.detail',['quiz_detail'=>$quiz_detail]);
    }
}