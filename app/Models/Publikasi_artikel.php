<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
 
use App\Models\Peneliti; 
use DB;

class Publikasi_artikel extends Model
{
    use HasFactory;
    use SoftDeletes;
    
    protected $softDelete = true;
     
    public function peneliti()
    {         
        return $this->belongsToMany(Peneliti::class,'penulis_publikasi_artikels', 'id_publikasi_artikel', 'id_peneliti')
                        ->whereNull('penulis_publikasi_artikels.deleted_at');
    }

    protected $fillable = [ 
        'judul', 
        'jurnal', 
        'volume', 
        'nomor', 
        'tahun', 
        'url', 
        'sitasi', 
        'tag_link', 
        'daftar_pustaka', 
    ];

    protected $hidden = ["deleted_at"];
}
