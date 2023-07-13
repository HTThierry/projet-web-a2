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
        Schema::create('internship_offers', function (Blueprint $table) {
            $table->id('id_internship_offer');
            $table->string('title', 90);
            $table->longText('description');
            $table->integer('duration');
            $table->string('unit', 45);
            $table->float('remuneration_base', 6, 2);
            $table->integer('number_of_place');
            $table->timestamps();
            $table->softDeletes('deleted_at');
            $table->unsignedBigInteger('enterprises_id_enterprise');
            $table->foreign('enterprises_id_enterprise')->references('id_enterprise')->on('enterprises')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('internship_offers');
    }
};
