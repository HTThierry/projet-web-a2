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
        Schema::create('operating_sites', function (Blueprint $table) {
            $table->id('id_operating_site');
            $table->string('title', 90);
            $table->longText('description')->nullable();
            $table->string('picture', 255)->nullable();
            $table->string('country', 90);
            $table->string('city', 90);
            $table->string('address', 255);
            $table->integer('contact_number')->nullable();
            $table->timestamps();
            $table->softDeletes('deleted_at');
            $table->unsignedBigInteger('enterprises_id_enterprise');
            $table->foreign('enterprises_id_enterprise')->references('id_enterprise')->on('enterprises')->onDelete('cascade');
            $table->unsignedBigInteger('countries_id_country');
            $table->foreign('countries_id_country')->references('id_country')->on('countries')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('operating_sites');
    }
};
