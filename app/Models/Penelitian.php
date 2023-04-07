<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

use App\Models\Peneliti; 
use DB;

class Penelitian extends Model
{
    use HasFactory;
    use SoftDeletes;
    
    protected $softDelete = true; 
 
    public function publikasi_artikel()
    {
        return $this->belongsToMany(publikasi_artikel::class, 'daftar_pustakas', 'id_penelitian', 'id_publikasi_artikel')
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
        'tanggal', 
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
        
        'lembar_pengesahan',

        'kata_kunci_1',
        'kata_kunci_2',
        'kata_kunci_3',
        'kata_kunci_4',
        'kata_kunci_5',
    ];

    protected $hidden = ["deleted_at"];
}
