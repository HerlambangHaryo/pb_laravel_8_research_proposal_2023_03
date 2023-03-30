<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
 
use App\Models\Peneliti; 
use App\Models\Publikasi_artikel; 
use DB;

class Penulis_publikasi_artikel extends Model
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

    public function publikasi_artikel()
    {         
        return $this->belongsTo(Publikasi_artikel::class,'id_publikasi_artikel', 'id')
                ->withDefault([
                    'nama' => '',
                ]);
    }
    
    protected $fillable = [
        'id_peneliti', 
        'id_publikasi_artikel',  
    ];

    protected $hidden = ["deleted_at"];
}
