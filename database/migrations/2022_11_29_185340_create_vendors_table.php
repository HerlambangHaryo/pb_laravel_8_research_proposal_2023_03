<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVendorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vendors', function (Blueprint $table) {
            $table->id();
            $table->foreignId('vendor_type_id')->nullable(); 
            $table->string('nama'); 
            $table->string('alamat')->nullable(); 
            $table->string('kecamatan')->nullable(); 
            $table->string('kelurahan')->nullable(); 
            $table->string('kota')->nullable(); 
            $table->string('provinsi')->nullable(); 
            $table->string('negara')->nullable(); 
            $table->string('telepon')->nullable(); 
            $table->string('email')->nullable(); 
            $table->integer('kodepos')->nullable(); 
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
        Schema::dropIfExists('vendors');
    }
}
