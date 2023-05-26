<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class Usercontroller extends Controller
{
    public function create(Request $request){
        //validation des données
        $request->validate([
            'nom' => 'required',
            'prenom' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',
            'birthday' => 'required',
        ]);

        // création d'instance à partir du model
        $utilisateur = new User;

        $utilisateur->nom = $request->nom;
        $utilisateur->prenom = $request->prenom;
        $utilisateur->email = $request->email;
        $utilisateur->password = $request->password;
        $utilisateur->datenaiss = $request->birthday;

        // Enrégistrer l'utilisateur
        if($utilisateur){
            $utilisateur->save();
            return redirect()->route('login');
        }
        else{
            echo 'Utilisateur non enrégistrer';
        }
    }

    //*****************fonction de login***********************

    /*La méthode attempt vérifie si les informations d'identification sont valides en 
    comparant l'email et le mot de passe avec ceux stockés dans la base de données. 
    Si les informations d'identification sont valides, l'utilisateur est considéré 
    comme authentifié.*/

    public function vlogin(Request $request){
        // extrait les champs à vérifier
        $extrait = $request->only('email', 'password');

        if (Auth::attempt($extrait)) {
            // L'authentification est réussie
            return redirect('reins');
        } else {
            // L'authentification a échoué
            return back()->withErrors([
                'email' => 'Les informations d\'identification fournies sont invalides.',
            ]);
        }
    }

    // public function signup(){
    //     return redirect('signup');
    // }
}
