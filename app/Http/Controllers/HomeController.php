<?php

namespace App\Http\Controllers;

use App\Models\Commande;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    // FONCTION DE RENVOIE DE COMMANDE SUR LA PAGE D'ACCUEIL
    public function confir()
    {
        $commandes = Commande::where('user_id', Auth::user()->id)->get();
        return view('pages.confirlivreur', compact('commandes'));
    }
    public function pageClient()
    {
        // RENVOYONS TOUTES LES COMMANDES
        $commandes = Commande::where('user_id', Auth::user()->id)->get();
        return view('pages.pageclient', compact('commandes'));
    }
    // RENVOIE LA PAGES DES UTILISATEURS
    public function utilisa()
    {
        $commandes = Commande::get();
        return view('pages.utilisateur', compact('commandes'));
    }
    // RENVOIE DES COMMANDES DE LIVRAISON
    public function livraison()
    {
        $commandes = Commande::get();
        return view('pages.livreur', compact('commandes'));
    }
    // RENVOIE LA PAGE D'ACCUEIL
    public function accueil()
    {
        return view('pages.home');
    }
    // RENVOIE LA PAGE DE A PROPOS
    public function about()
    {
        return view('pages.about');
    }
    // RENVOIE LA PAGE DE CONTACTER NOUS
    public function contact()
    {
        return view('pages.contact');
    }
    // RENVOIE LA PAGE DES SERVICES
    public function services()
    {
        return view('pages.services');
    }
    // RENVOIE LA PAGE DES CHOIX
    public function choix()
    {
        return view('pages.choix');
    }
    // RENVOIE LA PAGE DES PROFIL
    public function profil()
    {
        return view('pages.profile');
    }


    // CE QUE TU AS MIS
    public function profilelivrer()
    {
        return view('pages/profilelivreur');
    }
    public function profileadmini()
    {
        return view('pages/profileadmin');
    }
    public function verifia()
    {
        return view('pages/verifiun');
    }
    public function verifi()
    {
        return view('pages/verifideux');
    }
    public function verif()
    {
        return view('pages/verifitrois');
    }

    public function suppr()
    {
        return view('pages/suppriLivreur');
    }
    public function valid()
    {
        return view('pages.commandevali');
    }
}
