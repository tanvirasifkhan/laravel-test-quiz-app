<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\QuizParticipation;
use App\Models\Quiz;
use Auth;
use Response;

class QuizParticipationController extends Controller {
    
    // show quiz participation list
    public function index(){
        $participation_list = QuizParticipation::where('candidate_id',Auth::guard('candidate')->user()->id)->orderBy('id','DESC')->get();
        return view('quiz_participation.list',['participation_list'=>$participation_list]);
    }

    // quiz list
    public function quizList(){
        $quiz_list = Quiz::all();
        return view('quiz_participation.quiz_list',['quiz_list'=>$quiz_list]);
    }

    // new quiz participation
    public function newParticipation($id){
        $quiz_detail = Quiz::where('id',$id)->get();
        return view('quiz_participation.new_participation',['quiz_detail'=>$quiz_detail]);
    }

    // create new participation
    public function saveParticipation(Request $request){
        $participatin = new QuizParticipation();
        $participatin->candidate_id = Auth::guard('candidate')->user()->id;
        $participatin->quiz_id = $request->quiz_id;
        $participatin->answer = $request->answer;
        $participatin->mark = $request->mark;
        $participatin->save();
        return Response::json($participatin);
    }
}