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
        Schema::create('internships_offer_has_operating_site', function (Blueprint $table) {
            $table->unsignedBigInteger('internships_offer');
            $table->foreign('internships_offer')->references('id_internship_offer')->on('internship_offers')->onDelete('cascade');
            $table->unsignedBigInteger('operating_site');
            $table->foreign('operating_site')->references('id_operating_site')->on('operating_sites')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('internships_offer_has_operating_site');
    }
};
