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
        Schema::create('user_has_intership_offers', function (Blueprint $table) {
            $table->unsignedBigInteger('users');
            $table->foreign('users')->references('id_user')->on('users')->onDelete('cascade');
            $table->unsignedBigInteger('internships_offers');
            $table->foreign('internships_offers')->references('id_internship_offer')->on('internship_offers')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user_has_intership_offers');
    }
};
