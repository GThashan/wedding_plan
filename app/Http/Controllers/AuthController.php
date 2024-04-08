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


    return back()->with('success', 'Register sucessfully! Go to login');
   }

   public function login(){
    return view('pages.login');
   }

//    public function loginPost(Request $request){
//     $credetials = [
//         'name' => $request->name,
//         'password' => $request->password,
//     ];

//     if (Auth::attempt($credetials)) {
//         return redirect('services')->with('success', 'Login Success');
//     }

//     return back()->with('error', 'Error Username or Password');
//    }

public function loginPost(Request $request){
    $credentials = [
        'name' => $request->name,
        'password' => $request->password,
    ];


    if (Auth::attempt($credentials)) {
        $user = Auth::user();


        if ($user->isAdmin()) {
            return redirect()->route('admin')->with('success', 'Admin Login Success');
        } else {
            return redirect()->route('services')->with('success', 'User Login Success');
        }
    }

    return back()->with('error', 'Error Username or Password');
}














   public function logout()
   {
       Auth::logout();

       return view('pages.home');
   }



}



