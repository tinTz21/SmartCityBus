<?php

namespace App\Http\Controllers\Auth;
use Auth;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class OfficerLoginController extends Controller
{

	public function __construct()
	{
		$this->middleware('guest:officer');
	}

    public function showLoginForm()
    {
    	return view('auth.officer-login');
    }

    public function login(Request $request)
    {
    	//validate the login form
    		$this->validate($request, [
    			'email' => 'required|email',
    			'password' => 'required|min:6'
    			]);
    	//attempt to log the user in
    		if (Auth::guard('officer')->attempt(['email' => $request->email,'password' => $request->password], $request->remember)) {
    			//if successful then redirect to their intended location
    			return redirect()->intended(route('officer.dashboard'));
    		}
    	//if unsuccessful then redirect to the login with the form data
    		return redirect()->back()->withInput($request->only('email', 'remember'));
    }

       public function logout(Request $request)
    {
        Auth::guard('officer')->logout();

        $request->session()->invalidate();

        return redirect('/');
    }
}
