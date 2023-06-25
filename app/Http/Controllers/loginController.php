<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class loginController extends Controller
{
    public function register(){
        return view('login.signin');
    }
    public function registerpost(Request $request){

        $validatedData = $request -> validate([
            'name'=> 'required|max:255',
            'email'=> 'required|max:255|unique:users',
            'birth_date'=> 'required',
            'nomor_telepon'=> 'required',
            'password'=> 'required'
        ]);
        $validatedData['password']=Hash::make($validatedData['password']);
        User::create($validatedData);
        return redirect('/');
    }
    public function login(){
        return view('dashbroad.layout.main');
    }

    public function loginpost(Request $request){
        $credetials = [
            'email' => $request->email,
            'password' => $request->password,
        ];
        if (Auth::attempt($credetials)) {
            return view('dashbroad.dashbroad');
        }
        return back()->with('success', 'Login Success');

    }
    public function logout(){
        // Auth::logout();

        return view('welcome');
    }

}