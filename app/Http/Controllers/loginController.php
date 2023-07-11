<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
class loginController extends Controller
{
    public function show(){
        return view('Connexion');
    }

    public function login(Request $request){
       
        $login = $request->email;
        $password = $request->password;
        $values = ['email'=> $login , 'password'=> $password];

        if(Auth::attempt($values)){
            $request->session()->regenerate();
            return to_route('home');
        }else{
            return back()->withErrors([
                'email' =>'Email ou mot de passe incorrect.'
            ])->onlyInput('email'); 
        }
        
    }

    public function logout(){
        Session::flush();

        Auth::logout();

        return to_route('connexion');
    }
}
