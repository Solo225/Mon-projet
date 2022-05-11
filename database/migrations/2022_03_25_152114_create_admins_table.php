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
        Schema::create('admins', function (Blueprint $table) {
            $table->id();
<<<<<<< HEAD
=======
            $table->string('photo');
>>>>>>> 52bd18dd6bf306652c7e68a7d0a7a70800e19dce
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
        Schema::dropIfExists('admins');
    }
};
