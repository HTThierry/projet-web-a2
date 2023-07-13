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
        Schema::create('ratings', function (Blueprint $table) {
            $table->id('id_rating');
            $table->integer('scoring');
            $table->longText('feedback')->nullable();
            $table->timestamps();
            $table->softDeletes('deleted_at');
            $table->unsignedBigInteger('enterprises_id_enterprise');
            $table->foreign('enterprises_id_enterprise')->references('id_enterprise')->on('enterprises')->onDelete('cascade');
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
        Schema::dropIfExists('ratings');
    }
};
