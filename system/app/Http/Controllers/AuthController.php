<?php

namespace App\Http\Controllers;
use Auth;


class AuthController extends Controller
{
    function showLogin(){
        return view('adminlogin');
    }

    function loginProcess(){
        if(Auth::attempt(['email' => request('email'), 'password' => request('password')])){
            return redirect('beranda')->with('success', 'Login berhasil');
        }else{
            return back()->with('danger', 'Login gagal, silahkan cek email dan password anda');
        }
    }

    function logout(){
        Auth::logout();
        return redirect('adminlogin');
    }

    function registration(){

    }

    function forgotPassword(){

    }
}