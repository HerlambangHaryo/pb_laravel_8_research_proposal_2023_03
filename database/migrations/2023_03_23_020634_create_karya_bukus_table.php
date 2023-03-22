<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKaryaBukusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('karya_bukus', function (Blueprint $table) {
            $table->id();
            $table->integer('id_peneliti');
            $table->string('judul');
            $table->string('penerbit')->nullable(); 
            $table->year('tahun')->nullable();
            $table->integer('halaman')->nullable();
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
        Schema::dropIfExists('karya_bukus');
    }
}
