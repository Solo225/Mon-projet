<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('commandes', function (Blueprint $table) {
            $table->id();
            // $table->string('type_prod');
            // $table->string('poids');
            // $table->string('transport');
            // $table->string('nombre_colis');
            $table->string('point_retrait');
            // $table->string('date');
            // $table->string('recupere');
            $table->string('contact_recup');
             $table->string('point_depot');
            // $table->string('date_depot');
            // $table->string('destinataire');
            $table->string('contactdestinataire');
            // $table->string('temperature');
            // $table->string('taille');
            // $table->string('etage');
            // $table->string('heuredepot');
            // $table->string('heure');
            $table->string('statut')->default('non livré');
            $table->unsignedBigInteger('user_id')->index();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('commandes');
    }
};
