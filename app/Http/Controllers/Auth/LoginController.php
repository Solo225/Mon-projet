<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    // RENVOIE LA PAGE DE CONNEXION
    public function login()
    {
        return view('pages.login');
    }

    // POUR LA PAGE DE CONNEXION
    public function faireConnexion(Request $request)
    {
        // VALIDER LES DONNEES DE LA BASE DONNEE
        $valide =  $this->validate($request, [
            'contact' => 'required|digits:10',
            'password' => 'required',
        ], [
            'required.contact' => 'désolé, votre nom ne doit pas depasser 20 caractère',
            'required.confirmed' => 'désolé, vos mots de passe ne correspondent pas!',
        ]);

        // VERIFIONS SI L'UTILISATEUR A UN COMPTE OU PAS
        if (Auth::attempt(['contact' => $request->contact, 'password' => $request->password])) {
            // VERIFIONS LE TYPE D'UTILISATEUR CONNECTE ET REDIRIGEONS LE SUR SON DASHBOARD
                if (Auth::user()->type == "livreur") {
                    return redirect()->route('livreur')->with('message', 'connecté!');
                }
                if (Auth::user()->type == "client") {
                    return redirect()->route('pageclient')->with('message', 'connecté!');
                }
                if (Auth::user()->type == "admin") {
                    return redirect()->route('pageclient')->with('message', 'connecté!');
                }

        }else{
            // SINON
            return redirect()->back()->with('message', 'Yo Mec, t\'es sur que tu as un compte?');
        }
    }

    // DECONNECTE LE GARS
    public function deconnexion()
    {
        // VERIFIONS S'IL EST CONNECTE
        if (Auth::user()) {
            // ALORS PN LE DECONNECTE
            Auth::logout();
            return redirect('/')->with('message', "Déconnexion réussie");
        } else
        {
            return redirect()->back()->with('message', 'Yo Mec, t\'es pas connecté');
        }

    }



}
