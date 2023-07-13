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
        Schema::create('class_promotions_has_users', function (Blueprint $table) {
            $table->unsignedBigInteger('class_promotions_id_promotion');
            $table->foreign('class_promotions_id_promotion')->references('id_promotion')->on('class_promotions')->onDelete('cascade');
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
        Schema::dropIfExists('class_promotions_has_users');
    }
};
