<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
// use Symfony\Component\HttpFoundation\Session\Session;
use Illuminate\Contracts\Session\Session;

class LoginController extends Controller
{
    //
    public function login(Request $request)
    {
        if ($request->isMethod('POST')) {
            if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
                return redirect('dashboard');
            } else {
                // Session::flash('error', 'bạn đã nhập sai tên email hoặc password');
                return redirect('login');
            }
        }
        return view('auth.login');
    }
}
