<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthenticateController extends Controller
{
    public function login()
    {
        return view('authentication.login');
    }

    public function register()
    {
        return view('authentication.register');
    }

    public function userLogin(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->intended('/panel/dashboard');
        }
        return back()->with('loginEror', 'Gagal login !!');
    }

    public function userRegister(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:100',
            'email' => 'required|unique:users|email',
            'password' => 'required|min:5|max:255',
        ]);

        $validatedData['role_id'] = 2;
        $validatedData['status'] = 0;
        $validatedData['password'] = Hash::make($validatedData['password']);

        User::create($validatedData);

        return redirect('/login')->with('success', 'Data berhasil tersimpan !! Silahkan login !!');
    }

    public function logout()
    {
        Auth::logout();

        request()->session()->invalidate();
        request()->session()->regenerateToken();
        return redirect('/');
    }
}
