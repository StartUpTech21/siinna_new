<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Auth;

class AuthController extends Controller
{
    function index(){
        return view('login');
    }

    function loginProcess(User $user){
        if(Auth::attempt(['email' => request('email'), 'password' => request('password')])) {
            if(Auth::User()->status == '1'){
                if(Auth::User()->level1 == 'admin'){
                    return redirect('admin/')->with('success','Selamat Datang Admin');
                }elseif(Auth::User()->level1 == 'cs'){
                    return redirect('cs/')->with('success','Selamat Datang Customer Service');
                }elseif(Auth::User()->level1 == 'teller'){
                    return redirect('teller/')->with('success','Selamat Datang Teller');
                }
            }elseif(Auth::user()->status == '0' || Auth::user()->status == null){
                return back()->with('danger', 'Akun tidak ditemukan');
            }
        } else {
            return back()->with('danger', 'Login gagal, Silahkan coba kembali');
        }
    }

    function logout(){
        Auth::logout();
        return redirect('login');
    }
}