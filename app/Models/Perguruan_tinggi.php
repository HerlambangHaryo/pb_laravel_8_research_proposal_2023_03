<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Perguruan_tinggi extends Model
{
    use HasFactory;
    use SoftDeletes;
    
    protected $softDelete = true;
    
    protected $fillable = [
        'nama', 
        'alamat', 
        'kelurahan', 
        'kecamatan', 
        'kota', 
        'provinsi', 
        'kodepos', 
        'telepon',  
        'fax',  

        'kode',  
        'logo',  
    ];

    protected $hidden = ["deleted_at"];
}
