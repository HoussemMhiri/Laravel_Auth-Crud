<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class UserController extends Controller
{
    public function login()
    {
        return view('auth.login');
    }
    public function register()
    {
        return view('auth.registration');
    }

    public function store(Request $request)
    {
        $formFileds = $request->validate([
            'name' => ['required', 'min:3'],
            'email' => ['required', 'email', Rule::unique('users', 'email')],
            'password' => 'required|min:3',

        ]);

        //Hash Password 
        $formFileds['password'] = bcrypt($formFileds['password']);

        //Create user
        $user = User::create($formFileds);

        if (!$user) {
            return redirect(route('registration'))->with('error', 'Register Failed');
        }
        return redirect(route('login'));
    }

    public function loginPost(Request $request)
    {
        $formFileds = $request->validate([
            'email' => ['required', 'email'],
            'password' => 'required',
        ]);

        if (auth()->attempt($formFileds)) {
            $request->session()->regenerate();

            return redirect(route('product.index'))->with('Message', 'You are now logged in!');
        }

        return back()->withErrors(["email" => 'Invalid Credentials'])->onlyInput('email');
    }

    public function logout(Request $request)
    {
        auth()->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect(route('login'))->with('message', 'You have been logged out');
    }
}
