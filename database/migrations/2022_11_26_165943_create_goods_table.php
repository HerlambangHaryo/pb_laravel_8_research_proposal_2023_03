<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGoodsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('goods', function (Blueprint $table) {
            $table->id();
            $table->string('kode');
            $table->foreignId('storage_id')->nullable();;
            $table->string('nama');
            $table->string('brand')->nullable();
            $table->double('berat')->nullable(); 
            $table->string('kategori')->nullable();
            $table->text('deskripsi')->nullable(); 
            $table->string('foto')->nullable();
            $table->string('unit')->nullable();
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
        Schema::dropIfExists('goods');
    }
}
