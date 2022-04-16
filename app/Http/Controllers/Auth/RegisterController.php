<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    public function createcompte()
    {
        return view('pages/creercompte');
    }

    public function connecte(Request $request)
    {
        // VALIDER LES DONNEES DE LA BASE DONNEE
        $valide =  $this->validate($request, [
            'nom' => 'required|max:20|string',
            'prenom' => 'required|max:50|string',
            'email' => 'required|email|unique:users',
            'contact' => 'required|digits:10|unique:users',
            'contact' => 'required|digits:10|unique:users',
            'password' => 'required|min:8|confirmed',
        ], [
            'required.nom' => 'désolé, votre nom ne doit pas depasser 20 caractères',
            'required.prenom' => 'désolé, votre prénom ne doit pas depasser 50 caractères',
            'required.email' => 'désolé, cette adresse mail existe déjà dans notre base de données',
            'required.contact' => 'désolé, votre nom ne doit pas depasser 20 caractère',
            'required.confirmed' => 'désolé, vos mots de passe ne correspondent pas!',
        ]);

        // ENVOIE DES DONNEES DE LA BASE DE DONNEES
        User::create([
            'nom' => $request->nom,
            'prenom' => $request->prenom,
            'email' => $request->email,
            'type' => $request->type,
            'contact' => $request->contact,
            'password' => Hash::make($request->password),
        ]);

        // CREATION DE LA SESSION UTILISATEUR
        if (Auth::attempt(['contact' => $request->contact, 'password' => $request->password])) {

            // REDIRECTION
            return redirect('/login');
        } else {
            # code...
        }


    }


}
