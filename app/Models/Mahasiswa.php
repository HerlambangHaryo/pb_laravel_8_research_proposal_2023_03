<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

use Illuminate\Support\Str;
use App\Models\Dosen; 

class Mahasiswa extends Model
{
    use HasFactory;

    protected $keyType = 'string';

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($model) {
            $model->{$model->getKeyName()} = Str::uuid()->toString();
        });
    }
    
    /**
     * fillable
     *
     * @var array
     */
    protected $fillable = [
        'user_id',
        'nama', 
        'dosen_pembimbing_1_id',
        'dosen_pembimbing_2_id',

        'judul_skripsi',
        'tahun_masuk',
        'semester_masuk',
        
        'repositori_skripsi', 
        'whatsapp', 
        
        'nrp',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array
     */
    protected $hidden = [
        'user_id', 
    ];
 
    public function dosen_1()
    {         
        return $this->belongsTo(Dosen::class, 'dosen_pembimbing_1_id', 'id' )
            ->withDefault([
                'nama' => "",
            ]);
    }

    public function dosen_2()
    {         
        return $this->belongsTo(Dosen::class, 'dosen_pembimbing_2_id', 'id' )
            ->withDefault([
                'nama' => "",
            ]);
    }
}
