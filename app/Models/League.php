<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class League extends Model
{
    use HasFactory;
    use SoftDeletes;
    
    protected $softDelete = true;
    
    protected $fillable = [
        'country',
        'leagueapi_id',
        'name',
        'type',
        'league_fixture_updated_at',
        
        'bookmakersapi_id',
        'bookmakers_name',

        'perc_end_league',
        'perc_end_country',
        'perc_one_league',
        'perc_one_country',


        'tanggal_update_fixtures'
    ];

    protected $hidden = ["deleted_at"];
}
