<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLangaearabesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('langaearabes', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('parent_id');
            $table->foreign('parent_id')->references('id')->on('users')->onDelete('cascade');
            $table->unsignedBigInteger('enseignant_id');
            $table->foreign('enseignant_id')->references('id')->on('admins')->onDelete('cascade');
            $table->string('تواصل_شفوي')->nullable();
            $table->string('قراءة')->nullable();
            $table->string('الخط')->nullable();
            $table->string('m1')->nullable();
            $table->string('m2')->nullable();
            $table->string('m3')->nullable();
            $table->string('قواعد_للغة')->nullable();
            $table->string('انتاج_كتابي')->nullable();
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
        Schema::dropIfExists('langaearabes');
    }
}
