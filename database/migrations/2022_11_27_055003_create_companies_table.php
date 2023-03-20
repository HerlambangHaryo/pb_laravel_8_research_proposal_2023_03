<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCompaniesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('companies', function (Blueprint $table) {
            $table->id();
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
            $table->string('npwp')->nullable(); 
            $table->string('logo')->nullable(); 
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
        Schema::dropIfExists('companies');
    }
}
