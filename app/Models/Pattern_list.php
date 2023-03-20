<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pattern_list extends Model
{
    use HasFactory;

    public function byLeagueapi_id()
    {
        return $this->belongsTo(League::class, 'leagueapi_id', 'leagueapi_id');
    }

    public static function byPatternlists($league_country, $leagueapi_id, $pre_ah_pattern, $pre_gou_pattern, $end_ah_pattern, $end_gou_pattern, $status)
    {   
        if($status == "mirror")
        {
            return Pattern_list::where('country', '=', $league_country)
                    ->where('leagueapi_id', '=', $leagueapi_id)

                    ->where('pre_ah_pattern_mirror', '=', $pre_ah_pattern)
                    ->where('pre_gou_pattern', '=', $pre_gou_pattern)
                    
                    ->where('end_ah_pattern_mirror', '=', $end_ah_pattern)
                    ->where('end_gou_pattern', '=', $end_gou_pattern)
                    ->first();   
        }
        else
        {
            return Pattern_list::where('country', '=', $league_country)
                    ->where('leagueapi_id', '=', $leagueapi_id)

                    ->where('pre_ah_pattern', '=', $pre_ah_pattern)
                    ->where('pre_gou_pattern', '=', $pre_gou_pattern)
                    
                    ->where('end_ah_pattern', '=', $end_ah_pattern)
                    ->where('end_gou_pattern', '=', $end_gou_pattern)
                    ->first();   
        }
    }
}
