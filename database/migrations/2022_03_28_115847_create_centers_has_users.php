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
        Schema::create('centers_has_users', function (Blueprint $table) {
            $table->unsignedBigInteger('centers_id_center');
            $table->foreign('centers_id_center')->references('id_center')->on('centers')->onDelete('cascade');
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
        Schema::dropIfExists('centers_has_users');
    }
};
