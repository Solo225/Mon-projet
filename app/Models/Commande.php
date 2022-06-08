<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Commande extends Model
{
    use HasFactory;

    // CHAMPS PRIS EN COMPTE PAR LA BD
    protected $fillable = [
        'point_retrait',
        'contact_recup',
        'point_depot',
        'contactdestinataire',
        'description',
        'prixItineraire',
        'user_id',
    ];

    // AVOIR LES PROPRIOS DES COMMANDE EN COURS
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
