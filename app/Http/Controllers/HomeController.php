<?php

namespace App\Http\Controllers;

use App\Models\Commande;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{

    public function pageClient()
    {
        // RENVOYONS TOUTES LES COMMANDES
        $commandes = Commande::where('user_id', Auth::user()->id)->get();
        return view('pages.pageclient', compact('commandes'));
    }
    public function admin()
    {
        $commandes = Commande::get();
        return view('pages.adminpage', compact('commandes'));
    }
    public function utilisa()
    {
        $commandes = Commande::get();
        return view('pages.utilisateur', compact('commandes'));
    }
    public function livraison()
    {
        $commandes = Commande::get();
        return view('pages.livreur', compact('commandes'));
    }

    public function accueil()
    {
        return view('pages.home');
    }

    public function about()
    {
        return view('pages.about');
    }

    public function contact()
    {
        return view('pages/contact');
    }

    public function services()
    {
        return view('pages/services');
    }

    public function choix()
    {
        return view('pages/choix');
    }
    public function profil()
    {
        return view('pages/profile');
    }
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
    public function confir()
    {
        return view('pages/confirlivreur');
    }
    public function suppr()
    {
        return view('pages/suppriLivreur');
    }
}