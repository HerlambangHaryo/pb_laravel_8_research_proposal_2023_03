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
