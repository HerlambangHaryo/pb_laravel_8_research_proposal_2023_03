<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Karya_buku extends Model
{
    use HasFactory;
    use SoftDeletes;
    
    protected $softDelete = true;
    
    protected $fillable = [
        'id_peneliti', 
        'judul', 
        'penerbit', 
        'tahun', 
        'halaman', 
    ];

    protected $hidden = ["deleted_at"];
}
