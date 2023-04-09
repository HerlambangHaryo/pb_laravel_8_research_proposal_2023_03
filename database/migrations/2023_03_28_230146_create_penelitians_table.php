<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePenelitiansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('penelitians', function (Blueprint $table) {
            $table->id();
            $table->integer('id_ketua');
            $table->integer('id_anggota_1');
            $table->integer('id_anggota_2');
            $table->integer('id_mahasiswa_1');
            $table->integer('id_mahasiswa_2')->nullable();
            $table->string('judul');
            $table->string('skema')->nullable();

            $table->date('tanggal_pelaksanaan')->nullable();
            $table->tinyInteger('waktu_pelaksanaan')->nullable();
            $table->date('tanggal_usulan')->nullable();

            $table->integer('id_ketua_pusat_studi')->nullable();
            $table->integer('id_dekan')->nullable();  

            $table->text('ringkasan_latar_belakang')->nullable();  
            $table->text('ringkasan_tujuan')->nullable();  
            $table->text('ringkasan_tahapan_metode')->nullable();  
            $table->text('ringkasan_target_luaran')->nullable();  
            $table->text('ringkasan_capaian_iku')->nullable();  
            $table->text('ringkasan_capaian_tkt')->nullable();  
            
            $table->text('latar_belakang_umum')->nullable();  
            $table->text('latar_belakang_permasalahan')->nullable();  
            $table->text('latar_belakang_tujuan')->nullable();  
            $table->text('latar_belakang_urgensi')->nullable();  
            $table->text('latar_belakang_terkait_dengan_skema')->nullable();  
            
            $table->text('tinjauan_pustaka_roadmap')->nullable();  

            $table->text('tinjauan_pustaka_state_of_the_art')->nullable();  
            $table->text('tinjauan_pustaka_sebelum')->nullable();  
            $table->text('tinjauan_pustaka_setelah')->nullable();  
            $table->text('tinjauan_pustaka_umum')->nullable();  

            $table->text('metode_uraian')->nullable();  
            $table->text('metode_gambar')->nullable();  
            $table->text('metode_detail')->nullable();  
            $table->text('metode_luaran')->nullable();  
            $table->text('metode_capaian')->nullable();  
            $table->text('metode_tugas_pengusul')->nullable(); 
            
            $table->text('ringkasan_latar_belakang_catatan')->nullable();  
            $table->text('ringkasan_tujuan_catatan')->nullable();  
            $table->text('ringkasan_tahapan_metode_catatan')->nullable();  
            $table->text('ringkasan_target_luaran_catatan')->nullable();  
            $table->text('ringkasan_capaian_iku_catatan')->nullable();  
            $table->text('ringkasan_capaian_tkt_catatan')->nullable();  
            
            $table->text('latar_belakang_umum_catatan')->nullable();  
            $table->text('latar_belakang_permasalahan_catatan')->nullable();  
            $table->text('latar_belakang_tujuan_catatan')->nullable();  
            $table->text('latar_belakang_urgensi_catatan')->nullable();  
            $table->text('latar_belakang_terkait_dengan_skema_catatan')->nullable();  
            
            $table->text('tinjauan_pustaka_state_of_the_art_catatan')->nullable();  
            $table->text('tinjauan_pustaka_sebelum_catatan')->nullable();  
            $table->text('tinjauan_pustaka_setelah_catatan')->nullable();  
            $table->text('tinjauan_pustaka_umum_catatan')->nullable();  

            $table->text('metode_uraian_catatan')->nullable();  
            $table->text('metode_gambar_catatan')->nullable();  
            $table->text('metode_detail_catatan')->nullable();  
            $table->text('metode_luaran_catatan')->nullable();  
            $table->text('metode_capaian_catatan')->nullable();  
            $table->text('metode_tugas_pengusul_catatan')->nullable(); 
            
            $table->text('paragraf_jadwal_penelitian')->nullable();  

            $table->text('lembar_pengesahan')->nullable();  

            $table->string('kata_kunci_1')->nullable();
            $table->string('kata_kunci_2')->nullable();
            $table->string('kata_kunci_3')->nullable();
            $table->string('kata_kunci_4')->nullable();
            $table->string('kata_kunci_5')->nullable();
            
            $table->text('uraian_tugas_ketua')->nullable();  
            $table->text('uraian_tugas_anggota_1')->nullable();  
            $table->text('uraian_tugas_anggota_2')->nullable();  
            $table->text('uraian_tugas_mahasiswa_1')->nullable();  
            $table->text('uraian_tugas_mahasiswa_2')->nullable();   
            
            $table->text('surat_pernyataan_ketua')->nullable();  
            $table->text('surat_pernyataan_anggota_1')->nullable();  
            $table->text('surat_pernyataan_anggota_2')->nullable();  
            $table->text('surat_pernyataan_mahasiswa_1')->nullable();  
            $table->text('surat_pernyataan_mahasiswa_2')->nullable();   

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
        Schema::dropIfExists('penelitians');
    }
}
