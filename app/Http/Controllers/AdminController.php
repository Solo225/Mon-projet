<?php

namespace App\Http\Controllers;

use App\Models\Commande;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    // PAGE ADMINISTRATEUR
    public function dashboard()
    {
        $commandes_attente = Commande::where('statut', 'encours')->get();
        $commandes = Commande::get();
        $users = User::get();

        return view('pages.adminpage', compact('commandes', 'users', 'commandes_attente'));
    }

    public function acceptee(Commande $commande, Request $request)
    {
        //   $commande->update([
        //         'contact_recup' => $commande->contact_recup,
        //         'point_retrait' => $commande->point_retrait,
        //         'point_depot' => $commande->point_depot,
        //         'contactdestinataire' => $commande->contactdestinataire,
        //         'statut' => $request->statut,
        //         'user_id' => $commande->user_id,
        //      ]);

        $commande->contact_recup =  $commande->contact_recup;
        $commande->contactdestinataire =  $commande->contactdestinataire;
        $commande->point_retrait =  $commande->point_retrait;
        $commande->point_depot =  $commande->point_depot;
        $commande->statut =  $request->statut;
        $commande->user_id =  $commande->user_id;
        $commande->update();


        return redirect()->back()->with('succes', 'Commande Acceptée');
    }

    public function refusee(Commande $commande, Request $request)
    {
        // METTONS LES INFORMATIONS A JOUR
        //  $commande->update([
        //         'contact_recup' => $commande->contact_recup,
        //         'point_retrait' => $commande->point_retrait,
        //         'point_depot' => $commande->point_depot,
        //         'contactdestinataire' => $commande->contactdestinataire,
        //         'statut' => $request->statut,
        //         'user_id' => $commande->user_id,
        //      ]);

        $commande->contact_recup =  $commande->contact_recup;
        $commande->contactdestinataire =  $commande->contactdestinataire;
        $commande->point_retrait =  $commande->point_retrait;
        $commande->point_depot =  $commande->point_depot;
        $commande->statut =  $request->statut;
        $commande->user_id =  $commande->user_id;
        $commande->update();

        return redirect()->back()->with('succes', 'Commande réfusée');
    }
}

