<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;

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
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
    public function login(Request $request)
    {
        $input = $request->all();
        $this->validate($request, [
            'name' => 'required', //emain
            'password' => 'required'

        ]);
        if (auth()->attempt(['name' => $input["name"], 'password' => $input['password']])) {
            if (auth()->user()->role == 'admin') {
                return redirect()->route('dashboard');
            } else if (auth()->user()->role == 'kaprodi') {
                return redirect()->route('kaprodi-home');
            } else if (auth()->user()->role == 'admprodi') {
                return redirect()->route('admprodi-home');
            } else { //role == jurusan
                return redirect()->route('home');
            }
        } else {
            return redirect()
                ->route("login")
                ->with("error", 'Incorrect username or password'); //sebelumnya email or password
        }
    }
}
