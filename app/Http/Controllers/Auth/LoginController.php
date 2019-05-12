<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Auth;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/listjob';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
        $this->middleware('guest:translator')->except('logout');
        $this->middleware('guest:personal')->except('logout');
        $this->middleware('guest:company')->except('logout');
    }

    public function showTranslatorLoginForm()
    {
        return view('auth.login', ['url' => 'translator']);
    }

    public function showPersonalLoginForm()
    {
        return view('auth.login', ['url' => 'personal']);
    }

    public function showCompanyLoginForm()
    {
        return view('auth.login', ['url' => 'company']);
    }

    public function translatorLogin(Request $request)
    {
        $this->validate($request, [
            'email'   => 'required|email',
            'password' => 'required|min:6'
        ]);

        if (Auth::guard('translator')->attempt(['email' => $request->email, 'password' => $request->password], $request->get('remember'))) {

            return redirect()->intended('/translator');
        }
        return back()->withInput($request->only('email', 'remember'));
    }


    public function personalLogin(Request $request)
    {
        $this->validate($request, [
            'email'   => 'required|email',
            'password' => 'required|min:6'
        ]);

        if (Auth::guard('personal')->attempt(['email' => $request->email, 'password' => $request->password], $request->get('remember'))) {

            return redirect()->intended('/personal');
        }
        return back()->withInput($request->only('email', 'remember'));
    }


    public function companyLogin(Request $request)
    {
        $this->validate($request, [
            'email'   => 'required|email',
            'password' => 'required|min:6'
        ]);

        if (Auth::guard('company')->attempt(['email' => $request->email, 'password' => $request->password], $request->get('remember'))) {

            return redirect()->intended('/company');
        }
        return back()->withInput($request->only('email', 'remember'));
    }
}
