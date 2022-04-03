<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Commande extends Model
{
    use HasFactory;

    // CHAMPS PRIS EN COMPTE PAR LA BD
    protected $fillable = [
        'type_prod',
        'poids',
        'transport',
        'nombre_colis',
        'point_retrait',
        'date',
        'recupere',
        'contact_recup',
        'point_depot',
        'date_depot',
        'destinataire',
        'user_id',
    ];
}
