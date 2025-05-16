<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\LoginRequest;
use App\Http\Requests\RegisterRequest;

class ItemController extends Controller
{
    

    public function loginUser(LoginRequest $request){
        $credentials=$request->only('email', 'password');
        if(Auth::attempt($credentials)){
            return redirect('/puroducts');
        }
    }

    public function storeUser(RegisterRequest $request){
        $user=User::create([
            'name'=>$request->name,
            'email'=>$request->email,
            'password'=>Hash::make($request->password)
        ]);


        
        Auth::login($user);
        return redirect('/register/step2');
    }







    public function logout(){
        return view('auth.login');
    }

}
