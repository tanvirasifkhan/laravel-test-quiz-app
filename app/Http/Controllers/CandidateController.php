<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Auth;
use App\Models\Candidate;

class CandidateController extends Controller {
    
    // all candidate list
    public function index(){
        return view('candidate.list');
    }

    // all pending candidate list
    public function pendingList(){
        return view('candidate.pending');
    }
}