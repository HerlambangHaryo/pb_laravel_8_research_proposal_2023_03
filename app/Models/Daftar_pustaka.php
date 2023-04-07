<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Daftar_pustaka extends Model
{
    use HasFactory;
    use SoftDeletes;
     

    protected $softDelete = true;
    
    protected $fillable = [
        'id_publikasi_artikel', 
        'id_penelitian',  
    ];

    protected $hidden = ["deleted_at"];
}
