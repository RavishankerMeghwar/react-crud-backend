<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Requests\LoginRequest;
use Illuminate\Contracts\View\View;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\RedirectResponse;

class AdminController extends Controller
{
    /**
     * index
     *
     * @param  mixed $request
     * @return View
     */
    public function index()
    {
        if (Auth::check())
            return redirect()->route('dashboard.home');

        return view('admin.auth.login');
    }

    /**
     * index
     *
     * @param  mixed $request
     * @return View
     */
    public function dashboard(Request $request): View
    {
        return view('admin.pages.dashboard');
    }

    /**
     * login
     *
     * @param  mixed $request
     * @return RedirectResponse
     */
    public function loginProcess(LoginRequest $request)
    {
        $credentials = $request->validated();

        if (
            Auth::attempt($credentials)
        ) {
            return redirect()->intended('dashboard')->with('success', 'Login Successfull!');
        }

        return back()->withErrors([
            'mismatch' => 'Wrong Credentials. Try again',
        ]);
    }

    /**
     * Log the user out of the application.
     */
    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect(route('login'))->with('success', 'Logout Successfull!');
    }

}