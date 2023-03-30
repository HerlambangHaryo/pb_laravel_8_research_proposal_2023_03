<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
 
use App\Models\Peneliti; 
use App\Models\Karya_buku; 
use DB;

class Penulis_karya_buku extends Model
{
    use HasFactory;
    use SoftDeletes;
    
    protected $softDelete = true;

    public function peneliti()
    {         
        return $this->belongsTo(Peneliti::class,'id_peneliti', 'id')
                ->withDefault([
                    'nama' => '',
                ]);
    }

    public function karya_buku()
    {         
        return $this->belongsTo(Karya_buku::class,'id_karya_buku', 'id')
                ->withDefault([
                    'nama' => '',
                ]);
    }
    
    protected $fillable = [
        'id_peneliti', 
        'id_karya_buku',  
    ];

    protected $hidden = ["deleted_at"];
}
