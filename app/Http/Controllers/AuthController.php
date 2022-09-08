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

    // register candidate
    public function register(Request $request){
        $validators = Validator::make($request->all(),[
            'name'=>'required',
            'email'=>'required|email|unique:candidates,email|unique:users,email',
            'phone'=>'required|numeric|digits:11|unique:candidates',
            'cv_link'=>'required',
            'password'=>'required'
        ]);

        if($validators->fails()){
            return redirect()->route('register')->withErrors($validators)->withInput();
        }else{
            $candidate = new Candidate();
            $candidate->name = $request->name;
            $candidate->email = $request->email;
            $candidate->phone = $request->phone;
            $candidate->cv_link = $request->cv_link;
            $candidate->password = bcrypt($request->password);
            $candidate->status = 'pending';
            $candidate->save();
            return redirect()->route('login')->with('message','Successfully registered.You can login now !');
        }        
    }

    // log the user into the dashboard
    public function authenticate(Request $request){
        $validators=Validator::make($request->all(),[
            'email'=>'required|email',
            'password'=>'required'
        ]);

        if($validators->fails()){
            return redirect()->route('login')->withErrors($validators)->withInput();
        }else{
            if(Auth::guard('admin')->attempt(['email'=>$request->email,'password'=>$request->password])){
                return redirect()->route('admin.dashboard')->with('message','Successfully loggedin !');             
            }elseif(Auth::guard('candidate')->attempt(['email'=>$request->email,'password'=>$request->password])){
                return redirect()->route('candidate.dashboard')->with('message','Successfully loggedin !');             
            }else{
                return redirect()->route('login')->with('error_message','Email/Password is wrong !'); 
            }
        }           
    }

    // log the user out
    public function logout(){
        if(Auth::guard('admin')->check()){
            Auth::guard('admin')->logout();
        }else{
            Auth::guard('candidate')->logout();
        }    
        return redirect()->route('login')->with('message','Successfully signed out !');
    }
}