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
        Schema::create('users', function (Blueprint $table) {
            $table->id('id_user');
            $table->string('first_name', 45);
            $table->string('last_name', 45);
            $table->string('email', 90)->unique();
            $table->string('phone_number',10)->nullable()->unique();
            $table->string('login', 45)->unique();
            $table->string('password', 255);
            $table->timestamps();
            $table->softDeletes('deleted_at');
            $table->unsignedBigInteger('roles_id_role');
            $table->foreign('roles_id_role')->references('id_role')->on('roles')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
};
