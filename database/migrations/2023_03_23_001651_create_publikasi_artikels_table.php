<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePublikasiArtikelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('publikasi_artikels', function (Blueprint $table) {
            $table->id();
            $table->integer('id_peneliti');
            $table->string('judul');
            $table->string('jurnal')->nullable();
            $table->string('volume')->nullable();
            $table->string('nomor')->nullable();
            $table->year('tahun')->nullable();
            $table->text('url')->nullable(); 
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
        Schema::dropIfExists('publikasi_artikels');
    }
}
