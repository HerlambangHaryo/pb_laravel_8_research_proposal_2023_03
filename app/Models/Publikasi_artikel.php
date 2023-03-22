<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Publikasi_artikel extends Model
{
    use HasFactory;
    use SoftDeletes;
    
    protected $softDelete = true;
    
    protected $fillable = [
        'id_peneliti', 
        'judul', 
        'jurnal', 
        'volume', 
        'nomor', 
        'tahun', 
        'url', 
    ];

    protected $hidden = ["deleted_at"];
}
