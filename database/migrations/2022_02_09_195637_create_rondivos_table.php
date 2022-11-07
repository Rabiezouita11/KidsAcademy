<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRondivosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rondivos', function (Blueprint $table) {
            $table->id();
            $table->string('nom_prof');
            $table->string('nom_parent');
            $table->string('message');
            $table->string('objet');
            $table->string('date');
            $table->string('time_debut');
            $table->string('time_fin');
            $table->string('image');
            $table->string('vue')->nullable();
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
        Schema::dropIfExists('rondivos');
    }
}
