<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('nom');
            $table->string('email')->unique();
            $table->string('image');
            $table->string('classe');
            $table->string('date_de_naissance');
            $table->string('lieu_de_naissance');
            $table->string('telephone_principale');
            $table->string('telephone_secondaire');
            $table->string('date_absence')->nullable();
            $table->string('etat')->nullable();
            $table->timestamp('last_seen')->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
