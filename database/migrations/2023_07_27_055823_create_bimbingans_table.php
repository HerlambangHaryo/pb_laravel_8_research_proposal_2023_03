<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBimbingansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bimbingans', function (Blueprint $table) {
            $table->id();
            $table->char('mahasiswa_id', 36)->nullable();
            $table->char('dosen_id', 36)->nullable(); 

            $table->timestamp('tanggal')->nullable(); 
   
            $table->string('lokasi')->nullable();
            $table->tinyinteger('confirm_dosen')->nullable();
            $table->tinyinteger('status_bimbingan')->nullable();
            $table->tinyinteger('bimbingan_done')->nullable();
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
        Schema::dropIfExists('bimbingans');
    }
}
