<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Penelitian_terdahulu extends Model
{
    use HasFactory;
    use SoftDeletes;
    
    protected $softDelete = true;
    
    protected $fillable = [
        'id_penelitian', 
        'subjek', 
        'penjelasan', 
        'nomor_halaman',  
    ];

    protected $hidden = ["deleted_at"];
}
