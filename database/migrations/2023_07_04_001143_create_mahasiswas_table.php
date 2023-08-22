<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMahasiswasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mahasiswas', function (Blueprint $table) {
            // $table->id();
            $table->uuid('id')->primary()->default(DB::raw('uuid()')); 

            $table->char('user_id', 36);

            $table->string('nama')->nullable();

            $table->char('dosen_pembimbing_1_id', 36)->nullable();
            $table->char('dosen_pembimbing_2_id', 36)->nullable();

            
            $table->string('judul_skripsi')->nullable();
            $table->year('angkatan')->nullable();
            $table->tinyinteger('semester')->nullable();
 
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
        Schema::dropIfExists('mahasiswas');
    }
}
