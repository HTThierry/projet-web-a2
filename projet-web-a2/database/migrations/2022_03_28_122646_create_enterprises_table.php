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
        Schema::create('enterprises', function (Blueprint $table) {
            $table->id('id_enterprise');
            $table->string('title', 255);
            $table->longText('description')->nullable();
            $table->integer('number_of_cesi_students')->nullable();
            $table->integer('pilot_confidence')->nullable();
            $table->timestamps();
            $table->softDeletes('deleted_at');
            $table->string('logo',255);
            $table->string('headquarter', 255);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('enterprises');
    }
};
