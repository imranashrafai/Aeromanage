<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Auth\Events\Registered;
use App\Jobs\SendWelcomeEmail;




class UserController extends Controller
{
    public function registerView()
    {
        if (Auth::check()) {
            return back();
        }
        return view('register');
    }

    public function register(Request $request)
    {

        $request->validate([
            'fname' => 'required|string|max:255',
            'lname' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed',
            'gender' => 'required|string|in:male,female',
        ]);


        $user = User::create([
            'fname' => $request->fname,
            'lname' => $request->lname,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'gender'=> $request->gender
        ]);
        
        event(new Registered($user));
        Auth::login($user);
        return redirect()->route('verification.notice')->with('success', 'Registration successful. Please Verify your email');
    }
    public function loginView()

    {
        if (Auth::check()) {
            return back();
        }
        return view('login');
    }

    public function loginUsers(Request $request)
    {
        $credentials = $request
            ->validate([
                'email' => 'required|string|email',
                'password' => 'required|string',
            ]);

        if (Auth::attempt($credentials, $request->has('remember'))) {
            $request
                ->session()
                ->regenerate();
                $user = Auth::user();
                SendWelcomeEmail::dispatch($user);
        
            return redirect()
                ->intended('/');
        }

        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ]);
    }
    function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect(route('login'));
    }
}
