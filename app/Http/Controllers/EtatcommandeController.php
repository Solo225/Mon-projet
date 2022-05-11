<?php

namespace App\Http\Controllers;

use App\Models\Commande;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class EtatcommandeController extends Controller
{
    // RENVOIE LE FORMULAIRE DE COMMANDE
    public function commande()
    {
        return view('pages.commande');
    }

    // CETTE FONCTION VALIDE ET ENVOIE LES COMMANDE DE LA BD
    public function store(Request $request)
    {
        // VERIFIONS SI LE GARS EST CONNECTE
         if (Auth::user()) {
            // VALIDER LES DONNEES DE LA BASE DONNEE
            $this->validate($request, [
                'point_retrait' => 'required',
                'contact_recup' => 'required|digits:10',
                'point_depot' => 'required',

                'contactdestinataire' => 'required|digits:10',
            ]);


            // ENVOIE DES DONNEES DE LA BASE DE DONNEES
            Commande::create([
                'point_retrait' => $request->point_retrait,
                'contact_recup' => $request->contact_recup,
                'point_depot' => $request->point_depot,
                'contactdestinataire' => $request->contactdestinataire,
                'user_id' => Auth::user()->id,
             ]);

            // REDIRECTION
            return redirect('/pageclient')->with('message', 'Votre commande a été validé, Merci');

         } else {
             // SI NON
            return redirect('/login');
         }

    }

    // FONCTION DE RECAP
    public function recap(Commande $commande)
    {
        // dd($commande);
        return view('pages.recap', compact('commande'));
    }
}
