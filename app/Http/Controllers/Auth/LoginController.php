<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use Illuminate\Support\Facades\Auth as FacadesAuth;

class LoginController extends Controller
{
    function index()
    {
        return view('.pages.auth.login');
    }

    function login(Request $request)
    {
        // validaasi data
        $validatedUser = $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);
        //proses login, dicek apakah sudah sesuai dengan data di database
        if(Auth::attempt($validatedUser)) {
            //redirect ke halaman selanjutnya
            return redirect()->to('merk');
        } else {
            //redirect ke halaman login lagi
            return redirect()->back();
        }

    }

    function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->to('/login');
    }

}
