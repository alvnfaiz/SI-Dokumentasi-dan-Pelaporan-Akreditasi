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
        Schema::create('aksesibilitas', function (Blueprint $table) {
            $table->id();
            $table->string('jenis_data');
            $table->string('secara_manual')->nullable();
            $table->string('tanpa_jrg')->nullable();
            $table->string('lan')->nullable();
            $table->string('wan');
            $table->unsignedBigInteger('id_pt_unit');
            $table->foreign('id_pt_unit')->references('pk_id_pt_unit')->on('pt_unit')->onDelete('restrict');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('aksesibilitas');
    }
};
