<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDasarTeorisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dasar_teoris', function (Blueprint $table) {
            $table->id();
            $table->integer('id_penelitian'); 
            $table->string('teori'); 
            $table->string('penjelasan')->nullable(); 
            $table->string('nomor_halaman')->nullable();  
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
        Schema::dropIfExists('dasar_teoris');
    }
}
