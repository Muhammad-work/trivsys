<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class userController extends Controller
{
     public function viewLoginForm(){
        return view('backend.login');
     }

     public function storeLoginData(Request $req){
         $req->validate([
            'email' => 'required|email',
            'password' => 'required',
         ]);

         if (Auth::attempt(['email' => $req->email, 'password' => $req->password])) {
            return redirect()->intended('/dashboard'); 
        } else {
            return back()->withErrors(['email' => 'Invalid credentials.']);
        }
     }

     public function logout(){
        Auth::logout();
        return redirect()->route('login');
     }
}
