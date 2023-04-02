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
    ];

    protected $hidden = ["deleted_at"];
}
