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
        Schema::create('bidang_kerja_lulusan', function (Blueprint $table) {
            $table->id();
            $table->integer('tahun_lulus');
            $table->integer('jumlah_lulusan');
            $table->integer('lulusan_terlacak');
            $table->integer('bidang_infokom');
            $table->integer('bidang_noninfokom');
            $table->integer('internasional');
            $table->integer('nasional');
            $table->integer('wirausaha');
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
        Schema::dropIfExists('bidang_kerja_lulusan');
    }
};
