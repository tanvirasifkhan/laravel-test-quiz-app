<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Models\Quiz;
use App\Models\Candidate;
use App\Models\QuizParticipation;

class DashboardController extends Controller {
    
    // show dashboard page
    public function index(){
        $count_quiz = Quiz::count();
        $count_candidate = Candidate::count();
        $count_approved = Candidate::where('status','approved')->count();
        $count_pending = Candidate::where('status','pending')->count();
        $count_participation = QuizParticipation::where('candidate_id',Auth::guard('candidate')->user()->id)->count();
        $count_passed = QuizParticipation::where('candidate_id',Auth::guard('candidate')->user()->id)
            ->where('passed',true)->count();
        $count_failed = QuizParticipation::where('candidate_id',Auth::guard('candidate')->user()->id)
            ->where('passed',false)->count();
        return view('dashboard.dashboard',[
            'count_quiz'=>$count_quiz,
            'count_candidate'=>$count_candidate,
            'count_approved'=>$count_approved,
            'count_pending'=>$count_pending,
            'count_participation'=>$count_participation,
            'count_passed'=>$count_passed,
            'count_failed'=>$count_failed
        ]);
    }
}