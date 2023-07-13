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
        Schema::create('roles_has_permissions', function (Blueprint $table) {
            $table->unsignedBigInteger('roles_id_role');
            $table->foreign('roles_id_role')->references('id_role')->on('roles')->onDelete('cascade');
            $table->unsignedBigInteger('permissions_id_permission');
            $table->foreign('permissions_id_permission')->references('id_permission')->on('permissions')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('roles_has_permissions');
    }
};
