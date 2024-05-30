<?php

namespace App\Http\Controllers;

use App\Models\Petugas;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    public function index(){
        return view('pages.login');
    }

    public function authenticate(Request $request){
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);


        $petugas = Petugas::where('email', $credentials['email'])->first();

        if ($petugas && Hash::check($credentials['password'], $petugas->password)) {
            $request->session()->put('logged_in_petugas', $petugas->id_petugas);
            $request->session()->regenerate();
            return redirect('/dashboard');
        } else {
            return back()->withErrors([
                'email' => 'The provided credentials do not match our records.',
            ]);
        }
    }

    public function logout(Request $request){
        $request->session()->forget('logged_in_petugas');
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/login');
    }
}