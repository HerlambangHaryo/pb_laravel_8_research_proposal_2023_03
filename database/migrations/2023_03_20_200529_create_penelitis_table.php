<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePenelitisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('penelitis', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('jenis_kelamin')->nullable();
            $table->string('jabatan_fungsional')->nullable();
            $table->string('nip_nik_lainnya')->nullable();
            $table->string('nidn')->nullable();
            
            $table->string('id_sinta_google_scholar')->nullable();
            $table->text('url')->nullable();
            $table->string('id_scopus')->nullable();
            $table->string('id_orchid')->nullable();


            $table->string('tempat_lahir')->nullable();
            $table->string('tanggal_lahir')->nullable();
            $table->string('email')->nullable();
            $table->string('telepon')->nullable();
            $table->string('alamat_kantor')->nullable();
            $table->string('telepon_kantor')->nullable();

            $table->string('lulusan_s1')->nullable();
            $table->string('lulusan_s2')->nullable();
            $table->string('lulusan_s3')->nullable(); 

            $table->string('s1_perguruan_tinggi')->nullable(); 
            $table->string('s1_bidang_ilmu')->nullable(); 
            $table->string('s1_tahun_masuk')->nullable(); 
            $table->string('s1_tahun_lulus')->nullable(); 
            $table->string('s1_judul')->nullable(); 
            $table->string('s1_pembimbing')->nullable(); 

            $table->string('s2_perguruan_tinggi')->nullable(); 
            $table->string('s2_bidang_ilmu')->nullable(); 
            $table->year('s2_tahun_masuk')->nullable(); 
            $table->year('s2_tahun_lulus')->nullable(); 
            $table->string('s2_judul')->nullable(); 
            $table->string('s2_pembimbing')->nullable(); 

            $table->string('s3_perguruan_tinggi')->nullable(); 
            $table->string('s3_bidang_ilmu')->nullable(); 
            $table->year('s3_tahun_masuk')->nullable(); 
            $table->year('s3_tahun_lulus')->nullable(); 
            $table->string('s3_judul')->nullable(); 
            $table->string('s3_pembimbing')->nullable(); 

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
        Schema::dropIfExists('penelitis');
    }
}
