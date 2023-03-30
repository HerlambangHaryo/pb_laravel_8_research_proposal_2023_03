<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model; 
use Illuminate\Database\Eloquent\SoftDeletes;
 
use App\Models\Peneliti; 
use DB;

class Karya_buku extends Model
{
    use HasFactory;
    use SoftDeletes;
     
    public function peneliti()
    {         
        return $this->belongsToMany(Peneliti::class,'penulis_karya_bukus', 'id_karya_buku', 'id_peneliti')
                        ->whereNull('penulis_karya_bukus.deleted_at');
    }
    
    protected $softDelete = true;
    
    protected $fillable = [ 
        'judul', 
        'penerbit', 
        'tahun', 
        'halaman', 
    ];

    protected $hidden = ["deleted_at"];
}
