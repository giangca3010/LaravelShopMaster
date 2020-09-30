<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    public function loginAdmin()
    {
        if (auth()->check()){
            return redirect('admin');
        }
        return view('login');
    }

    public function postLoginAdmin(Request $request)
    {

        $remember = $request->has('remember_me') ? true : false;
        if (auth()->attempt([
            'email' => $request -> email,
            'password' => $request -> password,
        ], $remember)) {
                return redirect('admin')->with('account', $request -> email);
        }else{
            return redirect()->back()->with('message', 'Tài khoản hoặc mật khẩu không đúng');
        }
//        dd($remember);
    }

    public function logoutAdmin()
    {
        Auth::logout();
        return redirect('adminLogin');
    }
}
