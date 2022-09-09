<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Auth;
use App\Models\Candidate;

class CandidateController extends Controller {
    
    // all candidate list
    public function index(){
        $candidate_list = Candidate::orderBy('id','DESC')->get();
        return view('candidate.list',['candidate_list'=>$candidate_list]);
    }

    // all pending candidate list
    public function pendingList(){
        return view('candidate.pending');
    }

    // all rejected candidate list
    public function rejectedList(){
        return view('candidate.rejected');
    }

    // all approved candidate list
    public function approvedList(){
        return view('candidate.approved');
    }

    // view candidate detail
    public function detail($id){
        $candidate_detail = Candidate::where('id',$id)->get();
        return view('candidate.detail',['candidate_detail'=>$candidate_detail]);
    }

    // mark as approved
    public function markApproved($id){
        $find_candidate = Candidate::findOrFail($id);
        $find_candidate->status = 'approved';
        $find_candidate->save();
        return redirect()->route('admin.candidate.all')->with('message','Candidate marked as approved successfully !');
    }

    // mark as rejected
    public function markRejected($id){
        $find_candidate = Candidate::findOrFail($id);
        $find_candidate->status = 'rejected';
        $find_candidate->save();
        return redirect()->route('admin.candidate.all')->with('message','Candidate marked as rejected successfully !');
    }

    // delete candidate
    public function destroy($id){
        $find_candidate = Candidate::findOrFail($id);
        $find_candidate->delete();
        return redirect()->route('admin.candidate.all')->with('message','Candidate deleted successfully !');
    }
}