<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Admins;

class LoginController extends Controller
{
    /**
     * Show the login form.
     *
     * @return \Illuminate\View\View
     */
    public function showLoginForm()
    {
        return view('admin.sign-in');
    }

    /**
     * Handle user login.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
   
     public function login(Request $request)
{
    $credentials = $request->validate([
        'email' => 'required|string|email|max:255',
        'password' => 'required|string',
    ]);

    // Attempt to authenticate with the Admins model
    if (Auth::guard('Admins')->attempt($credentials)) {
        // Set the session key to indicate admin authentication
        $request->session()->put('admin_authenticated', true);
        return redirect()->route('admin');
    }

    return back()->withErrors([
        'email' => 'Invalid credentials.',
    ])->withInput($request->only('email'));
}
    public function logout(Request $request)
    {
        // Logout the user from the Admins guard
        Auth::guard('Admins')->logout();

        // Remove the session key indicating admin authentication
        $request->session()->forget('admin_authenticated');

        return redirect()->route('login');
    }

}
