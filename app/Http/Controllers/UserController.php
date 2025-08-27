<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    //
    public function login(Request $req)
    {
        $formFields = [
            "email" => $req->input('email'),
            "password" => $req->input('password')
        ];

       if (Auth::attempt($formFields)) {
        if (Auth::user()->role === 'teacher') {
            return redirect('/teacher/dashboard')->with([
                'message' => 'Logged in successfully!',
                'type' => 'success'
            ]);
        } elseif (Auth::user()->role === 'admin') {
            return redirect('/admin/dashboard')->with([
                'message' => 'Logged in successfully!',
                'type' => 'success'
            ]);
        } elseif (Auth::user()->role === 'student') {
            return redirect('/student/dashboard')->with([
                'message' => 'Logged in successfully!',
                'type' => 'success'
            ]);
        }
    }
    else {
        return back()->with([
            'message' => 'Invalid credentials',
            'type' => 'error'
        ]);
    }
        }


public function Logout(Request $req)
{
    $req->session()->invalidate();
    $req->session()->regenerate();
    return redirect('/');



}

}