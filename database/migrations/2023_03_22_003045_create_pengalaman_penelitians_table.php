<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePengalamanPenelitiansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pengalaman_penelitians', function (Blueprint $table) {
            $table->id();
            $table->integer('id_peneliti');
            $table->string('judul');
            $table->year('tahun');
            $table->string('sumber_pendanaan');
            $table->bigInteger('jumlah_pendanaan');
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
        Schema::dropIfExists('pengalaman_penelitians');
    }
}
