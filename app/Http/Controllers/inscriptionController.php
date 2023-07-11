<?php

namespace App\Http\Controllers;
use App\Models\inscription;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
class inscriptionController extends Controller
{
    public function index(){
        return view('Inscription');
    }

    public function store(Request $request){
        $name = $request->name;
        $email = $request->email;
        $password = $request->password;

        //validation
        $form= $request->validate([
            'name'=>'required|min:3',
            'email'=>'required|email|unique:inscriptions',
            'password'=>'required|min:9|max:20|confirmed',
        ]);
        $password = $request->password;
        $form['password'] = Hash::make($password);
       
        //insertion
        
        inscription::create($form,[
            'name' => $name,
            'email' => $email,
            'password' => $password,
        ]);

        return redirect()->route('home');
    }
}
