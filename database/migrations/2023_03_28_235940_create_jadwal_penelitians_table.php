<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJadwalPenelitiansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jadwal_penelitians', function (Blueprint $table) {
            $table->id();
            $table->integer('id_penelitian');
            $table->tinyInteger('urutan');
            $table->string('kegiatan');
            $table->string('bulan')->nullable();
            $table->string('indikator_capaian')->nullable();  
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
        Schema::dropIfExists('jadwal_penelitians');
    }
}
