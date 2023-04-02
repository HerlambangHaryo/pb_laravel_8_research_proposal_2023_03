<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAnggaranPenelitiansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('anggaran_penelitians', function (Blueprint $table) {
            $table->id();
            $table->integer('id_penelitian');
            $table->integer('id_kategori_anggaran');
            $table->string('kegiatan'); 
            $table->string('justifikasi_pemakaian')->nullable(); 
            $table->TinyInteger('kuantitas');
            $table->integer('harga');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('anggaran_penelitians');
    }
}
