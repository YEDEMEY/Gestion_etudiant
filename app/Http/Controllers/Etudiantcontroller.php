<?php

namespace App\Http\Controllers;

use App\Models\Etudiant;
use Illuminate\Http\Request;


class Etudiantcontroller extends Controller
{
   public function createtu(Request $request){
        $request->validate([
            'nom' => 'required',
            'prenom' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',
        ]);

        $forme = new Etudiant;

        $forme->nom=$request->nom;
        $forme->prenom=$request->prenom;
        $forme->email=$request->email;
        $forme->password=$request->password;

        if($forme){
            $forme->save();
            return redirect('succes');

        }
        else{
            echo '<button type="button" class="btn btn-danger">Etudiant non enregistre</button>';
        }
   }

   //fonction afficher étudiant 
   public function affichetu()
   {

    $etudiant = Etudiant::select('id', 'nom', 'prenom', 'email')->get();
    // return la view affichetu
    return view('vaffichetu', compact('etudiant'));
   }

   // fonction rechercher etudiant

   public function cherchetu(Request $request)
   {
       
    // Récupère le critère de recherche depuis la requête
        $mot = $request->input('keyword'); 

        $etudiants = Etudiant::where('nom', 'LIKE', '%'.$mot.'%')
                                ->orWhere('prenom', 'LIKE', '%'.$mot.'%')
                                ->get(); 

        return view('resultsearch', ['etudiants' => $etudiants, 'keyword' => $mot]);


   }
}
