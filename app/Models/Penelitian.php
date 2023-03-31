<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

use App\Models\Peneliti; 
use DB;

class Penelitian extends Model
{
    use HasFactory;
    use SoftDeletes;
    
    protected $softDelete = true;
    
    public function ketua()
    {         
        return $this->belongsTo(Peneliti::class,'id_ketua', 'id')
                ->withDefault([
                    'nama' => '',
                ]);
    }

    public function anggota_1()
    {         
        return $this->belongsTo(Peneliti::class,'id_anggota_1', 'id')
                ->withDefault([
                    'nama' => '',
                ]);
    }

    public function anggota_2()
    {         
        return $this->belongsTo(Peneliti::class,'id_anggota_2', 'id')
                ->withDefault([
                    'nama' => '',
                ]);
    }

    public function mahasiswa_1()
    {         
        return $this->belongsTo(Peneliti::class,'id_mahasiswa_1', 'id')
                ->withDefault([
                    'nama' => '',
                ]);
    }
    
    public function mahasiswa_2()
    {         
        return $this->belongsTo(Peneliti::class,'id_mahasiswa_2', 'id')
                ->withDefault([
                    'nama' => '',
                ]);
    }

    protected $fillable = [
        'id_ketua', 
        'id_anggota_1', 
        'id_anggota_2', 
        'id_mahasiswa_1', 
        'id_mahasiswa_2', 
        'judul', 
        'skema', 
        'tanggal', 
        'id_ketua_pusat_studi', 
        'id_dekan',  
    ];

    protected $hidden = ["deleted_at"];
}
