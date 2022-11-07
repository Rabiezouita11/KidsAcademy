<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAl3ouloumsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('al3ouloums', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('parent_id');
            $table->foreign('parent_id')->references('id')->on('users')->onDelete('cascade');
            $table->unsignedBigInteger('enseignant_id');
            $table->foreign('enseignant_id')->references('id')->on('admins')->onDelete('cascade');
            $table->string('رياضيات')->nullable();
            $table->string('m1')->nullable();
            $table->string('m2')->nullable();
            $table->string('m3')->nullable();
            $table->string('الايقاظ_العلمي')->nullable();
            $table->string('تربية_تكنولوجية')->nullable();
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
        Schema::dropIfExists('al3ouloums');
    }
}
