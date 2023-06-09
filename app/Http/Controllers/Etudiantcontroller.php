<?php

namespace App\Http\Controllers;

use session;
use App\Models\Etudiant;
use Illuminate\Http\Request;


class Etudiantcontroller extends Controller
{
   public function createtu(Request $request){
        $request->validate([
            'nom' => 'required',
            'prenom' => 'required',
            'email' => 'required|email',
            'password' => 'required|min:6',
        ]);

        $forme = new Etudiant;

        $forme->nom=$request->nom;
        $forme->prenom=$request->prenom;
        $forme->email=$request->email;
        $forme->password=$request->password;

        if($forme){
            $forme->save();
            $x = true;
            session()->flash('successy',$x);
            return redirect()->route('succes');

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


public function vedit($id)
{
    $etudiant = Etudiant::find($id);
   return view('editeretu', ['etudiant'=>$etudiant]);
 }


 public function editer(Request $request)
 {
      $request-> validate([
          'id'=> 'required',
          'nom'=> 'required',
          'prenom'=> 'required',
          'email'=> 'required ',
      ]);

      $etudiant = Etudiant::findOrFail($request->id);
     
      $etudiant->nom = $request->input('nom');
      $etudiant->prenom = $request->input('prenom');
      $etudiant->email = $request->input('email');

      $etudiant-> save();
        $x = true;
        session()->flash('success',$x);
        return redirect()->route('succes');
      // return redirect()->route('editetu', $request->id)->with('message','Modifier avec succes');
 }


  //fonction supprimé etudiant 

  public function deletEtu($id)
  {
     $etudiant = Etudiant::find($id);
   //   $etudiants = Etudiant::where("id", $identifiant)->exists();
     $etudiant->delete();

      $x = false;
      session()->flash('successe',$x);
      return redirect()->route('succes');
           
  }

}