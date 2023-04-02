<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Anggaran_penelitian extends Model
{
    use HasFactory;
    use SoftDeletes;
    
    protected $softDelete = true;
    
    protected $fillable = [
        'id_penelitian', 
        'kategori', 
        'kegiatan', 
        'justifikasi_anggaran', 
        'kuantitas', 
        'harga', 
    ];

    protected $hidden = ["deleted_at"];
}
