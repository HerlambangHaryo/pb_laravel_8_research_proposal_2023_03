<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Dasar_teori extends Model
{
    use HasFactory;
    use SoftDeletes;
    
    protected $softDelete = true;
    
    protected $fillable = [
        'id_penelitian', 
        'teori', 
        'penjelasan', 
        'nomor_halaman',  
    ];

    protected $hidden = ["deleted_at"];
}
