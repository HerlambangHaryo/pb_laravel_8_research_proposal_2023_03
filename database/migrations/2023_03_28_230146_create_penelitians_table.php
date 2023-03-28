<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePenelitiansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('penelitians', function (Blueprint $table) {
            $table->id();
            $table->integer('id_ketua');
            $table->integer('id_anggota_1');
            $table->integer('id_anggota_2');
            $table->integer('id_mahasiswa_1');
            $table->integer('id_mahasiswa_2')->nullable();
            $table->string('judul');
            $table->string('skema')->nullable();
            $table->year('tahun')->nullable();
            $table->integer('id_ketua_pusat_studi')->nullable();
            $table->integer('id_dekan')->nullable();  
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
        Schema::dropIfExists('penelitians');
    }
}
