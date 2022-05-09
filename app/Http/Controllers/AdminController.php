<?php

namespace App\Http\Controllers;

use App\Models\Commande;
use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    // PAGE ADMINISTRATEUR
    public function dashboard()
    {
         $commandes = Commande::get();
        $users = User::get();

        return view('pages.adminpage', compact('commandes', 'users'));
    }
}
