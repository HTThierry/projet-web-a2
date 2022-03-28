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
        Schema::create('users_has_permissions', function (Blueprint $table) {
            $table->unsignedBigInteger('users_id_user');
            $table->foreign('users_id_user')->references('id_user')->on('users')->onDelete('cascade');
            $table->unsignedBigInteger('permissions_id_permission');
            $table->foreign('permissions_id_permission')->references('id_permission')->on('permissions')->onDelete('cascade');
            $table->Integer('to_user');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users_has_permissions');
    }
};
