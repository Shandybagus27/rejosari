<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index()
    {
        return view('auth.login', [
            'title' => 'Login'
        ]);
    }

    public function loginAdmin(Request $request)
    {
            $credentials=$request->validate([
            'email' => 'required|email',
            // 'email' => 'required|email:dns',
            'password' => 'required'
        ]);
        
        // if(Auth::attempt($credentials)) {
        //     $request->session()->regenerate();

        //     return redirect()->intended('/admin');
        // }
        return redirect()->intended('/admin');
        // return back()->With('loginError', 'Login Gagal!');

        
        // $request->validate([
        //     'email' => 'required|email',
        //     'password' => 'required',
        // ]);

        // if (Auth::guard('user')->attempt(['email' => $request->email, 'password' => $request->password])) {
        //     return redirect()->intended('dashboard/admin'); // Ganti dengan route yang sesuai
        // }

        // return back()->withErrors(['email' => 'Email atau password salah.']);
    }
    // public function authenticate(Request $request)
    // {
    //     // $request->validate([
    //     //     'email' => 'required|email',
    //     //     'password' => 'required',
    //     // ]);
    
    //     // $credentials = $request->only('email', 'password');
    
    //     // if (Auth::attempt($credentials)) {
    //     //     $request->session()->regenerate();
    
    //     //     // Redirect berdasarkan role
    //     //     if (Auth::user()->role === 'admin') {
    //     //         return redirect()->intended('/admin');
    //     //     } else {
    //     //         return redirect()->intended('/pesanwarung');
    //     //     }
    //     // }
    
    //     // return back()->withErrors([
    //     //     'email' => 'Email atau password salah.',
    //     // ]);

    //     $credentials=$request->validate([
    //         'email' => 'required|email',
    //         // 'email' => 'required|email:dns',
    //         'password' => 'required'
    //     ]);
        
    //     // if(Auth::attempt($credentials)) {
    //     //     $request->session()->regenerate();

    //     //     return redirect()->intended('/admin');
    //     // }
    //     return redirect()->intended('/admin');
    //     // return back()->With('loginError', 'Login Gagal!');

    // }

    public function logout(Request $request)
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();
    
        $request->session()->regenerateToken();
    
        return redirect('/blog');
    }
}
