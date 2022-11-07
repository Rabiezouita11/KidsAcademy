<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFrancaisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('francais', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('parent_id');
            $table->foreign('parent_id')->references('id')->on('users')->onDelete('cascade');
            $table->unsignedBigInteger('enseignant_id');
            $table->foreign('enseignant_id')->references('id')->on('admins')->onDelete('cascade');
            $table->string('expr_orale')->nullable();
            $table->string('lecture')->nullable();
            $table->string('prod_écrite')->nullable();
            $table->string('الانقليزية')->nullable();
            $table->string('m1')->nullable();
            $table->string('m2')->nullable();
            $table->string('m3')->nullable();
            $table->string('معدل_المجال')->nullable();
            $table->string('semstre')->nullable();
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
        Schema::dropIfExists('francais');
    }
}
