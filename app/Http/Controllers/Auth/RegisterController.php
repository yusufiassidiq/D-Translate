<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Company;
use App\Translator;
use App\Personal;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
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
        $this->middleware('guest');
        $this->middleware('guest:translator');
        $this->middleware('guest:personal');
        $this->middleware('guest:company');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);
    }

    public function showTranslatorRegisterForm()
    {
        return view('auth.register', ['url' => 'translator']);
    }

    public function showPersonalRegisterForm()
    {
        return view('auth.register', ['url' => 'personal']);
    }

    public function showCompanyRegisterForm()
    {
        return view('auth.register', ['url' => 'company']);
    }

    protected function createPersonal(Request $request)
    {
        $this->validator($request->all())->validate();
        $personal = Personal::create([
            'name' => $request['name'],
            'email' => $request['email'],
            'password' => Hash::make($request['password'])
        ]);
        return redirect()->intended('login/personal');
    }

    protected function createCompany(Request $request)
    {
        $this->validator($request->all())->validate();
        $company = Writer::create([
            'name' => $request['name'],
            'email' => $request['email'],
            'password' => Hash::make($request['password']),
            'profile' => $request['profile']
        ]);
        return redirect()->intended('login/company');
    }

    protected function createTranslator(Request $request)
    {
        $this->validator($request->all())->validate();
        $translator = Translator::create([
            'name' => $request['name'],
            'email' => $request['email'],
            'password' => Hash::make($request['password']),
        ]);
        return redirect()->intended('login/translator');
    }
}
