<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bimbingan extends Model
{
    use HasFactory;

    /**
     * fillable
     *
     * @var array
     */
    protected $fillable = [
        'mahasiswa_id',
        'dosen_id',
        'lokasi',
        'status_bimbingan',
        'tanggal',
    ];

    public function dosen()
    {         
        return $this->belongsTo(Dosen::class, 'dosen_id', 'user_id' )
            ->withDefault([
                'nama' => "",
            ]);
    }

}
