<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePengalamanPengabdiansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pengalaman_pengabdians', function (Blueprint $table) {
            $table->id();
            $table->integer('id_peneliti');
            $table->string('judul');
            $table->year('tahun');
            $table->string('sumber_pendanaan')->nullable();
            $table->bigInteger('jumlah_pendanaan')->nullable();
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
        Schema::dropIfExists('pengalaman_pengabdians');
    }
}
