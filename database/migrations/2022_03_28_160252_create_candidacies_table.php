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
        Schema::create('candidacies', function (Blueprint $table) {
            $table->id('id_candidacy');
            $table->string('resume', 255);
            $table->string('cover_letter', 255)->nullable();
            $table->integer('step');
            $table->string('validation_sheet', 255)->nullable();
            $table->string('internship_contract', 255)->nullable();
            $table->timestamps();
            $table->softDeletes('deleted_at');
            $table->unsignedBigInteger('internships_offer_id_internship_offer');
            $table->foreign('internships_offer_id_internship_offer')->references('id_internship_offer')->on('internship_offers')->onDelete('cascade');
            $table->unsignedBigInteger('users_id_user');
            $table->foreign('users_id_user')->references('id_user')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('candidacies');
    }
};
