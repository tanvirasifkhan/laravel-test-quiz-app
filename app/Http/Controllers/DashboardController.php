<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class DashboardController extends Controller {
    
    // show dashboard page
    public function index(){
        return view('dashboard.dashboard');
    }
}