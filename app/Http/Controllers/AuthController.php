<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
   public function signUp(){
       return view('pages.signUp');
   }


   public function signUppost(Request $request){
    $user = new User();

    $user->name = $request->name;
    $user->email = $request->email;
    $user->password = Hash::make($request->password);

    $user->save();

    // return view('pages.login')->with('success', 'Register successfully');
    return back()->with('success', 'Register sucessfully! Go to login');
   }

   public function login(){
    return view('pages.login');
   }

   public function loginPost(Request $request){
    $credetials = [
        'name' => $request->name,
        'password' => $request->password,
    ];

    if (Auth::attempt($credetials)) {
        return redirect('services')->with('success', 'Login Success');
    }

    return back()->with('error', 'Error Username or Password');
   }

   public function logout()
   {
       Auth::logout();

       return view('pages.home');
   }



}
