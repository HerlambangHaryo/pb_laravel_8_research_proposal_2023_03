<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Jadwal_penelitian extends Model
{
    use HasFactory;
    use SoftDeletes;
    
    protected $softDelete = true;
    
    protected $fillable = [
        'id_penelitian', 
        'kegiatan', 
        'indikator_capaian', 
        'urutan', 
        'bulan', 
        'penjelasan', 
        'nomor_halaman'
    ];

    protected $hidden = ["deleted_at"];
}
