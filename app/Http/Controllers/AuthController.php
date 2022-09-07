<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Candidate;
use Validator;
use Auth;

class AuthController extends Controller {
    
    // login view page
    public function loginView(){
        return view('auth.login');
    }

    // register view page
    public function registerView(){
        return view('auth.register');
    }

    // log the user into the dashboard
    public function authenticate(Request $request){
        $validators=Validator::make($request->all(),[
            'email'=>'required|email',
            'password'=>'required'
        ]);

        if($validators->fails()){
            return redirect()->route('auth.login_view')->withErrors($validators)->withInput();
        }else{
            if(Auth::guard('admin')->attempt(['email'=>$request->email,'password'=>$request->password])){
                return redirect()->route('admin.dashboard')->with('message','Successfully loggedin !');             
            }else{
                return redirect()->route('auth.login_view')->with('error_message','Email/Password is wrong !'); 
            }
        }           
    }
}