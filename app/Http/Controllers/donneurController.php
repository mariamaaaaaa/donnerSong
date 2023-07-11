<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\donneur;

class donneurController extends Controller
{
   public function index(){
        return view('donneur');
   }
   
   public function store(Request $request){
      $nom = $request->nom;
      $prenom = $request->prenom;
      $age = $request->age;
      $groupe = $request->groupe;
      $tele = $request->tele;
      $ville = $request->ville;
      $photo = $request->photo;
      $poid = $request->poid;
      $q1 = $request->q1;
      $q2 = $request->q2;
      $q3 = $request->q3;
      

      //validation
      $request->validate([
         'nom' => 'required'
      ]);

      //insertion
      donneur::create([
         'nom' =>$nom,
         'prenom' =>$prenom,
         'age' =>$age,
         'groupe' =>$groupe,
         'tele' =>$tele,
         'ville' =>$ville,
         'photo' =>$photo,
         'poid' =>$poid,
         'q1' =>$q1,
         'q2' =>$q2,
         'q3' =>$q3,
         
      ]);

      return redirect()->route('home');
   }
}
