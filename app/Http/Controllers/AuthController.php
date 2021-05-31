<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class AuthController extends Controller
{
    
    public function getSignup(){
        return view('signup');
    }
    public function postSignup(Request $request){
        $this->validate($request, [
            'name'=> 'required|min:4',
            'email'=> 'required|email|unique:users',
            'password'=> 'required|min:6|confirmed' //harus dicocokan dengan field_confirmation 
        ]);

        $user = User::create([
            'name'=> $request->name,
            'email'=> $request->email,
            'password'=> bcrypt($request->password)
        ]);
        
        auth()->loginUsingId($user->id);

        // return redirect()->back();
        return redirect()->route('home');
    }

    public function getLogin(){
        return view('login');
    }
    public function postLogin(Request $request){
    //    dd(\Auth::attempt(['email'=> $request->email, 'password' => $request->password]));
       if(!\Auth::attempt(['email'=> $request->email, 'password' => $request->password])){
           return redirect()->back();
       }

       return redirect()->route('home');
    }
    public function logout(){
        \Auth::logout();

        return redirect()->route('login');
    }

}
