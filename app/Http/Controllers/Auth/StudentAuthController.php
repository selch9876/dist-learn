<?php

namespace App\Http\Controllers\Auth;


use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreStudent;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\Auth\LoginRequest;


class StudentAuthController extends Controller
{

    /* public function __construct()
    { 
        $this->middleware('guest', ['except' => 'logout']);  
    } */


    public function showLoginForm()
    {
        if (Auth::guard('student')->check()) {
            return redirect()->route('student.dashboard');
        } else {
            return view('auth.studentlogin');
        }
    }

    /**
     * Handle an incoming student authentication request.
     *
     * @param  \App\Http\Requests\Auth\LoginRequest  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function login(StoreStudent $request)
    {
        $validated = $request->validated();

        if(auth()->guard('student')->attempt([
            'email' => $validated['email'],
            'password' => $validated['password'],
        ])) {

            return redirect()->intended(url('/student/dashboard'));

        } else {
            return redirect()->back()->withError('Credentials doesn\'t match.');
        }
    }

    /**
     * Destroy an authenticated session.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function logout(Request $request)
    {
        Auth::guard('student')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}
