<?php

namespace App\Http\Controllers\Auth;

use Auth;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminLoginController extends Controller
{

    public function __construct(){
        $this->middleware('guest:admin', ['except' => ['logout']]);
    }
    public function showLoginForm(){
    	return view('auth.admin-login');
    }

    public function login(Request $request)
    {
    	    	//validate the form data
    	$this->validate($request,[
    			'email' => 'required|email',
    			'password' => 'required|min:6'
    		]);

    	//attempt to log the user in
    	if (Auth::guard('admin')->attempt(['email' => $request->email,'password' => $request->password], $request->remember)) {
    		//if successful then redirect to the intended location
    		return redirect()->intended(route('admin.dashboard'));
    	}
    	//if unsuccesful, redirect back to their login with form data
    	return redirect()->back()->withInput($request->only('email', 'remember'));
    }

       public function logout()
    {
        Auth::guard('admin')->logout();

        return redirect('/');
    }
}
