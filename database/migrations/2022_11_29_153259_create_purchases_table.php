<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePurchasesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('purchases', function (Blueprint $table) {
            $table->id();
            $table->string('nomor');  
            $table->string('reference')->nullable();  
            $table->string('tanggal');  
            $table->string('status');  
            $table->foreignId('vendor_id');
            $table->foreignId('receive_in_id');
            $table->foreignId('pic_id');
            $table->text('contact_person')->nullable();
            $table->date('tanggal_loading')->nullable(); 
            $table->date('tanggal_delivery')->nullable(); 
            $table->date('tanggal_jatuh_tempo')->nullable(); 
            $table->foreignId('terms_id');
            $table->text('keterangan')->nullable();
            $table->text('syarat_ketentuan')->nullable();
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
        Schema::dropIfExists('purchases');
    }
}
