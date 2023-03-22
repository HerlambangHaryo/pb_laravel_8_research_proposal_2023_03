<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Pengalaman_pengabdian extends Model
{
    use HasFactory;
    use SoftDeletes;
    
    protected $softDelete = true;
    
    protected $fillable = [
        'id_peneliti', 
        'judul', 
        'tahun', 
        'sumber_pendanaan', 
        'jumlah_pendanaan', 
    ];

    protected $hidden = ["deleted_at"];
}
