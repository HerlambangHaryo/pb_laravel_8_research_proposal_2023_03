<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

use App\Models\Perguruan_tinggi; 
use DB;

class Peneliti extends Model
{
    use HasFactory;
    use SoftDeletes;
    
    protected $softDelete = true;
    
    public function perguruan_tinggi()
    {         
        return $this->belongsTo(Perguruan_tinggi::class,'id_perguruan_tinggi', 'id')
                ->withDefault([
                    'nama' => '',
                ]);
    }
    
    protected $fillable = [
        'nama',
        'jenis_kelamin',
        'jabatan_fungsional',
        'nip_nik_lainnya',
        'nidn',
        'id_sinta_google_scholar',
        'url',
        'id_scopus',
        'id_orchid',
        'tempat_lahir',
        'tanggal_lahir',
        'email',
        'telepon', 
        'lulusan_s1',
        'lulusan_s2',
        'lulusan_s3',
        's1_perguruan_tinggi',
        's1_bidang_ilmu',
        's1_tahun_masuk',
        's1_tahun_lulus',
        's1_judul',
        's1_pembimbing',
        's2_perguruan_tinggi',
        's2_bidang_ilmu',
        's2_tahun_masuk',
        's2_tahun_lulus',
        's2_judul',
        's2_pembimbing',
        's3_perguruan_tinggi',
        's3_bidang_ilmu',
        's3_tahun_masuk',
        's3_tahun_lulus',
        's3_judul',
        's3_pembimbing', 
        'id_perguruan_tinggi'
    ];

    protected $hidden = ["deleted_at"];
}
