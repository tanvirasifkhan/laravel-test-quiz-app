<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Candidate;
use Validator;

class AuthController extends Controller {
    
    // login view page
    public function loginView(){
        return view('auth.login');
    }
}