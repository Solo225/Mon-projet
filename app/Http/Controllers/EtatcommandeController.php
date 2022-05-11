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
                // 'type_prod' => 'required',
                // 'poids' => 'required',
                // 'transport' => 'required',
                // 'nombre_colis' => 'required',
                'point_retrait' => 'required',
                // 'date' => 'required',
                // 'recupere' => 'required',
                'contact_recup' => 'required|digits:10',
                'point_depot' => 'required',
                // 'date_depot' => 'required',
                'contactdestinataire' => 'required|digits:10',
            ]);


            // ENVOIE DES DONNEES DE LA BASE DE DONNEES
            Commande::create([
                // 'type_prod' => $request->type_prod,
                // 'poids' => $request->poids,
                // 'transport' => $request->transport,
                // 'nombre_colis' => $request->nombre_colis,
                'point_retrait' => $request->point_retrait,
                // 'date' => $request->date,
                // 'taille' =>$request->taille,
                // 'heure' =>$request->heure,
                // 'heuredepot' =>$request->heuredepot,
                // 'temperature' =>$request->temperature,
                // 'etage' =>$request->etage,
                // 'recupere' => $request->recupere,
                'contact_recup' => $request->contact_recup,
                'point_depot' => $request->point_depot,
                // 'date_depot' => $request->date_depot,
                // 'destinataire' => $request->destinataire,
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
