<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePemakalahSeminarsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pemakalah_seminars', function (Blueprint $table) {
            $table->id();
            $table->integer('id_peneliti');
            $table->string('judul');
            $table->string('seminar')->nullable();
            $table->date('tanggal')->nullable();
            $table->string('tempat')->nullable(); 
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
        Schema::dropIfExists('pemakalah_seminars');
    }
}
