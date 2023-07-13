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
        Schema::create('enterprises_has_business_sectors', function (Blueprint $table) {
            $table->unsignedBigInteger('enterprises');
            $table->foreign('enterprises')->references('id_enterprise')->on('enterprises')->onDelete('cascade');
            $table->unsignedBigInteger('business_sectors');
            $table->foreign('business_sectors')->references('id_business_sector')->on('business_sectors')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('enterprises_has_business_sectors');
    }
};
