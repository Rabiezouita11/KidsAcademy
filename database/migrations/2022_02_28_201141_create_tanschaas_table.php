<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTanschaasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tanschaas', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('parent_id');
            $table->foreign('parent_id')->references('id')->on('users')->onDelete('cascade');
            $table->unsignedBigInteger('enseignant_id');
            $table->foreign('enseignant_id')->references('id')->on('admins')->onDelete('cascade');
            $table->string('تربية_اسلامية')->nullable();
            $table->string('تربية_تشكيلية')->nullable();
            $table->string('تربية_موسيقية')->nullable();
            $table->string('تربية_بدنية')->nullable();
            $table->string('m1')->nullable();
            $table->string('m2')->nullable();
            $table->string('m3')->nullable();
            $table->string('معدل_المجال')->nullable();
            $table->string('تاريخ')->nullable();
            $table->string('جغرافيا')->nullable();
            $table->string('تربية_مدنية')->nullable();
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
        Schema::dropIfExists('tanschaas');
    }
}
