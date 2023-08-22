<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

use App\Models\Peneliti; 
use App\Models\Publikasi_artikel; 
use App\Models\Jadwal_penelitian; 
use App\Models\Anggaran_penelitian; 
use DB;

class Penelitian extends Model
{
    use HasFactory;
    use SoftDeletes;
    
    protected $softDelete = true; 
 
    public function dasar_teori()
    {         
        return $this->hasMany(dasar_teori::class,'id_penelitian', 'id')
                ->orderBy('id') ;
    }

    public function penelitian_terdahulu()
    {         
        return $this->hasMany(penelitian_terdahulu::class,'id_penelitian', 'id')
                ->orderBy('id') ;
    }

    public function publikasi_artikel()
    {
        return $this->belongsToMany(Publikasi_artikel::class, 'daftar_pustakas', 'id_penelitian', 'id_publikasi_artikel')
                    ->orderBy('publikasi_artikels.daftar_pustaka');
    }

    public function jadwal_penelitian()
    {         
        return $this->hasMany(jadwal_penelitian::class,'id_penelitian', 'id')
                ->orderBy('urutan') ;
    }
     
    public function anggaran_penelitian()
    {         
        return $this->hasMany(anggaran_penelitian::class,'id_penelitian', 'id') ;
    }

    public function ketua()
    {         
        return $this->belongsTo(Peneliti::class,'id_ketua', 'id')
                ->withDefault([
                    'nama' => '',
                ]);
    }

    public function anggota_1()
    {         
        return $this->belongsTo(Peneliti::class,'id_anggota_1', 'id')
                ->withDefault([
                    'nama' => '',
                ]);
    }

    public function anggota_2()
    {         
        return $this->belongsTo(Peneliti::class,'id_anggota_2', 'id')
                ->withDefault([
                    'nama' => '',
                ]);
    }

    public function mahasiswa_1()
    {         
        return $this->belongsTo(Peneliti::class,'id_mahasiswa_1', 'id')
                ->withDefault([
                    'nama' => '',
                ]);
    }
    
    public function mahasiswa_2()
    {         
        return $this->belongsTo(Peneliti::class,'id_mahasiswa_2', 'id')
                ->withDefault([
                    'nama' => '',
                ]);
    }

    protected $fillable = [
        'id_ketua', 
        'id_anggota_1', 
        'id_anggota_2', 
        'id_mahasiswa_1', 
        'id_mahasiswa_2', 
        'judul', 
        'skema', 

        'tanggal_pelaksanaan', 
        'waktu_pelaksanaan', 
        'tanggal_usulan', 

        'id_ketua_pusat_studi', 
        'id_dekan',  

        'ringkasan_latar_belakang',
        'ringkasan_tujuan',
        'ringkasan_tahapan_metode',
        'ringkasan_target_luaran',
        'ringkasan_capaian_iku',
        'ringkasan_capaian_tkt',
        
        'latar_belakang_umum',
        'latar_belakang_permasalahan',
        'latar_belakang_tujuan',
        'latar_belakang_urgensi',
        'latar_belakang_terkait_dengan_skema',
        
        'tinjauan_pustaka_roadmap',

        'tinjauan_pustaka_state_of_the_art',
        'tinjauan_pustaka_sebelum',
        'tinjauan_pustaka_setelah',
        'tinjauan_pustaka_umum',

        'metode_uraian',
        'metode_gambar',
        'metode_detail',
        'metode_luaran',
        'metode_capaian',
        'metode_tugas_pengusul',

        

        'ringkasan_latar_belakang_catatan', 
        'ringkasan_tujuan_catatan', 
        'ringkasan_tahapan_metode_catatan', 
        'ringkasan_target_luaran_catatan', 
        'ringkasan_capaian_iku_catatan', 
        'ringkasan_capaian_tkt_catatan', 
        
        'latar_belakang_umum_catatan', 
        'latar_belakang_permasalahan_catatan', 
        'latar_belakang_tujuan_catatan', 
        'latar_belakang_urgensi_catatan', 
        'latar_belakang_terkait_dengan_skema_catatan', 
        
        'tinjauan_pustaka_state_of_the_art_catatan', 
        'tinjauan_pustaka_sebelum_catatan', 
        'tinjauan_pustaka_setelah_catatan', 
        'tinjauan_pustaka_umum_catatan', 

        'metode_uraian_catatan', 
        'metode_gambar_catatan', 
        'metode_detail_catatan', 
        'metode_luaran_catatan', 
        'metode_capaian_catatan', 
        'metode_tugas_pengusul_catatan',
        
        'paragraf_jadwal_penelitian',
        'paragraf_uraian_tugas',

        'lembar_pengesahan',

        'kata_kunci_1',
        'kata_kunci_2',
        'kata_kunci_3',
        'kata_kunci_4',
        'kata_kunci_5',
 
        'uraian_tugas_ketua', 
        'uraian_tugas_anggota_1', 
        'uraian_tugas_anggota_2', 
        'uraian_tugas_mahasiswa_1', 
        'uraian_tugas_mahasiswa_2',  
                    
        'surat_pernyataan_ketua', 
        'surat_pernyataan_anggota_1', 
        'surat_pernyataan_anggota_2', 
        'surat_pernyataan_mahasiswa_1', 
        'surat_pernyataan_mahasiswa_2',

        'surat_pernyataan_kesanggupan_ketua', 
        'surat_pernyataan_kesanggupan_anggota_1', 
        'surat_pernyataan_kesanggupan_anggota_2', 
        'surat_pernyataan_kesanggupan_mahasiswa_1', 
        'surat_pernyataan_kesanggupan_mahasiswa_2',

        'nomor_halaman_halaman_pengesahan',
        'nomor_halaman_daftar_isi',
        'nomor_halaman_ringkasan',
        'nomor_halaman_latar_belakang',
        'nomor_halaman_latar_belakang_masalah',
        'nomor_halaman_rumusan_masalah',
        'nomor_halaman_tujuan_penelitian',
        'nomor_halaman_target_luaran',
        'nomor_halaman_tinjauan_pustaka',
        'nomor_halaman_penelitian_terdahulu',
        'nomor_halaman_roadmap_penelitian',
        'nomor_halaman_dasar_teori',
        'nomor_halaman_metode_penelitian',
        'nomor_halaman_pembagian_tugas_tim_pengusul',
        'nomor_halaman_jadwal_penelitian',
        'nomor_halaman_daftar_pustaka',
        'nomor_halaman_lampiran_1',
        'nomor_halaman_lampiran_2',
        'nomor_halaman_lampiran_3',
        'nomor_halaman_lampiran_4',
        'nomor_halaman_lampiran_5',
        'nomor_halaman_lampiran_6',
        'nomor_halaman_lampiran_7',
    ];

    protected $hidden = ["deleted_at"];
}
