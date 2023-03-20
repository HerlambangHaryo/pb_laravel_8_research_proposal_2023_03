<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

use App\Models\League; 
use DB;

class Football_fixture extends Model
{
    use HasFactory;
    
    public function league()
    {
        return $this->belongsTo(League::class, 'leagueapi_id', 'leagueapi_id');
    }

    public static function compareQuery($leagueapi_id, 
                                $pre_ah_pattern, 
                                $pre_gou_pattern, 
                                $end_ah_pattern, 
                                $end_gou_pattern, 
                                $status)
    { 
            $datax       = Football_fixture::select(
                            'id',
                            'date',
                            'fixtureapi_id',
                            'teams_home',
                            'home_fx_status',
                            'teams_home_logo',
                            'teams_away',
                            'away_fx_status',
                            'teams_away_logo',
                            'fixture_status',
                            'star', 
                            'goals_home',
                            'goals_away',

                            DB::raw('pre_match_winner_home as pre_mwh'),
                            DB::raw('pre_match_winner_draw as pre_mwd'),
                            DB::raw('pre_match_winner_away as pre_mwa'),
                            
                            DB::raw('end_match_winner_home as end_mwh'),
                            DB::raw('end_match_winner_draw as end_mwd'),
                            DB::raw('end_match_winner_away as end_mwa'),

                            DB::raw('pre_goals_overunder_over_15'),
                            DB::raw('pre_goals_overunder_under_15'), 

                            DB::raw('pre_goals_overunder_over_25'),
                            DB::raw('pre_goals_overunder_under_25'), 

                            DB::raw('pre_goals_overunder_over_35'),
                            DB::raw('pre_goals_overunder_under_35'), 
                            

                            DB::raw('end_goals_overunder_over_15'),
                            DB::raw('end_goals_overunder_under_15'), 

                            DB::raw('end_goals_overunder_over_25'),
                            DB::raw('end_goals_overunder_under_25'), 

                            DB::raw('end_goals_overunder_over_35'),
                            DB::raw('end_goals_overunder_under_35'), 

                            DB::raw('pre_both_teams_score_yes'),
                            DB::raw('pre_both_teams_score_no'), 

                            DB::raw('end_both_teams_score_yes'),
                            DB::raw('end_both_teams_score_no'), 

                            # ---------------------------------------------
                            DB::raw('pre_asian_handicap_home_min_675'),
                            DB::raw('pre_asian_handicap_away_min_675'), 
                            # ---------------------------------------------
                            DB::raw('pre_asian_handicap_home_min_65'),
                            DB::raw('pre_asian_handicap_away_min_65'), 
                            # ---------------------------------------------
                            DB::raw('pre_asian_handicap_home_min_625'),
                            DB::raw('pre_asian_handicap_away_min_625'), 
                            # ---------------------------------------------
                            DB::raw('pre_asian_handicap_home_min_6'),
                            DB::raw('pre_asian_handicap_away_min_6'), 
                            # ---------------------------------------------
                            DB::raw('pre_asian_handicap_home_min_575'),
                            DB::raw('pre_asian_handicap_away_min_575'), 
                            # ---------------------------------------------
                            DB::raw('pre_asian_handicap_home_min_55'),
                            DB::raw('pre_asian_handicap_away_min_55'), 
                            # ---------------------------------------------
                            DB::raw('pre_asian_handicap_home_min_525'),
                            DB::raw('pre_asian_handicap_away_min_525'), 
                            # ---------------------------------------------
                            DB::raw('pre_asian_handicap_home_min_5'),
                            DB::raw('pre_asian_handicap_away_min_5'), 
                            # ---------------------------------------------
                            DB::raw('pre_asian_handicap_home_min_475'),
                            DB::raw('pre_asian_handicap_away_min_475'), 
                            # ---------------------------------------------
                            DB::raw('pre_asian_handicap_home_min_45'),
                            DB::raw('pre_asian_handicap_away_min_45'), 
                            # ---------------------------------------------
                            DB::raw('pre_asian_handicap_home_min_425'),
                            DB::raw('pre_asian_handicap_away_min_425'), 
                            # ---------------------------------------------
                            DB::raw('pre_asian_handicap_home_min_4'),
                            DB::raw('pre_asian_handicap_away_min_4'), 
                            # ---------------------------------------------
                            DB::raw('pre_asian_handicap_home_min_375'),
                            DB::raw('pre_asian_handicap_away_min_375'), 
                            # ---------------------------------------------
                            DB::raw('pre_asian_handicap_home_min_35'),
                            DB::raw('pre_asian_handicap_away_min_35'), 
                            # ---------------------------------------------
                            DB::raw('pre_asian_handicap_home_min_325'),
                            DB::raw('pre_asian_handicap_away_min_325'), 
                            # ---------------------------------------------
                            DB::raw('pre_asian_handicap_home_min_3'),
                            DB::raw('pre_asian_handicap_away_min_3'), 
                            # ---------------------------------------------
                            DB::raw('pre_asian_handicap_home_min_275'),
                            DB::raw('pre_asian_handicap_away_min_275'), 
                            # ---------------------------------------------
                            DB::raw('pre_asian_handicap_home_min_25'),
                            DB::raw('pre_asian_handicap_away_min_25'), 
                            # ---------------------------------------------
                            DB::raw('pre_asian_handicap_home_min_225'),
                            DB::raw('pre_asian_handicap_away_min_225'), 
                            # ---------------------------------------------
                            DB::raw('pre_asian_handicap_home_min_2'),
                            DB::raw('pre_asian_handicap_away_min_2'), 
                            # ---------------------------------------------
                            DB::raw('pre_asian_handicap_home_min_175'),
                            DB::raw('pre_asian_handicap_away_min_175'), 
                            # ---------------------------------------------
                            DB::raw('pre_asian_handicap_home_min_15'),
                            DB::raw('pre_asian_handicap_away_min_15'), 
                            # ---------------------------------------------
                            DB::raw('pre_asian_handicap_home_min_125'),
                            DB::raw('pre_asian_handicap_away_min_125'), 
                            # ---------------------------------------------
                            DB::raw('pre_asian_handicap_home_min_1'),
                            DB::raw('pre_asian_handicap_away_min_1'), 
                            # ---------------------------------------------
                            DB::raw('pre_asian_handicap_home_min_075'),
                            DB::raw('pre_asian_handicap_away_min_075'), 
                            # ---------------------------------------------
                            DB::raw('pre_asian_handicap_home_min_05'),
                            DB::raw('pre_asian_handicap_away_min_05'), 
                            # ---------------------------------------------
                            DB::raw('pre_asian_handicap_home_min_025'),
                            DB::raw('pre_asian_handicap_away_min_025'), 
                            # ---------------------------------------------
                            DB::raw('pre_asian_handicap_home_plus_0'),
                            DB::raw('pre_asian_handicap_away_plus_0'), 
                            # ---------------------------------------------
                            DB::raw('pre_asian_handicap_home_plus_025'),
                            DB::raw('pre_asian_handicap_away_plus_025'), 
                            # ---------------------------------------------
                            DB::raw('pre_asian_handicap_home_plus_05'),
                            DB::raw('pre_asian_handicap_away_plus_05'), 
                            # ---------------------------------------------
                            DB::raw('pre_asian_handicap_home_plus_075'),
                            DB::raw('pre_asian_handicap_away_plus_075'),   
                            # ---------------------------------------------
                            DB::raw('pre_asian_handicap_home_plus_1'),
                            DB::raw('pre_asian_handicap_away_plus_1'), 
                            # ---------------------------------------------
                            DB::raw('pre_asian_handicap_home_plus_125'),
                            DB::raw('pre_asian_handicap_away_plus_125'), 
                            # ---------------------------------------------
                            DB::raw('pre_asian_handicap_home_plus_15'),
                            DB::raw('pre_asian_handicap_away_plus_15'), 
                            # ---------------------------------------------
                            DB::raw('pre_asian_handicap_home_plus_175'),
                            DB::raw('pre_asian_handicap_away_plus_175'),   
                            # ---------------------------------------------
                            DB::raw('pre_asian_handicap_home_plus_2'),
                            DB::raw('pre_asian_handicap_away_plus_2'), 
                            # ---------------------------------------------
                            DB::raw('pre_asian_handicap_home_plus_225'),
                            DB::raw('pre_asian_handicap_away_plus_225'), 
                            # ---------------------------------------------
                            DB::raw('pre_asian_handicap_home_plus_25'),
                            DB::raw('pre_asian_handicap_away_plus_25'), 
                            # ---------------------------------------------
                            DB::raw('pre_asian_handicap_home_plus_275'),
                            DB::raw('pre_asian_handicap_away_plus_275'), 
                            # ---------------------------------------------
                            DB::raw('pre_asian_handicap_home_plus_3'),
                            DB::raw('pre_asian_handicap_away_plus_3'), 
                            # ---------------------------------------------
                            DB::raw('pre_asian_handicap_home_plus_325'),
                            DB::raw('pre_asian_handicap_away_plus_325'), 
                            # ---------------------------------------------
                            DB::raw('pre_asian_handicap_home_plus_35'),
                            DB::raw('pre_asian_handicap_away_plus_35'), 
                            # ---------------------------------------------
                            DB::raw('pre_asian_handicap_home_plus_375'),
                            DB::raw('pre_asian_handicap_away_plus_375'), 
                            # ---------------------------------------------
                            DB::raw('pre_asian_handicap_home_plus_4'),
                            DB::raw('pre_asian_handicap_away_plus_4'), 
                            # ---------------------------------------------
                            DB::raw('pre_asian_handicap_home_plus_425'),
                            DB::raw('pre_asian_handicap_away_plus_425'), 
                            # ---------------------------------------------
                            DB::raw('pre_asian_handicap_home_plus_45'),
                            DB::raw('pre_asian_handicap_away_plus_45'), 
                            # ---------------------------------------------
                            DB::raw('pre_asian_handicap_home_plus_475'),
                            DB::raw('pre_asian_handicap_away_plus_475'), 
                            # ---------------------------------------------
                            DB::raw('pre_asian_handicap_home_plus_5'),
                            DB::raw('pre_asian_handicap_away_plus_5'), 
                            # ---------------------------------------------
                            DB::raw('pre_asian_handicap_home_plus_525'),
                            DB::raw('pre_asian_handicap_away_plus_525'), 
                            # ---------------------------------------------
                            DB::raw('pre_asian_handicap_home_plus_55'),
                            DB::raw('pre_asian_handicap_away_plus_55'), 
                            # ---------------------------------------------
                            DB::raw('pre_asian_handicap_home_plus_575'),
                            DB::raw('pre_asian_handicap_away_plus_575'), 
                            # ---------------------------------------------
                            DB::raw('pre_asian_handicap_home_plus_6'),
                            DB::raw('pre_asian_handicap_away_plus_6'), 
                            # ---------------------------------------------
                            DB::raw('pre_asian_handicap_home_plus_625'),
                            DB::raw('pre_asian_handicap_away_plus_625'), 
                            # ---------------------------------------------
                            DB::raw('pre_asian_handicap_home_plus_65'),
                            DB::raw('pre_asian_handicap_away_plus_65'), 
                            # ---------------------------------------------
                            DB::raw('pre_asian_handicap_home_plus_675'),
                            DB::raw('pre_asian_handicap_away_plus_675'), 
                            # --------------------------------------------- 
                            DB::raw('end_asian_handicap_home_min_675'),
                            DB::raw('end_asian_handicap_away_min_675'), 
                            # ---------------------------------------------
                            DB::raw('end_asian_handicap_home_min_65'),
                            DB::raw('end_asian_handicap_away_min_65'), 
                            # ---------------------------------------------
                            DB::raw('end_asian_handicap_home_min_625'),
                            DB::raw('end_asian_handicap_away_min_625'), 
                            # ---------------------------------------------
                            DB::raw('end_asian_handicap_home_min_6'),
                            DB::raw('end_asian_handicap_away_min_6'), 
                            # ---------------------------------------------
                            DB::raw('end_asian_handicap_home_min_575'),
                            DB::raw('end_asian_handicap_away_min_575'), 
                            # ---------------------------------------------
                            DB::raw('end_asian_handicap_home_min_55'),
                            DB::raw('end_asian_handicap_away_min_55'), 
                            # ---------------------------------------------
                            DB::raw('end_asian_handicap_home_min_525'),
                            DB::raw('end_asian_handicap_away_min_525'), 
                            # ---------------------------------------------
                            DB::raw('end_asian_handicap_home_min_5'),
                            DB::raw('end_asian_handicap_away_min_5'), 
                            # ---------------------------------------------
                            DB::raw('end_asian_handicap_home_min_475'),
                            DB::raw('end_asian_handicap_away_min_475'), 
                            # ---------------------------------------------
                            DB::raw('end_asian_handicap_home_min_45'),
                            DB::raw('end_asian_handicap_away_min_45'), 
                            # ---------------------------------------------
                            DB::raw('end_asian_handicap_home_min_425'),
                            DB::raw('end_asian_handicap_away_min_425'), 
                            # ---------------------------------------------
                            DB::raw('end_asian_handicap_home_min_4'),
                            DB::raw('end_asian_handicap_away_min_4'), 
                            # ---------------------------------------------
                            DB::raw('end_asian_handicap_home_min_375'),
                            DB::raw('end_asian_handicap_away_min_375'), 
                            # ---------------------------------------------
                            DB::raw('end_asian_handicap_home_min_35'),
                            DB::raw('end_asian_handicap_away_min_35'), 
                            # ---------------------------------------------
                            DB::raw('end_asian_handicap_home_min_325'),
                            DB::raw('end_asian_handicap_away_min_325'), 
                            # ---------------------------------------------
                            DB::raw('end_asian_handicap_home_min_3'),
                            DB::raw('end_asian_handicap_away_min_3'), 
                            # ---------------------------------------------
                            DB::raw('end_asian_handicap_home_min_275'),
                            DB::raw('end_asian_handicap_away_min_275'), 
                            # ---------------------------------------------
                            DB::raw('end_asian_handicap_home_min_25'),
                            DB::raw('end_asian_handicap_away_min_25'), 
                            # ---------------------------------------------
                            DB::raw('end_asian_handicap_home_min_225'),
                            DB::raw('end_asian_handicap_away_min_225'), 
                            # ---------------------------------------------
                            DB::raw('end_asian_handicap_home_min_2'),
                            DB::raw('end_asian_handicap_away_min_2'), 
                            # ---------------------------------------------
                            DB::raw('end_asian_handicap_home_min_175'),
                            DB::raw('end_asian_handicap_away_min_175'), 
                            # ---------------------------------------------
                            DB::raw('end_asian_handicap_home_min_15'),
                            DB::raw('end_asian_handicap_away_min_15'), 
                            # ---------------------------------------------
                            DB::raw('end_asian_handicap_home_min_125'),
                            DB::raw('end_asian_handicap_away_min_125'), 
                            # ---------------------------------------------
                            DB::raw('end_asian_handicap_home_min_1'),
                            DB::raw('end_asian_handicap_away_min_1'), 
                            # ---------------------------------------------
                            DB::raw('end_asian_handicap_home_min_075'),
                            DB::raw('end_asian_handicap_away_min_075'), 
                            # ---------------------------------------------
                            DB::raw('end_asian_handicap_home_min_05'),
                            DB::raw('end_asian_handicap_away_min_05'), 
                            # ---------------------------------------------
                            DB::raw('end_asian_handicap_home_min_025'),
                            DB::raw('end_asian_handicap_away_min_025'), 
                            # ---------------------------------------------
                            DB::raw('end_asian_handicap_home_plus_0'),
                            DB::raw('end_asian_handicap_away_plus_0'), 
                            # ---------------------------------------------
                            DB::raw('end_asian_handicap_home_plus_025'),
                            DB::raw('end_asian_handicap_away_plus_025'), 
                            # ---------------------------------------------
                            DB::raw('end_asian_handicap_home_plus_05'),
                            DB::raw('end_asian_handicap_away_plus_05'), 
                            # ---------------------------------------------
                            DB::raw('end_asian_handicap_home_plus_075'),
                            DB::raw('end_asian_handicap_away_plus_075'),   
                            # ---------------------------------------------
                            DB::raw('end_asian_handicap_home_plus_1'),
                            DB::raw('end_asian_handicap_away_plus_1'), 
                            # ---------------------------------------------
                            DB::raw('end_asian_handicap_home_plus_125'),
                            DB::raw('end_asian_handicap_away_plus_125'), 
                            # ---------------------------------------------
                            DB::raw('end_asian_handicap_home_plus_15'),
                            DB::raw('end_asian_handicap_away_plus_15'), 
                            # ---------------------------------------------
                            DB::raw('end_asian_handicap_home_plus_175'),
                            DB::raw('end_asian_handicap_away_plus_175'),   
                            # ---------------------------------------------
                            DB::raw('end_asian_handicap_home_plus_2'),
                            DB::raw('end_asian_handicap_away_plus_2'), 
                            # ---------------------------------------------
                            DB::raw('end_asian_handicap_home_plus_225'),
                            DB::raw('end_asian_handicap_away_plus_225'), 
                            # ---------------------------------------------
                            DB::raw('end_asian_handicap_home_plus_25'),
                            DB::raw('end_asian_handicap_away_plus_25'), 
                            # ---------------------------------------------
                            DB::raw('end_asian_handicap_home_plus_275'),
                            DB::raw('end_asian_handicap_away_plus_275'), 
                            # ---------------------------------------------
                            DB::raw('end_asian_handicap_home_plus_3'),
                            DB::raw('end_asian_handicap_away_plus_3'), 
                            # ---------------------------------------------
                            DB::raw('end_asian_handicap_home_plus_325'),
                            DB::raw('end_asian_handicap_away_plus_325'), 
                            # ---------------------------------------------
                            DB::raw('end_asian_handicap_home_plus_35'),
                            DB::raw('end_asian_handicap_away_plus_35'), 
                            # ---------------------------------------------
                            DB::raw('end_asian_handicap_home_plus_375'),
                            DB::raw('end_asian_handicap_away_plus_375'), 
                            # ---------------------------------------------
                            DB::raw('end_asian_handicap_home_plus_4'),
                            DB::raw('end_asian_handicap_away_plus_4'), 
                            # ---------------------------------------------
                            DB::raw('end_asian_handicap_home_plus_425'),
                            DB::raw('end_asian_handicap_away_plus_425'), 
                            # ---------------------------------------------
                            DB::raw('end_asian_handicap_home_plus_45'),
                            DB::raw('end_asian_handicap_away_plus_45'), 
                            # ---------------------------------------------
                            DB::raw('end_asian_handicap_home_plus_475'),
                            DB::raw('end_asian_handicap_away_plus_475'), 
                            # ---------------------------------------------
                            DB::raw('end_asian_handicap_home_plus_5'),
                            DB::raw('end_asian_handicap_away_plus_5'), 
                            # ---------------------------------------------
                            DB::raw('end_asian_handicap_home_plus_525'),
                            DB::raw('end_asian_handicap_away_plus_525'), 
                            # ---------------------------------------------
                            DB::raw('end_asian_handicap_home_plus_55'),
                            DB::raw('end_asian_handicap_away_plus_55'), 
                            # ---------------------------------------------
                            DB::raw('end_asian_handicap_home_plus_575'),
                            DB::raw('end_asian_handicap_away_plus_575'), 
                            # ---------------------------------------------
                            DB::raw('end_asian_handicap_home_plus_6'),
                            DB::raw('end_asian_handicap_away_plus_6'), 
                            # ---------------------------------------------
                            DB::raw('end_asian_handicap_home_plus_625'),
                            DB::raw('end_asian_handicap_away_plus_625'), 
                            # ---------------------------------------------
                            DB::raw('end_asian_handicap_home_plus_65'),
                            DB::raw('end_asian_handicap_away_plus_65'), 
                            # ---------------------------------------------
                            DB::raw('end_asian_handicap_home_plus_675'),
                            DB::raw('end_asian_handicap_away_plus_675'), 
                            # ---------------------------------------------
                            DB::raw('pre_total_goals_both_teams_to_score_over_yes_25'),
                            DB::raw('end_total_goals_both_teams_to_score_over_yes_25'), 
                            
                            DB::raw('DATE_ADD(date, INTERVAL 7 HOUR) as tanggal'),
                            DB::raw(' "original" as mdl ')
                        ) 
                        ->where('leagueapi_id', '=', $leagueapi_id) 
                        ->where('pre_ah_pattern', '=', $pre_ah_pattern)
                        ->where('pre_gou_pattern', '=', $pre_gou_pattern) 
                        ->where('end_ah_pattern', '=', $end_ah_pattern)
                        ->where('end_gou_pattern', '=', $end_gou_pattern)  ;  

            $data0       = Football_fixture::select(
                            'id',
                            'date',
                            'fixtureapi_id',
                            'teams_home',
                            'home_fx_status',
                            'teams_home_logo',
                            'teams_away',
                            'away_fx_status',
                            'teams_away_logo',
                            'fixture_status',
                            'star', 
                            'goals_home',
                            'goals_away',

                            DB::raw('pre_match_winner_home as pre_mwh'),
                            DB::raw('pre_match_winner_draw as pre_mwd'),
                            DB::raw('pre_match_winner_away as pre_mwa'),
                            
                            DB::raw('end_match_winner_home as end_mwh'),
                            DB::raw('end_match_winner_draw as end_mwd'),
                            DB::raw('end_match_winner_away as end_mwa'),

                            DB::raw('pre_goals_overunder_over_15'),
                            DB::raw('pre_goals_overunder_under_15'), 

                            DB::raw('pre_goals_overunder_over_25'),
                            DB::raw('pre_goals_overunder_under_25'), 

                            DB::raw('pre_goals_overunder_over_35'),
                            DB::raw('pre_goals_overunder_under_35'), 
                            

                            DB::raw('end_goals_overunder_over_15'),
                            DB::raw('end_goals_overunder_under_15'), 

                            DB::raw('end_goals_overunder_over_25'),
                            DB::raw('end_goals_overunder_under_25'), 

                            DB::raw('end_goals_overunder_over_35'),
                            DB::raw('end_goals_overunder_under_35'), 

                            DB::raw('pre_both_teams_score_yes'),
                            DB::raw('pre_both_teams_score_no'), 

                            DB::raw('end_both_teams_score_yes'),
                            DB::raw('end_both_teams_score_no'), 
                            # ---------------------------------------------
                            DB::raw('pre_asian_handicap_home_min_675'),
                            DB::raw('pre_asian_handicap_away_min_675'), 
                            # ---------------------------------------------
                            DB::raw('pre_asian_handicap_home_min_65'),
                            DB::raw('pre_asian_handicap_away_min_65'), 
                            # ---------------------------------------------
                            DB::raw('pre_asian_handicap_home_min_625'),
                            DB::raw('pre_asian_handicap_away_min_625'), 
                            # ---------------------------------------------
                            DB::raw('pre_asian_handicap_home_min_6'),
                            DB::raw('pre_asian_handicap_away_min_6'), 
                            # ---------------------------------------------
                            DB::raw('pre_asian_handicap_home_min_575'),
                            DB::raw('pre_asian_handicap_away_min_575'), 
                            # ---------------------------------------------
                            DB::raw('pre_asian_handicap_home_min_55'),
                            DB::raw('pre_asian_handicap_away_min_55'), 
                            # ---------------------------------------------
                            DB::raw('pre_asian_handicap_home_min_525'),
                            DB::raw('pre_asian_handicap_away_min_525'), 
                            # ---------------------------------------------
                            DB::raw('pre_asian_handicap_home_min_5'),
                            DB::raw('pre_asian_handicap_away_min_5'), 
                            # ---------------------------------------------
                            DB::raw('pre_asian_handicap_home_min_475'),
                            DB::raw('pre_asian_handicap_away_min_475'), 
                            # ---------------------------------------------
                            DB::raw('pre_asian_handicap_home_min_45'),
                            DB::raw('pre_asian_handicap_away_min_45'), 
                            # ---------------------------------------------
                            DB::raw('pre_asian_handicap_home_min_425'),
                            DB::raw('pre_asian_handicap_away_min_425'), 
                            # ---------------------------------------------
                            DB::raw('pre_asian_handicap_home_min_4'),
                            DB::raw('pre_asian_handicap_away_min_4'), 
                            # ---------------------------------------------
                            DB::raw('pre_asian_handicap_home_min_375'),
                            DB::raw('pre_asian_handicap_away_min_375'), 
                            # ---------------------------------------------
                            DB::raw('pre_asian_handicap_home_min_35'),
                            DB::raw('pre_asian_handicap_away_min_35'), 
                            # ---------------------------------------------
                            DB::raw('pre_asian_handicap_home_min_325'),
                            DB::raw('pre_asian_handicap_away_min_325'), 
                            # ---------------------------------------------
                            DB::raw('pre_asian_handicap_home_min_3'),
                            DB::raw('pre_asian_handicap_away_min_3'), 
                            # ---------------------------------------------
                            DB::raw('pre_asian_handicap_home_min_275'),
                            DB::raw('pre_asian_handicap_away_min_275'), 
                            # ---------------------------------------------
                            DB::raw('pre_asian_handicap_home_min_25'),
                            DB::raw('pre_asian_handicap_away_min_25'), 
                            # ---------------------------------------------
                            DB::raw('pre_asian_handicap_home_min_225'),
                            DB::raw('pre_asian_handicap_away_min_225'), 
                            # ---------------------------------------------
                            DB::raw('pre_asian_handicap_home_min_2'),
                            DB::raw('pre_asian_handicap_away_min_2'), 
                            # ---------------------------------------------
                            DB::raw('pre_asian_handicap_home_min_175'),
                            DB::raw('pre_asian_handicap_away_min_175'), 
                            # ---------------------------------------------
                            DB::raw('pre_asian_handicap_home_min_15'),
                            DB::raw('pre_asian_handicap_away_min_15'), 
                            # ---------------------------------------------
                            DB::raw('pre_asian_handicap_home_min_125'),
                            DB::raw('pre_asian_handicap_away_min_125'), 
                            # ---------------------------------------------
                            DB::raw('pre_asian_handicap_home_min_1'),
                            DB::raw('pre_asian_handicap_away_min_1'), 
                            # ---------------------------------------------
                            DB::raw('pre_asian_handicap_home_min_075'),
                            DB::raw('pre_asian_handicap_away_min_075'), 
                            # ---------------------------------------------
                            DB::raw('pre_asian_handicap_home_min_05'),
                            DB::raw('pre_asian_handicap_away_min_05'), 
                            # ---------------------------------------------
                            DB::raw('pre_asian_handicap_home_min_025'),
                            DB::raw('pre_asian_handicap_away_min_025'), 
                            # ---------------------------------------------
                            DB::raw('pre_asian_handicap_home_plus_0'),
                            DB::raw('pre_asian_handicap_away_plus_0'), 
                            # ---------------------------------------------
                            DB::raw('pre_asian_handicap_home_plus_025'),
                            DB::raw('pre_asian_handicap_away_plus_025'), 
                            # ---------------------------------------------
                            DB::raw('pre_asian_handicap_home_plus_05'),
                            DB::raw('pre_asian_handicap_away_plus_05'), 
                            # ---------------------------------------------
                            DB::raw('pre_asian_handicap_home_plus_075'),
                            DB::raw('pre_asian_handicap_away_plus_075'),   
                            # ---------------------------------------------
                            DB::raw('pre_asian_handicap_home_plus_1'),
                            DB::raw('pre_asian_handicap_away_plus_1'), 
                            # ---------------------------------------------
                            DB::raw('pre_asian_handicap_home_plus_125'),
                            DB::raw('pre_asian_handicap_away_plus_125'), 
                            # ---------------------------------------------
                            DB::raw('pre_asian_handicap_home_plus_15'),
                            DB::raw('pre_asian_handicap_away_plus_15'), 
                            # ---------------------------------------------
                            DB::raw('pre_asian_handicap_home_plus_175'),
                            DB::raw('pre_asian_handicap_away_plus_175'),   
                            # ---------------------------------------------
                            DB::raw('pre_asian_handicap_home_plus_2'),
                            DB::raw('pre_asian_handicap_away_plus_2'), 
                            # ---------------------------------------------
                            DB::raw('pre_asian_handicap_home_plus_225'),
                            DB::raw('pre_asian_handicap_away_plus_225'), 
                            # ---------------------------------------------
                            DB::raw('pre_asian_handicap_home_plus_25'),
                            DB::raw('pre_asian_handicap_away_plus_25'), 
                            # ---------------------------------------------
                            DB::raw('pre_asian_handicap_home_plus_275'),
                            DB::raw('pre_asian_handicap_away_plus_275'), 
                            # ---------------------------------------------
                            DB::raw('pre_asian_handicap_home_plus_3'),
                            DB::raw('pre_asian_handicap_away_plus_3'), 
                            # ---------------------------------------------
                            DB::raw('pre_asian_handicap_home_plus_325'),
                            DB::raw('pre_asian_handicap_away_plus_325'), 
                            # ---------------------------------------------
                            DB::raw('pre_asian_handicap_home_plus_35'),
                            DB::raw('pre_asian_handicap_away_plus_35'), 
                            # ---------------------------------------------
                            DB::raw('pre_asian_handicap_home_plus_375'),
                            DB::raw('pre_asian_handicap_away_plus_375'), 
                            # ---------------------------------------------
                            DB::raw('pre_asian_handicap_home_plus_4'),
                            DB::raw('pre_asian_handicap_away_plus_4'), 
                            # ---------------------------------------------
                            DB::raw('pre_asian_handicap_home_plus_425'),
                            DB::raw('pre_asian_handicap_away_plus_425'), 
                            # ---------------------------------------------
                            DB::raw('pre_asian_handicap_home_plus_45'),
                            DB::raw('pre_asian_handicap_away_plus_45'), 
                            # ---------------------------------------------
                            DB::raw('pre_asian_handicap_home_plus_475'),
                            DB::raw('pre_asian_handicap_away_plus_475'), 
                            # ---------------------------------------------
                            DB::raw('pre_asian_handicap_home_plus_5'),
                            DB::raw('pre_asian_handicap_away_plus_5'), 
                            # ---------------------------------------------
                            DB::raw('pre_asian_handicap_home_plus_525'),
                            DB::raw('pre_asian_handicap_away_plus_525'), 
                            # ---------------------------------------------
                            DB::raw('pre_asian_handicap_home_plus_55'),
                            DB::raw('pre_asian_handicap_away_plus_55'), 
                            # ---------------------------------------------
                            DB::raw('pre_asian_handicap_home_plus_575'),
                            DB::raw('pre_asian_handicap_away_plus_575'), 
                            # ---------------------------------------------
                            DB::raw('pre_asian_handicap_home_plus_6'),
                            DB::raw('pre_asian_handicap_away_plus_6'), 
                            # ---------------------------------------------
                            DB::raw('pre_asian_handicap_home_plus_625'),
                            DB::raw('pre_asian_handicap_away_plus_625'), 
                            # ---------------------------------------------
                            DB::raw('pre_asian_handicap_home_plus_65'),
                            DB::raw('pre_asian_handicap_away_plus_65'), 
                            # ---------------------------------------------
                            DB::raw('pre_asian_handicap_home_plus_675'),
                            DB::raw('pre_asian_handicap_away_plus_675'), 
                            # --------------------------------------------- 
                            DB::raw('end_asian_handicap_home_min_675'),
                            DB::raw('end_asian_handicap_away_min_675'), 
                            # ---------------------------------------------
                            DB::raw('end_asian_handicap_home_min_65'),
                            DB::raw('end_asian_handicap_away_min_65'), 
                            # ---------------------------------------------
                            DB::raw('end_asian_handicap_home_min_625'),
                            DB::raw('end_asian_handicap_away_min_625'), 
                            # ---------------------------------------------
                            DB::raw('end_asian_handicap_home_min_6'),
                            DB::raw('end_asian_handicap_away_min_6'), 
                            # ---------------------------------------------
                            DB::raw('end_asian_handicap_home_min_575'),
                            DB::raw('end_asian_handicap_away_min_575'), 
                            # ---------------------------------------------
                            DB::raw('end_asian_handicap_home_min_55'),
                            DB::raw('end_asian_handicap_away_min_55'), 
                            # ---------------------------------------------
                            DB::raw('end_asian_handicap_home_min_525'),
                            DB::raw('end_asian_handicap_away_min_525'), 
                            # ---------------------------------------------
                            DB::raw('end_asian_handicap_home_min_5'),
                            DB::raw('end_asian_handicap_away_min_5'), 
                            # ---------------------------------------------
                            DB::raw('end_asian_handicap_home_min_475'),
                            DB::raw('end_asian_handicap_away_min_475'), 
                            # ---------------------------------------------
                            DB::raw('end_asian_handicap_home_min_45'),
                            DB::raw('end_asian_handicap_away_min_45'), 
                            # ---------------------------------------------
                            DB::raw('end_asian_handicap_home_min_425'),
                            DB::raw('end_asian_handicap_away_min_425'), 
                            # ---------------------------------------------
                            DB::raw('end_asian_handicap_home_min_4'),
                            DB::raw('end_asian_handicap_away_min_4'), 
                            # ---------------------------------------------
                            DB::raw('end_asian_handicap_home_min_375'),
                            DB::raw('end_asian_handicap_away_min_375'), 
                            # ---------------------------------------------
                            DB::raw('end_asian_handicap_home_min_35'),
                            DB::raw('end_asian_handicap_away_min_35'), 
                            # ---------------------------------------------
                            DB::raw('end_asian_handicap_home_min_325'),
                            DB::raw('end_asian_handicap_away_min_325'), 
                            # ---------------------------------------------
                            DB::raw('end_asian_handicap_home_min_3'),
                            DB::raw('end_asian_handicap_away_min_3'), 
                            # ---------------------------------------------
                            DB::raw('end_asian_handicap_home_min_275'),
                            DB::raw('end_asian_handicap_away_min_275'), 
                            # ---------------------------------------------
                            DB::raw('end_asian_handicap_home_min_25'),
                            DB::raw('end_asian_handicap_away_min_25'), 
                            # ---------------------------------------------
                            DB::raw('end_asian_handicap_home_min_225'),
                            DB::raw('end_asian_handicap_away_min_225'), 
                            # ---------------------------------------------
                            DB::raw('end_asian_handicap_home_min_2'),
                            DB::raw('end_asian_handicap_away_min_2'), 
                            # ---------------------------------------------
                            DB::raw('end_asian_handicap_home_min_175'),
                            DB::raw('end_asian_handicap_away_min_175'), 
                            # ---------------------------------------------
                            DB::raw('end_asian_handicap_home_min_15'),
                            DB::raw('end_asian_handicap_away_min_15'), 
                            # ---------------------------------------------
                            DB::raw('end_asian_handicap_home_min_125'),
                            DB::raw('end_asian_handicap_away_min_125'), 
                            # ---------------------------------------------
                            DB::raw('end_asian_handicap_home_min_1'),
                            DB::raw('end_asian_handicap_away_min_1'), 
                            # ---------------------------------------------
                            DB::raw('end_asian_handicap_home_min_075'),
                            DB::raw('end_asian_handicap_away_min_075'), 
                            # ---------------------------------------------
                            DB::raw('end_asian_handicap_home_min_05'),
                            DB::raw('end_asian_handicap_away_min_05'), 
                            # ---------------------------------------------
                            DB::raw('end_asian_handicap_home_min_025'),
                            DB::raw('end_asian_handicap_away_min_025'), 
                            # ---------------------------------------------
                            DB::raw('end_asian_handicap_home_plus_0'),
                            DB::raw('end_asian_handicap_away_plus_0'), 
                            # ---------------------------------------------
                            DB::raw('end_asian_handicap_home_plus_025'),
                            DB::raw('end_asian_handicap_away_plus_025'), 
                            # ---------------------------------------------
                            DB::raw('end_asian_handicap_home_plus_05'),
                            DB::raw('end_asian_handicap_away_plus_05'), 
                            # ---------------------------------------------
                            DB::raw('end_asian_handicap_home_plus_075'),
                            DB::raw('end_asian_handicap_away_plus_075'),   
                            # ---------------------------------------------
                            DB::raw('end_asian_handicap_home_plus_1'),
                            DB::raw('end_asian_handicap_away_plus_1'), 
                            # ---------------------------------------------
                            DB::raw('end_asian_handicap_home_plus_125'),
                            DB::raw('end_asian_handicap_away_plus_125'), 
                            # ---------------------------------------------
                            DB::raw('end_asian_handicap_home_plus_15'),
                            DB::raw('end_asian_handicap_away_plus_15'), 
                            # ---------------------------------------------
                            DB::raw('end_asian_handicap_home_plus_175'),
                            DB::raw('end_asian_handicap_away_plus_175'),   
                            # ---------------------------------------------
                            DB::raw('end_asian_handicap_home_plus_2'),
                            DB::raw('end_asian_handicap_away_plus_2'), 
                            # ---------------------------------------------
                            DB::raw('end_asian_handicap_home_plus_225'),
                            DB::raw('end_asian_handicap_away_plus_225'), 
                            # ---------------------------------------------
                            DB::raw('end_asian_handicap_home_plus_25'),
                            DB::raw('end_asian_handicap_away_plus_25'), 
                            # ---------------------------------------------
                            DB::raw('end_asian_handicap_home_plus_275'),
                            DB::raw('end_asian_handicap_away_plus_275'), 
                            # ---------------------------------------------
                            DB::raw('end_asian_handicap_home_plus_3'),
                            DB::raw('end_asian_handicap_away_plus_3'), 
                            # ---------------------------------------------
                            DB::raw('end_asian_handicap_home_plus_325'),
                            DB::raw('end_asian_handicap_away_plus_325'), 
                            # ---------------------------------------------
                            DB::raw('end_asian_handicap_home_plus_35'),
                            DB::raw('end_asian_handicap_away_plus_35'), 
                            # ---------------------------------------------
                            DB::raw('end_asian_handicap_home_plus_375'),
                            DB::raw('end_asian_handicap_away_plus_375'), 
                            # ---------------------------------------------
                            DB::raw('end_asian_handicap_home_plus_4'),
                            DB::raw('end_asian_handicap_away_plus_4'), 
                            # ---------------------------------------------
                            DB::raw('end_asian_handicap_home_plus_425'),
                            DB::raw('end_asian_handicap_away_plus_425'), 
                            # ---------------------------------------------
                            DB::raw('end_asian_handicap_home_plus_45'),
                            DB::raw('end_asian_handicap_away_plus_45'), 
                            # ---------------------------------------------
                            DB::raw('end_asian_handicap_home_plus_475'),
                            DB::raw('end_asian_handicap_away_plus_475'), 
                            # ---------------------------------------------
                            DB::raw('end_asian_handicap_home_plus_5'),
                            DB::raw('end_asian_handicap_away_plus_5'), 
                            # ---------------------------------------------
                            DB::raw('end_asian_handicap_home_plus_525'),
                            DB::raw('end_asian_handicap_away_plus_525'), 
                            # ---------------------------------------------
                            DB::raw('end_asian_handicap_home_plus_55'),
                            DB::raw('end_asian_handicap_away_plus_55'), 
                            # ---------------------------------------------
                            DB::raw('end_asian_handicap_home_plus_575'),
                            DB::raw('end_asian_handicap_away_plus_575'), 
                            # ---------------------------------------------
                            DB::raw('end_asian_handicap_home_plus_6'),
                            DB::raw('end_asian_handicap_away_plus_6'), 
                            # ---------------------------------------------
                            DB::raw('end_asian_handicap_home_plus_625'),
                            DB::raw('end_asian_handicap_away_plus_625'), 
                            # ---------------------------------------------
                            DB::raw('end_asian_handicap_home_plus_65'),
                            DB::raw('end_asian_handicap_away_plus_65'), 
                            # ---------------------------------------------
                            DB::raw('end_asian_handicap_home_plus_675'),
                            DB::raw('end_asian_handicap_away_plus_675'), 
                            # ---------------------------------------------
                            DB::raw('pre_total_goals_both_teams_to_score_over_yes_25'),
                            DB::raw('end_total_goals_both_teams_to_score_over_yes_25'), 

                            DB::raw('DATE_ADD(date, INTERVAL 7 HOUR) as tanggal'),
                            DB::raw(' "original" as mdl ')
                        ) 
                        ->where('leagueapi_id', '=', $leagueapi_id) 
                        ->where('pre_ah_pattern', '=', $pre_ah_pattern)
                        ->where('pre_gou_pattern', '=', $pre_gou_pattern) 
                        ->where('end_ah_pattern', '=', $end_ah_pattern)
                        ->where('end_gou_pattern', '=', $end_gou_pattern) 
                        ->whereIn('fixture_status', ['Match Finished', 'Match Finished Ended']);  

            $data       = Football_fixture::select(
                            'id',
                            'date',
                            'fixtureapi_id',
                            'teams_home',
                            'home_fx_status',
                            'teams_home_logo',
                            'teams_away',
                            'away_fx_status',
                            'teams_away_logo',
                            'fixture_status',
                            'star', 
                            'goals_home',
                            'goals_away',

                            DB::raw('pre_match_winner_away as pre_mwh'),
                            DB::raw('pre_match_winner_draw as pre_mwd'),
                            DB::raw('pre_match_winner_home as pre_mwa'),

                            DB::raw('end_match_winner_away as end_mwh'),
                            DB::raw('end_match_winner_draw as end_mwd'),
                            DB::raw('end_match_winner_home as end_mwa'),

                            DB::raw('pre_goals_overunder_over_15'),
                            DB::raw('pre_goals_overunder_under_15'), 

                            DB::raw('pre_goals_overunder_over_25'),
                            DB::raw('pre_goals_overunder_under_25'), 

                            DB::raw('pre_goals_overunder_over_35'),
                            DB::raw('pre_goals_overunder_under_35'), 
                            

                            DB::raw('end_goals_overunder_over_15'),
                            DB::raw('end_goals_overunder_under_15'), 

                            DB::raw('end_goals_overunder_over_25'),
                            DB::raw('end_goals_overunder_under_25'), 

                            DB::raw('end_goals_overunder_over_35'),
                            DB::raw('end_goals_overunder_under_35'), 

                            DB::raw('pre_both_teams_score_yes'),
                            DB::raw('pre_both_teams_score_no'), 

                            DB::raw('end_both_teams_score_yes'),
                            DB::raw('end_both_teams_score_no'), 

                            # ---------------------------------------------
                            DB::raw('pre_asian_handicap_away_min_675'),
                            DB::raw('pre_asian_handicap_home_min_675'), 
                            # ---------------------------------------------
                            DB::raw('pre_asian_handicap_away_min_65'),
                            DB::raw('pre_asian_handicap_home_min_65'), 
                            # ---------------------------------------------
                            DB::raw('pre_asian_handicap_away_min_625'),
                            DB::raw('pre_asian_handicap_home_min_625'), 
                            # ---------------------------------------------
                            DB::raw('pre_asian_handicap_away_min_6'),
                            DB::raw('pre_asian_handicap_home_min_6'), 
                            # ---------------------------------------------
                            DB::raw('pre_asian_handicap_away_min_575'),
                            DB::raw('pre_asian_handicap_home_min_575'), 
                            # ---------------------------------------------
                            DB::raw('pre_asian_handicap_away_min_55'),
                            DB::raw('pre_asian_handicap_home_min_55'), 
                            # ---------------------------------------------
                            DB::raw('pre_asian_handicap_away_min_525'),
                            DB::raw('pre_asian_handicap_home_min_525'), 
                            # ---------------------------------------------
                            DB::raw('pre_asian_handicap_away_min_5'),
                            DB::raw('pre_asian_handicap_home_min_5'), 
                            # ---------------------------------------------
                            DB::raw('pre_asian_handicap_away_min_475'),
                            DB::raw('pre_asian_handicap_home_min_475'), 
                            # ---------------------------------------------
                            DB::raw('pre_asian_handicap_away_min_45'),
                            DB::raw('pre_asian_handicap_home_min_45'), 
                            # ---------------------------------------------
                            DB::raw('pre_asian_handicap_away_min_425'),
                            DB::raw('pre_asian_handicap_home_min_425'), 
                            # ---------------------------------------------
                            DB::raw('pre_asian_handicap_away_min_4'),
                            DB::raw('pre_asian_handicap_home_min_4'), 
                            # ---------------------------------------------
                            DB::raw('pre_asian_handicap_away_min_375'),
                            DB::raw('pre_asian_handicap_home_min_375'), 
                            # ---------------------------------------------
                            DB::raw('pre_asian_handicap_away_min_35'),
                            DB::raw('pre_asian_handicap_home_min_35'), 
                            # ---------------------------------------------
                            DB::raw('pre_asian_handicap_away_min_325'),
                            DB::raw('pre_asian_handicap_home_min_325'), 
                            # ---------------------------------------------
                            DB::raw('pre_asian_handicap_away_min_3'),
                            DB::raw('pre_asian_handicap_home_min_3'), 
                            # ---------------------------------------------
                            DB::raw('pre_asian_handicap_away_min_275'),
                            DB::raw('pre_asian_handicap_home_min_275'), 
                            # ---------------------------------------------
                            DB::raw('pre_asian_handicap_away_min_25'),
                            DB::raw('pre_asian_handicap_home_min_25'), 
                            # ---------------------------------------------
                            DB::raw('pre_asian_handicap_away_min_225'),
                            DB::raw('pre_asian_handicap_home_min_225'), 
                            # ---------------------------------------------
                            DB::raw('pre_asian_handicap_away_min_2'),
                            DB::raw('pre_asian_handicap_home_min_2'), 
                            # ---------------------------------------------
                            DB::raw('pre_asian_handicap_away_min_175'),
                            DB::raw('pre_asian_handicap_home_min_175'), 
                            # ---------------------------------------------
                            DB::raw('pre_asian_handicap_away_min_15'),
                            DB::raw('pre_asian_handicap_home_min_15'), 
                            # ---------------------------------------------
                            DB::raw('pre_asian_handicap_away_min_125'),
                            DB::raw('pre_asian_handicap_home_min_125'), 
                            # ---------------------------------------------
                            DB::raw('pre_asian_handicap_away_min_1'),
                            DB::raw('pre_asian_handicap_home_min_1'), 
                            # ---------------------------------------------
                            DB::raw('pre_asian_handicap_away_min_075'),
                            DB::raw('pre_asian_handicap_home_min_075'), 
                            # ---------------------------------------------
                            DB::raw('pre_asian_handicap_away_min_05'),
                            DB::raw('pre_asian_handicap_home_min_05'), 
                            # ---------------------------------------------
                            DB::raw('pre_asian_handicap_away_min_025'),
                            DB::raw('pre_asian_handicap_home_min_025'), 
                            # ---------------------------------------------
                            DB::raw('pre_asian_handicap_away_plus_0'),
                            DB::raw('pre_asian_handicap_home_plus_0'), 
                            # ---------------------------------------------
                            DB::raw('pre_asian_handicap_away_plus_025'),
                            DB::raw('pre_asian_handicap_home_plus_025'), 
                            # ---------------------------------------------
                            DB::raw('pre_asian_handicap_away_plus_05'),
                            DB::raw('pre_asian_handicap_home_plus_05'), 
                            # ---------------------------------------------
                            DB::raw('pre_asian_handicap_away_plus_075'),
                            DB::raw('pre_asian_handicap_home_plus_075'),   
                            # ---------------------------------------------
                            DB::raw('pre_asian_handicap_away_plus_1'),
                            DB::raw('pre_asian_handicap_home_plus_1'), 
                            # ---------------------------------------------
                            DB::raw('pre_asian_handicap_away_plus_125'),
                            DB::raw('pre_asian_handicap_home_plus_125'), 
                            # ---------------------------------------------
                            DB::raw('pre_asian_handicap_away_plus_15'),
                            DB::raw('pre_asian_handicap_home_plus_15'), 
                            # ---------------------------------------------
                            DB::raw('pre_asian_handicap_away_plus_175'),
                            DB::raw('pre_asian_handicap_home_plus_175'),   
                            # ---------------------------------------------
                            DB::raw('pre_asian_handicap_away_plus_2'),
                            DB::raw('pre_asian_handicap_home_plus_2'), 
                            # ---------------------------------------------
                            DB::raw('pre_asian_handicap_away_plus_225'),
                            DB::raw('pre_asian_handicap_home_plus_225'), 
                            # ---------------------------------------------
                            DB::raw('pre_asian_handicap_away_plus_25'),
                            DB::raw('pre_asian_handicap_home_plus_25'), 
                            # ---------------------------------------------
                            DB::raw('pre_asian_handicap_away_plus_275'),
                            DB::raw('pre_asian_handicap_home_plus_275'), 
                            # ---------------------------------------------
                            DB::raw('pre_asian_handicap_away_plus_3'),
                            DB::raw('pre_asian_handicap_home_plus_3'), 
                            # ---------------------------------------------
                            DB::raw('pre_asian_handicap_away_plus_325'),
                            DB::raw('pre_asian_handicap_home_plus_325'), 
                            # ---------------------------------------------
                            DB::raw('pre_asian_handicap_away_plus_35'),
                            DB::raw('pre_asian_handicap_home_plus_35'), 
                            # ---------------------------------------------
                            DB::raw('pre_asian_handicap_away_plus_375'),
                            DB::raw('pre_asian_handicap_home_plus_375'), 
                            # ---------------------------------------------
                            DB::raw('pre_asian_handicap_away_plus_4'),
                            DB::raw('pre_asian_handicap_home_plus_4'), 
                            # ---------------------------------------------
                            DB::raw('pre_asian_handicap_away_plus_425'),
                            DB::raw('pre_asian_handicap_home_plus_425'), 
                            # ---------------------------------------------
                            DB::raw('pre_asian_handicap_away_plus_45'),
                            DB::raw('pre_asian_handicap_home_plus_45'), 
                            # ---------------------------------------------
                            DB::raw('pre_asian_handicap_away_plus_475'),
                            DB::raw('pre_asian_handicap_home_plus_475'), 
                            # ---------------------------------------------
                            DB::raw('pre_asian_handicap_away_plus_5'),
                            DB::raw('pre_asian_handicap_home_plus_5'), 
                            # ---------------------------------------------
                            DB::raw('pre_asian_handicap_away_plus_525'),
                            DB::raw('pre_asian_handicap_home_plus_525'), 
                            # ---------------------------------------------
                            DB::raw('pre_asian_handicap_away_plus_55'),
                            DB::raw('pre_asian_handicap_home_plus_55'), 
                            # ---------------------------------------------
                            DB::raw('pre_asian_handicap_away_plus_575'),
                            DB::raw('pre_asian_handicap_home_plus_575'), 
                            # ---------------------------------------------
                            DB::raw('pre_asian_handicap_away_plus_6'),
                            DB::raw('pre_asian_handicap_home_plus_6'), 
                            # ---------------------------------------------
                            DB::raw('pre_asian_handicap_away_plus_625'),
                            DB::raw('pre_asian_handicap_home_plus_625'), 
                            # ---------------------------------------------
                            DB::raw('pre_asian_handicap_away_plus_65'),
                            DB::raw('pre_asian_handicap_home_plus_65'), 
                            # ---------------------------------------------
                            DB::raw('pre_asian_handicap_away_plus_675'),
                            DB::raw('pre_asian_handicap_home_plus_675'), 
                            # --------------------------------------------- 
                            DB::raw('end_asian_handicap_home_min_675'),
                            DB::raw('end_asian_handicap_home_min_675'), 
                            # ---------------------------------------------
                            DB::raw('end_asian_handicap_away_min_65'),
                            DB::raw('end_asian_handicap_home_min_65'), 
                            # ---------------------------------------------
                            DB::raw('end_asian_handicap_away_min_625'),
                            DB::raw('end_asian_handicap_home_min_625'), 
                            # ---------------------------------------------
                            DB::raw('end_asian_handicap_away_min_6'),
                            DB::raw('end_asian_handicap_home_min_6'), 
                            # ---------------------------------------------
                            DB::raw('end_asian_handicap_away_min_575'),
                            DB::raw('end_asian_handicap_home_min_575'), 
                            # ---------------------------------------------
                            DB::raw('end_asian_handicap_away_min_55'),
                            DB::raw('end_asian_handicap_home_min_55'), 
                            # ---------------------------------------------
                            DB::raw('end_asian_handicap_away_min_525'),
                            DB::raw('end_asian_handicap_home_min_525'), 
                            # ---------------------------------------------
                            DB::raw('end_asian_handicap_away_min_5'),
                            DB::raw('end_asian_handicap_home_min_5'), 
                            # ---------------------------------------------
                            DB::raw('end_asian_handicap_away_min_475'),
                            DB::raw('end_asian_handicap_home_min_475'), 
                            # ---------------------------------------------
                            DB::raw('end_asian_handicap_away_min_45'),
                            DB::raw('end_asian_handicap_home_min_45'), 
                            # ---------------------------------------------
                            DB::raw('end_asian_handicap_away_min_425'),
                            DB::raw('end_asian_handicap_home_min_425'), 
                            # ---------------------------------------------
                            DB::raw('end_asian_handicap_away_min_4'),
                            DB::raw('end_asian_handicap_home_min_4'), 
                            # ---------------------------------------------
                            DB::raw('end_asian_handicap_away_min_375'),
                            DB::raw('end_asian_handicap_home_min_375'), 
                            # ---------------------------------------------
                            DB::raw('end_asian_handicap_away_min_35'),
                            DB::raw('end_asian_handicap_home_min_35'), 
                            # ---------------------------------------------
                            DB::raw('end_asian_handicap_away_min_325'),
                            DB::raw('end_asian_handicap_home_min_325'), 
                            # ---------------------------------------------
                            DB::raw('end_asian_handicap_away_min_3'),
                            DB::raw('end_asian_handicap_home_min_3'), 
                            # ---------------------------------------------
                            DB::raw('end_asian_handicap_away_min_275'),
                            DB::raw('end_asian_handicap_home_min_275'), 
                            # ---------------------------------------------
                            DB::raw('end_asian_handicap_away_min_25'),
                            DB::raw('end_asian_handicap_home_min_25'), 
                            # ---------------------------------------------
                            DB::raw('end_asian_handicap_away_min_225'),
                            DB::raw('end_asian_handicap_home_min_225'), 
                            # ---------------------------------------------
                            DB::raw('end_asian_handicap_away_min_2'),
                            DB::raw('end_asian_handicap_home_min_2'), 
                            # ---------------------------------------------
                            DB::raw('end_asian_handicap_away_min_175'),
                            DB::raw('end_asian_handicap_home_min_175'), 
                            # ---------------------------------------------
                            DB::raw('end_asian_handicap_away_min_15'),
                            DB::raw('end_asian_handicap_home_min_15'), 
                            # ---------------------------------------------
                            DB::raw('end_asian_handicap_away_min_125'),
                            DB::raw('end_asian_handicap_home_min_125'), 
                            # ---------------------------------------------
                            DB::raw('end_asian_handicap_away_min_1'),
                            DB::raw('end_asian_handicap_home_min_1'), 
                            # ---------------------------------------------
                            DB::raw('end_asian_handicap_away_min_075'),
                            DB::raw('end_asian_handicap_home_min_075'), 
                            # ---------------------------------------------
                            DB::raw('end_asian_handicap_away_min_05'),
                            DB::raw('end_asian_handicap_home_min_05'), 
                            # ---------------------------------------------
                            DB::raw('end_asian_handicap_away_min_025'),
                            DB::raw('end_asian_handicap_home_min_025'), 
                            # ---------------------------------------------
                            DB::raw('end_asian_handicap_away_plus_0'),
                            DB::raw('end_asian_handicap_home_plus_0'), 
                            # ---------------------------------------------
                            DB::raw('end_asian_handicap_away_plus_025'),
                            DB::raw('end_asian_handicap_home_plus_025'), 
                            # ---------------------------------------------
                            DB::raw('end_asian_handicap_away_plus_05'),
                            DB::raw('end_asian_handicap_home_plus_05'), 
                            # ---------------------------------------------
                            DB::raw('end_asian_handicap_away_plus_075'),
                            DB::raw('end_asian_handicap_home_plus_075'),   
                            # ---------------------------------------------
                            DB::raw('end_asian_handicap_away_plus_1'),
                            DB::raw('end_asian_handicap_home_plus_1'), 
                            # ---------------------------------------------
                            DB::raw('end_asian_handicap_away_plus_125'),
                            DB::raw('end_asian_handicap_home_plus_125'), 
                            # ---------------------------------------------
                            DB::raw('end_asian_handicap_away_plus_15'),
                            DB::raw('end_asian_handicap_home_plus_15'), 
                            # ---------------------------------------------
                            DB::raw('end_asian_handicap_away_plus_175'),
                            DB::raw('end_asian_handicap_home_plus_175'),   
                            # ---------------------------------------------
                            DB::raw('end_asian_handicap_away_plus_2'),
                            DB::raw('end_asian_handicap_home_plus_2'), 
                            # ---------------------------------------------
                            DB::raw('end_asian_handicap_away_plus_225'),
                            DB::raw('end_asian_handicap_home_plus_225'), 
                            # ---------------------------------------------
                            DB::raw('end_asian_handicap_away_plus_25'),
                            DB::raw('end_asian_handicap_home_plus_25'), 
                            # ---------------------------------------------
                            DB::raw('end_asian_handicap_away_plus_275'),
                            DB::raw('end_asian_handicap_home_plus_275'), 
                            # ---------------------------------------------
                            DB::raw('end_asian_handicap_away_plus_3'),
                            DB::raw('end_asian_handicap_home_plus_3'), 
                            # ---------------------------------------------
                            DB::raw('end_asian_handicap_away_plus_325'),
                            DB::raw('end_asian_handicap_home_plus_325'), 
                            # ---------------------------------------------
                            DB::raw('end_asian_handicap_away_plus_35'),
                            DB::raw('end_asian_handicap_home_plus_35'), 
                            # ---------------------------------------------
                            DB::raw('end_asian_handicap_away_plus_375'),
                            DB::raw('end_asian_handicap_home_plus_375'), 
                            # ---------------------------------------------
                            DB::raw('end_asian_handicap_away_plus_4'),
                            DB::raw('end_asian_handicap_home_plus_4'), 
                            # ---------------------------------------------
                            DB::raw('end_asian_handicap_away_plus_425'),
                            DB::raw('end_asian_handicap_home_plus_425'), 
                            # ---------------------------------------------
                            DB::raw('end_asian_handicap_away_plus_45'),
                            DB::raw('end_asian_handicap_home_plus_45'), 
                            # ---------------------------------------------
                            DB::raw('end_asian_handicap_away_plus_475'),
                            DB::raw('end_asian_handicap_home_plus_475'), 
                            # ---------------------------------------------
                            DB::raw('end_asian_handicap_away_plus_5'),
                            DB::raw('end_asian_handicap_home_plus_5'), 
                            # ---------------------------------------------
                            DB::raw('end_asian_handicap_away_plus_525'),
                            DB::raw('end_asian_handicap_home_plus_525'), 
                            # ---------------------------------------------
                            DB::raw('end_asian_handicap_away_plus_55'),
                            DB::raw('end_asian_handicap_home_plus_55'), 
                            # ---------------------------------------------
                            DB::raw('end_asian_handicap_away_plus_575'),
                            DB::raw('end_asian_handicap_home_plus_575'), 
                            # ---------------------------------------------
                            DB::raw('end_asian_handicap_away_plus_6'),
                            DB::raw('end_asian_handicap_home_plus_6'), 
                            # ---------------------------------------------
                            DB::raw('end_asian_handicap_away_plus_625'),
                            DB::raw('end_asian_handicap_home_plus_625'), 
                            # ---------------------------------------------
                            DB::raw('end_asian_handicap_away_plus_65'),
                            DB::raw('end_asian_handicap_home_plus_65'), 
                            # ---------------------------------------------
                            DB::raw('end_asian_handicap_away_plus_675'),
                            DB::raw('end_asian_handicap_home_plus_675'), 
                            # ---------------------------------------------
                            DB::raw('pre_total_goals_both_teams_to_score_over_yes_25'),
                            DB::raw('end_total_goals_both_teams_to_score_over_yes_25'), 



                            DB::raw('DATE_ADD(date, INTERVAL 7 HOUR) as tanggal'),
                            DB::raw(' "mirror" as mdl ')
                        ) 
                        ->where('leagueapi_id', '=', $leagueapi_id) 
                        ->where('pre_ah_pattern_mirror', '=', $pre_ah_pattern)
                        ->where('pre_gou_pattern', '=', $pre_gou_pattern) 
                        ->where('end_ah_pattern_mirror', '=', $end_ah_pattern)
                        ->where('end_gou_pattern', '=', $end_gou_pattern) 
                        ->whereIn('fixture_status', ['Match Finished', 'Match Finished Ended'])
                        ->union($datax)
                        ->union($data0)
                        ->orderBy('date', 'Desc')
                        ->get();    
        
        return $data;
    }

    public static function unionPatternlists($league_country, $leagueapi_id, $pre_ah_pattern, $pre_gou_pattern, $end_ah_pattern, $end_gou_pattern, $status)
    {
        if($status == "mdl")
        {
            $data       = Football_fixture::select(
                            '*',
                            DB::raw('DATE_ADD(date, INTERVAL 7 HOUR) as tanggal'),
                            DB::raw(' "mdl" as model ')
                        )
                        ->where('league_country', '=', $league_country)
                        ->where('leagueapi_id', '=', $leagueapi_id)

                        ->where('pre_ah_pattern', '=', $pre_ah_pattern)
                        ->where('pre_gou_pattern', '=', $pre_gou_pattern)
                        
                        ->where('end_ah_pattern', '=', $end_ah_pattern)
                        ->where('end_gou_pattern', '=', $end_gou_pattern)

                        ->whereIn('fixture_status', ['Match Finished', 'Match Finished Ended'])  
                        ->orderby('date', 'desc')
                        ->get();    
        }
        elseif($status == "mirror")
        {  

            $data       = Football_fixture::select(
                            '*',
                            DB::raw('DATE_ADD(date, INTERVAL 7 HOUR) as tanggal'),
                            DB::raw(' "mirror" as model ')
                        )
                        ->where('league_country', '=', $league_country)
                        ->where('leagueapi_id', '=', $leagueapi_id)
                        
                        ->where('pre_ah_pattern_mirror', '=', $pre_ah_pattern)
                        ->where('pre_gou_pattern', '=', $pre_gou_pattern)
                        
                        ->where('end_ah_pattern_mirror', '=', $end_ah_pattern)
                        ->where('end_gou_pattern', '=', $end_gou_pattern)

                        ->whereIn('fixture_status', ['Match Finished', 'Match Finished Ended'])
                        ->orderby('date', 'desc')
                        ->get();    
        }
        elseif($status == "mdl_onlyend")
        {
            $data       = Football_fixture::select(
                            '*',
                            DB::raw('DATE_ADD(date, INTERVAL 7 HOUR) as tanggal'),
                            DB::raw(' "mdl" as model ')
                        )
                        ->where('league_country', '=', $league_country)
                        ->where('leagueapi_id', '=', $leagueapi_id)
 
                        
                        ->where('end_ah_pattern', '=', $end_ah_pattern)
                        ->where('end_gou_pattern', '=', $end_gou_pattern)

                        ->whereIn('fixture_status', ['Match Finished', 'Match Finished Ended'])  
                        ->orderby('date', 'desc')
                        ->get();    
        }
        elseif($status == "mirror_onlyend")
        {  

            $data       = Football_fixture::select(
                            '*',
                            DB::raw('DATE_ADD(date, INTERVAL 7 HOUR) as tanggal'),
                            DB::raw(' "mirror" as model ')
                        )
                        ->where('league_country', '=', $league_country)
                        ->where('leagueapi_id', '=', $leagueapi_id)
                                                 
                        ->where('end_ah_pattern_mirror', '=', $end_ah_pattern)
                        ->where('end_gou_pattern', '=', $end_gou_pattern)

                        ->whereIn('fixture_status', ['Match Finished', 'Match Finished Ended'])
                        ->orderby('date', 'desc')
                        ->get();    
        }

        return $data;
    }
    
    use SoftDeletes;
    
    protected $softDelete = true;
    
    protected $fillable = [
        'fixtureapi_id',
        'referee',
        'date',
        'venue_name',
        'venue_city',
        'fixture_status',
        'fixture_elapsed',
        'leagueapi_id',
        'league_name',
        'league_country',
        'league_logo',
        'league_flag',
        'season',
        'round',
        'teams_home_id',
        'teams_away_id',
        'teams_home',
        'teams_away',
        'teams_home_logo',
        'teams_away_logo',
        'goals_home',
        'goals_away',
        'score_halftime_home',
        'score_halftime_away',
        'score_fulltime_home',
        'score_fulltime_away',
        'score_extratime_home',
        'score_extratime_away',
        'score_penalty_home',
        'score_penalty_away',
        'lineups_coach_home_name',
        'lineups_coach_away_name',
        'lineups_coach_home_photo',
        'lineups_coach_away_photo',
        'lineups_formation_home',
        'lineups_formation_away',
        'shots_on_goal_home',
        'shots_on_goal_away',
        'shots_off_goal_home',
        'shots_off_goal_away',
        'total_shots_home',
        'total_shots_away',
        'blocked_shots_home',
        'blocked_shots_away',
        'shots_inside_box_home',
        'shots_inside_box_away',
        'shots_outside_box_home',
        'shots_outside_box_away',
        'fouls_home',
        'fouls_away',
        'corner_kicks_home',
        'corner_kicks_away',
        'offsides_home',
        'offsides_away',
        'ball_possession_home',
        'ball_possession_away',
        'yellow_cards_home',
        'yellow_cards_away',
        'red_cards_home',
        'red_cards_away',
        'goalkeeper_saves_home',
        'goalkeeper_saves_away',
        'total_passess_home',
        'total_passess_away',
        'passess_accurate_home',
        'passess_accurate_away',
        'passess_home',
        'passess_away',
        'prediction_winner_name',
        'prediction_winner_comment',
        'prediction_underover',
        'prediction_goals_home',
        'prediction_goals_away',
        'prediction_advice',
        'prediction_percent_home',
        'prediction_percent_draw',
        'prediction_percent_away',
        'comparison_form_home',
        'comparison_form_away',
        'comparison_att_home',
        'comparison_att_away',
        'comparison_def_home',
        'comparison_def_away',
        'comparison_hh_home',
        'comparison_hh_away',
        'comparison_goals_home',
        'comparison_goals_away',

        
        'comparison_poisson_distribution_home',
        'comparison_poisson_distribution_away',

        
        'comparison_total_home',
        'comparison_total_away',


        'pre_match_winner_home',
        'pre_match_winner_draw',
        'pre_match_winner_away',
        'end_match_winner_home',
        'end_match_winner_draw',
        'end_match_winner_away',
        'pre_homeaway_home',
        'pre_homeaway_away',
        'end_homeaway_home',
        'end_homeaway_away',
        'pre_first_half_winner_home',
        'pre_first_half_winner_draw',
        'pre_first_half_winner_away',
        'end_first_half_winner_home',
        'end_first_half_winner_draw',
        'end_first_half_winner_away',
        'pre_second_half_winner_home',
        'pre_second_half_winner_draw',
        'pre_second_half_winner_away',
        'end_second_half_winner_home',
        'end_second_half_winner_draw',
        'end_second_half_winner_away',
        'pre_asian_handicap_home_min_675',
        'pre_asian_handicap_away_min_675',
        'pre_asian_handicap_home_min_65',
        'pre_asian_handicap_away_min_65',
        'pre_asian_handicap_home_min_625',
        'pre_asian_handicap_away_min_625',
        'pre_asian_handicap_home_min_6',
        'pre_asian_handicap_away_min_6',
        'pre_asian_handicap_home_min_575',
        'pre_asian_handicap_away_min_575',
        'pre_asian_handicap_home_min_55',
        'pre_asian_handicap_away_min_55',
        'pre_asian_handicap_home_min_525',
        'pre_asian_handicap_away_min_525',
        'pre_asian_handicap_home_min_5',
        'pre_asian_handicap_away_min_5',
        'pre_asian_handicap_home_min_475',
        'pre_asian_handicap_away_min_475',
        'pre_asian_handicap_home_min_45',
        'pre_asian_handicap_away_min_45',
        'pre_asian_handicap_home_min_425',
        'pre_asian_handicap_away_min_425',
        'pre_asian_handicap_home_min_4',
        'pre_asian_handicap_away_min_4',
        'pre_asian_handicap_home_min_375',
        'pre_asian_handicap_away_min_375',
        'pre_asian_handicap_home_min_35',
        'pre_asian_handicap_away_min_35',
        'pre_asian_handicap_home_min_325',
        'pre_asian_handicap_away_min_325',
        'pre_asian_handicap_home_min_3',
        'pre_asian_handicap_away_min_3',
        'pre_asian_handicap_home_min_275',
        'pre_asian_handicap_away_min_275',
        'pre_asian_handicap_home_min_25',
        'pre_asian_handicap_away_min_25',
        'pre_asian_handicap_home_min_225',
        'pre_asian_handicap_away_min_225',
        'pre_asian_handicap_home_min_2',
        'pre_asian_handicap_away_min_2',
        'pre_asian_handicap_home_min_175',
        'pre_asian_handicap_away_min_175',
        'pre_asian_handicap_home_min_15',
        'pre_asian_handicap_away_min_15',
        'pre_asian_handicap_home_min_125',
        'pre_asian_handicap_away_min_125',
        'pre_asian_handicap_home_min_1',
        'pre_asian_handicap_away_min_1',
        'pre_asian_handicap_home_min_075',
        'pre_asian_handicap_away_min_075',
        'pre_asian_handicap_home_min_05',
        'pre_asian_handicap_away_min_05',
        'pre_asian_handicap_home_min_025',
        'pre_asian_handicap_away_min_025',
        'pre_asian_handicap_home_plus_0',
        'pre_asian_handicap_away_plus_0',
        'pre_asian_handicap_home_plus_025',
        'pre_asian_handicap_away_plus_025',
        'pre_asian_handicap_home_plus_05',
        'pre_asian_handicap_away_plus_05',
        'pre_asian_handicap_home_plus_075',
        'pre_asian_handicap_away_plus_075',
        'pre_asian_handicap_home_plus_1',
        'pre_asian_handicap_away_plus_1',
        'pre_asian_handicap_home_plus_125',
        'pre_asian_handicap_away_plus_125',
        'pre_asian_handicap_home_plus_15',
        'pre_asian_handicap_away_plus_15',
        'pre_asian_handicap_home_plus_175',
        'pre_asian_handicap_away_plus_175',
        'pre_asian_handicap_home_plus_2',
        'pre_asian_handicap_away_plus_2',
        'pre_asian_handicap_home_plus_225',
        'pre_asian_handicap_away_plus_225',
        'pre_asian_handicap_home_plus_25',
        'pre_asian_handicap_away_plus_25',
        'pre_asian_handicap_home_plus_275',
        'pre_asian_handicap_away_plus_275',
        'pre_asian_handicap_home_plus_3',
        'pre_asian_handicap_away_plus_3',
        'pre_asian_handicap_home_plus_325',
        'pre_asian_handicap_away_plus_325',
        'pre_asian_handicap_home_plus_35',
        'pre_asian_handicap_away_plus_35',
        'pre_asian_handicap_home_plus_375',
        'pre_asian_handicap_away_plus_375',
        'pre_asian_handicap_home_plus_4',
        'pre_asian_handicap_away_plus_4',
        'pre_asian_handicap_home_plus_425',
        'pre_asian_handicap_away_plus_425',
        'pre_asian_handicap_home_plus_45',
        'pre_asian_handicap_away_plus_45',
        'pre_asian_handicap_home_plus_475',
        'pre_asian_handicap_away_plus_475',
        'pre_asian_handicap_home_plus_5',
        'pre_asian_handicap_away_plus_5',
        'pre_asian_handicap_home_plus_525',
        'pre_asian_handicap_away_plus_525',
        'pre_asian_handicap_home_plus_55',
        'pre_asian_handicap_away_plus_55',
        'pre_asian_handicap_home_plus_575',
        'pre_asian_handicap_away_plus_575',
        'pre_asian_handicap_home_plus_6',
        'pre_asian_handicap_away_plus_6',
        'pre_asian_handicap_home_plus_625',
        'pre_asian_handicap_away_plus_625',
        'pre_asian_handicap_home_plus_65',
        'pre_asian_handicap_away_plus_65',
        'pre_asian_handicap_home_plus_675',
        'pre_asian_handicap_away_plus_675',
        'end_asian_handicap_home_min_675',
        'end_asian_handicap_away_min_675',
        'end_asian_handicap_home_min_65',
        'end_asian_handicap_away_min_65',
        'end_asian_handicap_home_min_625',
        'end_asian_handicap_away_min_625',
        'end_asian_handicap_home_min_6',
        'end_asian_handicap_away_min_6',
        'end_asian_handicap_home_min_575',
        'end_asian_handicap_away_min_575',
        'end_asian_handicap_home_min_55',
        'end_asian_handicap_away_min_55',
        'end_asian_handicap_home_min_525',
        'end_asian_handicap_away_min_525',
        'end_asian_handicap_home_min_5',
        'end_asian_handicap_away_min_5',
        'end_asian_handicap_home_min_475',
        'end_asian_handicap_away_min_475',
        'end_asian_handicap_home_min_45',
        'end_asian_handicap_away_min_45',
        'end_asian_handicap_home_min_425',
        'end_asian_handicap_away_min_425',
        'end_asian_handicap_home_min_4',
        'end_asian_handicap_away_min_4',
        'end_asian_handicap_home_min_375',
        'end_asian_handicap_away_min_375',
        'end_asian_handicap_home_min_35',
        'end_asian_handicap_away_min_35',
        'end_asian_handicap_home_min_325',
        'end_asian_handicap_away_min_325',
        'end_asian_handicap_home_min_3',
        'end_asian_handicap_away_min_3',
        'end_asian_handicap_home_min_275',
        'end_asian_handicap_away_min_275',
        'end_asian_handicap_home_min_25',
        'end_asian_handicap_away_min_25',
        'end_asian_handicap_home_min_225',
        'end_asian_handicap_away_min_225',
        'end_asian_handicap_home_min_2',
        'end_asian_handicap_away_min_2',
        'end_asian_handicap_home_min_175',
        'end_asian_handicap_away_min_175',
        'end_asian_handicap_home_min_15',
        'end_asian_handicap_away_min_15',
        'end_asian_handicap_home_min_125',
        'end_asian_handicap_away_min_125',
        'end_asian_handicap_home_min_1',
        'end_asian_handicap_away_min_1',
        'end_asian_handicap_home_min_075',
        'end_asian_handicap_away_min_075',
        'end_asian_handicap_home_min_05',
        'end_asian_handicap_away_min_05',
        'end_asian_handicap_home_min_025',
        'end_asian_handicap_away_min_025',
        'end_asian_handicap_home_plus_0',
        'end_asian_handicap_away_plus_0',
        'end_asian_handicap_home_plus_025',
        'end_asian_handicap_away_plus_025',
        'end_asian_handicap_home_plus_05',
        'end_asian_handicap_away_plus_05',
        'end_asian_handicap_home_plus_075',
        'end_asian_handicap_away_plus_075',
        'end_asian_handicap_home_plus_1',
        'end_asian_handicap_away_plus_1',
        'end_asian_handicap_home_plus_125',
        'end_asian_handicap_away_plus_125',
        'end_asian_handicap_home_plus_15',
        'end_asian_handicap_away_plus_15',
        'end_asian_handicap_home_plus_175',
        'end_asian_handicap_away_plus_175',
        'end_asian_handicap_home_plus_2',
        'end_asian_handicap_away_plus_2',
        'end_asian_handicap_home_plus_225',
        'end_asian_handicap_away_plus_225',
        'end_asian_handicap_home_plus_25',
        'end_asian_handicap_away_plus_25',
        'end_asian_handicap_home_plus_275',
        'end_asian_handicap_away_plus_275',
        'end_asian_handicap_home_plus_3',
        'end_asian_handicap_away_plus_3',
        'end_asian_handicap_home_plus_325',
        'end_asian_handicap_away_plus_325',
        'end_asian_handicap_home_plus_35',
        'end_asian_handicap_away_plus_35',
        'end_asian_handicap_home_plus_375',
        'end_asian_handicap_away_plus_375',
        'end_asian_handicap_home_plus_4',
        'end_asian_handicap_away_plus_4',
        'end_asian_handicap_home_plus_425',
        'end_asian_handicap_away_plus_425',
        'end_asian_handicap_home_plus_45',
        'end_asian_handicap_away_plus_45',
        'end_asian_handicap_home_plus_475',
        'end_asian_handicap_away_plus_475',
        'end_asian_handicap_home_plus_5',
        'end_asian_handicap_away_plus_5',
        'end_asian_handicap_home_plus_525',
        'end_asian_handicap_away_plus_525',
        'end_asian_handicap_home_plus_55',
        'end_asian_handicap_away_plus_55',
        'end_asian_handicap_home_plus_575',
        'end_asian_handicap_away_plus_575',
        'end_asian_handicap_home_plus_6',
        'end_asian_handicap_away_plus_6',
        'end_asian_handicap_home_plus_625',
        'end_asian_handicap_away_plus_625',
        'end_asian_handicap_home_plus_65',
        'end_asian_handicap_away_plus_65',
        'end_asian_handicap_home_plus_675',
        'end_asian_handicap_away_plus_675',
        'pre_goals_overunder_over_05',
        'pre_goals_overunder_under_05',
        'pre_goals_overunder_over_075',
        'pre_goals_overunder_under_075',
        'pre_goals_overunder_over_10',
        'pre_goals_overunder_under_10',
        'pre_goals_overunder_over_125',
        'pre_goals_overunder_under_125',
        'pre_goals_overunder_over_15',
        'pre_goals_overunder_under_15',
        'pre_goals_overunder_over_175',
        'pre_goals_overunder_under_175',
        'pre_goals_overunder_over_20',
        'pre_goals_overunder_under_20',
        'pre_goals_overunder_over_225',
        'pre_goals_overunder_under_225',
        'pre_goals_overunder_over_25',
        'pre_goals_overunder_under_25',
        'pre_goals_overunder_over_275',
        'pre_goals_overunder_under_275',
        'pre_goals_overunder_over_30',
        'pre_goals_overunder_under_30',
        'pre_goals_overunder_over_325',
        'pre_goals_overunder_under_325',
        'pre_goals_overunder_over_35',
        'pre_goals_overunder_under_35',
        'pre_goals_overunder_over_375',
        'pre_goals_overunder_under_375',
        'pre_goals_overunder_over_40',
        'pre_goals_overunder_under_40',
        'pre_goals_overunder_over_425',
        'pre_goals_overunder_under_425',
        'pre_goals_overunder_over_45',
        'pre_goals_overunder_under_45',
        'pre_goals_overunder_over_475',
        'pre_goals_overunder_under_475',
        'pre_goals_overunder_over_50',
        'pre_goals_overunder_under_50',
        'pre_goals_overunder_over_525',
        'pre_goals_overunder_under_525',
        'pre_goals_overunder_over_55',
        'pre_goals_overunder_under_55',
        'pre_goals_overunder_over_575',
        'pre_goals_overunder_under_575',
        'pre_goals_overunder_over_60',
        'pre_goals_overunder_under_60',
        'pre_goals_overunder_over_625',
        'pre_goals_overunder_under_625',
        'pre_goals_overunder_over_65',
        'pre_goals_overunder_under_65',
        'pre_goals_overunder_over_675',
        'pre_goals_overunder_under_675',
        'pre_goals_overunder_over_70',
        'pre_goals_overunder_under_70',
        'pre_goals_overunder_over_75',
        'pre_goals_overunder_under_75',
        'pre_goals_overunder_over_85',
        'pre_goals_overunder_under_85',
        'pre_goals_overunder_over_95',
        'pre_goals_overunder_under_95',
        'end_goals_overunder_over_05',
        'end_goals_overunder_under_05',
        'end_goals_overunder_over_075',
        'end_goals_overunder_under_075',
        'end_goals_overunder_over_10',
        'end_goals_overunder_under_10',
        'end_goals_overunder_over_125',
        'end_goals_overunder_under_125',
        'end_goals_overunder_over_15',
        'end_goals_overunder_under_15',
        'end_goals_overunder_over_175',
        'end_goals_overunder_under_175',
        'end_goals_overunder_over_20',
        'end_goals_overunder_under_20',
        'end_goals_overunder_over_225',
        'end_goals_overunder_under_225',
        'end_goals_overunder_over_25',
        'end_goals_overunder_under_25',
        'end_goals_overunder_over_275',
        'end_goals_overunder_under_275',
        'end_goals_overunder_over_30',
        'end_goals_overunder_under_30',
        'end_goals_overunder_over_325',
        'end_goals_overunder_under_325',
        'end_goals_overunder_over_35',
        'end_goals_overunder_under_35',
        'end_goals_overunder_over_375',
        'end_goals_overunder_under_375',
        'end_goals_overunder_over_40',
        'end_goals_overunder_under_40',
        'end_goals_overunder_over_425',
        'end_goals_overunder_under_425',
        'end_goals_overunder_over_45',
        'end_goals_overunder_under_45',
        'end_goals_overunder_over_475',
        'end_goals_overunder_under_475',
        'end_goals_overunder_over_50',
        'end_goals_overunder_under_50',
        'end_goals_overunder_over_525',
        'end_goals_overunder_under_525',
        'end_goals_overunder_over_55',
        'end_goals_overunder_under_55',
        'end_goals_overunder_over_575',
        'end_goals_overunder_under_575',
        'end_goals_overunder_over_60',
        'end_goals_overunder_under_60',
        'end_goals_overunder_over_625',
        'end_goals_overunder_under_625',
        'end_goals_overunder_over_65',
        'end_goals_overunder_under_65',
        'end_goals_overunder_over_675',
        'end_goals_overunder_under_675',
        'end_goals_overunder_over_70',
        'end_goals_overunder_under_70',
        'end_goals_overunder_over_75',
        'end_goals_overunder_under_75',
        'end_goals_overunder_over_85',
        'end_goals_overunder_under_85',
        'end_goals_overunder_over_95',
        'end_goals_overunder_under_95',
        'pre_asian_handicap_first_half_home_min_175',
        'pre_asian_handicap_first_half_away_min_175',
        'pre_asian_handicap_first_half_home_min_15',
        'pre_asian_handicap_first_half_away_min_15',
        'pre_asian_handicap_first_half_home_min_125',
        'pre_asian_handicap_first_half_away_min_125',
        'pre_asian_handicap_first_half_home_min_1',
        'pre_asian_handicap_first_half_away_min_1',
        'pre_asian_handicap_first_half_home_min_075',
        'pre_asian_handicap_first_half_away_min_075',
        'pre_asian_handicap_first_half_home_min_05',
        'pre_asian_handicap_first_half_away_min_05',
        'pre_asian_handicap_first_half_home_min_025',
        'pre_asian_handicap_first_half_away_min_025',
        'pre_asian_handicap_first_half_home_plus_0',
        'pre_asian_handicap_first_half_away_plus_0',
        'pre_asian_handicap_first_half_home_plus_025',
        'pre_asian_handicap_first_half_away_plus_025',
        'pre_asian_handicap_first_half_home_plus_05',
        'pre_asian_handicap_first_half_away_plus_05',
        'pre_asian_handicap_first_half_home_plus_075',
        'pre_asian_handicap_first_half_away_plus_075',
        'pre_asian_handicap_first_half_home_plus_1',
        'pre_asian_handicap_first_half_away_plus_1',
        'pre_asian_handicap_first_half_home_plus_125',
        'pre_asian_handicap_first_half_away_plus_125',
        'pre_asian_handicap_first_half_home_plus_15',
        'pre_asian_handicap_first_half_away_plus_15',
        'pre_asian_handicap_first_half_home_plus_175',
        'pre_asian_handicap_first_half_away_plus_175',
        'end_asian_handicap_first_half_home_min_175',
        'end_asian_handicap_first_half_away_min_175',
        'end_asian_handicap_first_half_home_min_15',
        'end_asian_handicap_first_half_away_min_15',
        'end_asian_handicap_first_half_home_min_125',
        'end_asian_handicap_first_half_away_min_125',
        'end_asian_handicap_first_half_home_min_1',
        'end_asian_handicap_first_half_away_min_1',
        'end_asian_handicap_first_half_home_min_075',
        'end_asian_handicap_first_half_away_min_075',
        'end_asian_handicap_first_half_home_min_05',
        'end_asian_handicap_first_half_away_min_05',
        'end_asian_handicap_first_half_home_min_025',
        'end_asian_handicap_first_half_away_min_025',
        'end_asian_handicap_first_half_home_plus_0',
        'end_asian_handicap_first_half_away_plus_0',
        'end_asian_handicap_first_half_home_plus_025',
        'end_asian_handicap_first_half_away_plus_025',
        'end_asian_handicap_first_half_home_plus_05',
        'end_asian_handicap_first_half_away_plus_05',
        'end_asian_handicap_first_half_home_plus_075',
        'end_asian_handicap_first_half_away_plus_075',
        'end_asian_handicap_first_half_home_plus_1',
        'end_asian_handicap_first_half_away_plus_1',
        'end_asian_handicap_first_half_home_plus_125',
        'end_asian_handicap_first_half_away_plus_125',
        'end_asian_handicap_first_half_home_plus_15',
        'end_asian_handicap_first_half_away_plus_15',
        'end_asian_handicap_first_half_home_plus_175',
        'end_asian_handicap_first_half_away_plus_175',
        'pre_goals_overunder_first_half_over_05',
        'pre_goals_overunder_first_half_under_05',
        'pre_goals_overunder_first_half_over_075',
        'pre_goals_overunder_first_half_under_075',
        'pre_goals_overunder_first_half_over_10',
        'pre_goals_overunder_first_half_under_10',
        'pre_goals_overunder_first_half_over_125',
        'pre_goals_overunder_first_half_under_125',
        'pre_goals_overunder_first_half_over_15',
        'pre_goals_overunder_first_half_under_15',
        'pre_goals_overunder_first_half_over_175',
        'pre_goals_overunder_first_half_under_175',
        'pre_goals_overunder_first_half_over_20',
        'pre_goals_overunder_first_half_under_20',
        'pre_goals_overunder_first_half_over_225',
        'pre_goals_overunder_first_half_under_225',
        'pre_goals_overunder_first_half_over_25',
        'pre_goals_overunder_first_half_under_25',
        'pre_goals_overunder_first_half_over_275',
        'pre_goals_overunder_first_half_under_275',
        'pre_goals_overunder_first_half_over_30',
        'pre_goals_overunder_first_half_under_30',
        'pre_goals_overunder_first_half_over_325',
        'pre_goals_overunder_first_half_under_325',
        'pre_goals_overunder_first_half_over_35',
        'pre_goals_overunder_first_half_under_35',
        'pre_goals_overunder_first_half_over_375',
        'pre_goals_overunder_first_half_under_375',
        'end_goals_overunder_first_half_over_05',
        'end_goals_overunder_first_half_under_05',
        'end_goals_overunder_first_half_over_075',
        'end_goals_overunder_first_half_under_075',
        'end_goals_overunder_first_half_over_10',
        'end_goals_overunder_first_half_under_10',
        'end_goals_overunder_first_half_over_125',
        'end_goals_overunder_first_half_under_125',
        'end_goals_overunder_first_half_over_15',
        'end_goals_overunder_first_half_under_15',
        'end_goals_overunder_first_half_over_175',
        'end_goals_overunder_first_half_under_175',
        'end_goals_overunder_first_half_over_20',
        'end_goals_overunder_first_half_under_20',
        'end_goals_overunder_first_half_over_225',
        'end_goals_overunder_first_half_under_225',
        'end_goals_overunder_first_half_over_25',
        'end_goals_overunder_first_half_under_25',
        'end_goals_overunder_first_half_over_275',
        'end_goals_overunder_first_half_under_275',
        'end_goals_overunder_first_half_over_30',
        'end_goals_overunder_first_half_under_30',
        'end_goals_overunder_first_half_over_325',
        'end_goals_overunder_first_half_under_325',
        'end_goals_overunder_first_half_over_35',
        'end_goals_overunder_first_half_under_35',
        'end_goals_overunder_first_half_over_375',
        'end_goals_overunder_first_half_under_375',
        'pre_goals_overunder__second_half_over_05',
        'pre_goals_overunder__second_half_under_05',
        'pre_goals_overunder__second_half_over_075',
        'pre_goals_overunder__second_half_under_075',
        'pre_goals_overunder__second_half_over_10',
        'pre_goals_overunder__second_half_under_10',
        'pre_goals_overunder__second_half_over_125',
        'pre_goals_overunder__second_half_under_125',
        'pre_goals_overunder__second_half_over_15',
        'pre_goals_overunder__second_half_under_15',
        'pre_goals_overunder__second_half_over_175',
        'pre_goals_overunder__second_half_under_175',
        'pre_goals_overunder__second_half_over_20',
        'pre_goals_overunder__second_half_under_20',
        'pre_goals_overunder__second_half_over_225',
        'pre_goals_overunder__second_half_under_225',
        'pre_goals_overunder__second_half_over_25',
        'pre_goals_overunder__second_half_under_25',
        'pre_goals_overunder__second_half_over_275',
        'pre_goals_overunder__second_half_under_275',
        'pre_goals_overunder__second_half_over_30',
        'pre_goals_overunder__second_half_under_30',
        'pre_goals_overunder__second_half_over_325',
        'pre_goals_overunder__second_half_under_325',
        'pre_goals_overunder__second_half_over_35',
        'pre_goals_overunder__second_half_under_35',
        'pre_goals_overunder__second_half_over_375',
        'pre_goals_overunder__second_half_under_375',
        'end_goals_overunder__second_half_over_05',
        'end_goals_overunder__second_half_under_05',
        'end_goals_overunder__second_half_over_075',
        'end_goals_overunder__second_half_under_075',
        'end_goals_overunder__second_half_over_10',
        'end_goals_overunder__second_half_under_10',
        'end_goals_overunder__second_half_over_125',
        'end_goals_overunder__second_half_under_125',
        'end_goals_overunder__second_half_over_15',
        'end_goals_overunder__second_half_under_15',
        'end_goals_overunder__second_half_over_175',
        'end_goals_overunder__second_half_under_175',
        'end_goals_overunder__second_half_over_20',
        'end_goals_overunder__second_half_under_20',
        'end_goals_overunder__second_half_over_225',
        'end_goals_overunder__second_half_under_225',
        'end_goals_overunder__second_half_over_25',
        'end_goals_overunder__second_half_under_25',
        'end_goals_overunder__second_half_over_275',
        'end_goals_overunder__second_half_under_275',
        'end_goals_overunder__second_half_over_30',
        'end_goals_overunder__second_half_under_30',
        'end_goals_overunder__second_half_over_325',
        'end_goals_overunder__second_half_under_325',
        'end_goals_overunder__second_half_over_35',
        'end_goals_overunder__second_half_under_35',
        'end_goals_overunder__second_half_over_375',
        'end_goals_overunder__second_half_under_375',
        'pre_htft_double_home_home',
        'pre_htft_double_home_draw',
        'pre_htft_double_home_away',
        'pre_htft_double_draw_home',
        'pre_htft_double_draw_draw',
        'pre_htft_double_draw_away',
        'pre_htft_double_away_home',
        'pre_htft_double_away_draw',
        'pre_htft_double_away_away',
        'end_htft_double_home_home',
        'end_htft_double_home_draw',
        'end_htft_double_home_away',
        'end_htft_double_draw_home',
        'end_htft_double_draw_draw',
        'end_htft_double_draw_away',
        'end_htft_double_away_home',
        'end_htft_double_away_draw',
        'end_htft_double_away_away',
        'pre_both_teams_score_yes',
        'pre_both_teams_score_no',
        'end_both_teams_score_yes',
        'end_both_teams_score_no',
        'pre_both_teams_score__first_half_yes',
        'pre_both_teams_score__first_half_no',
        'end_both_teams_score__first_half_yes',
        'end_both_teams_score__first_half_no',
        'pre_both_teams_to_score__second_half_yes',
        'pre_both_teams_to_score__second_half_no',
        'end_both_teams_to_score__second_half_yes',
        'end_both_teams_to_score__second_half_no',
        'pre_results_both_teams_score_home_yes',
        'pre_results_both_teams_score_draw_yes',
        'pre_results_both_teams_score_away_yes',
        'pre_results_both_teams_score_home_no',
        'pre_results_both_teams_score_draw_no',
        'pre_results_both_teams_score_away_no',
        'end_results_both_teams_score_home_yes',
        'end_results_both_teams_score_draw_yes',
        'end_results_both_teams_score_away_yes',
        'end_results_both_teams_score_home_no',
        'end_results_both_teams_score_draw_no',
        'end_results_both_teams_score_away_no',
        'pre_to_score_in_both_halves_by_teams_home',
        'pre_to_score_in_both_halves_by_teams_away',
        'end_to_score_in_both_halves_by_teams_home',
        'end_to_score_in_both_halves_by_teams_away',
        'pre_total_goals_both_teams_to_score_over_yes_25',
        'pre_total_goals_both_teams_to_score_over_no_25',
        'pre_total_goals_both_teams_to_score_under_yes_25',
        'pre_total_goals_both_teams_to_score_under_no_25',
        'end_total_goals_both_teams_to_score_over_yes_25',
        'end_total_goals_both_teams_to_score_over_no_25',
        'end_total_goals_both_teams_to_score_under_yes_25',
        'end_total_goals_both_teams_to_score_under_no_25',
        'pre_both_teams_to_score_1st_half__2nd_half_yes_yes',
        'pre_both_teams_to_score_1st_half__2nd_half_yes_no',
        'pre_both_teams_to_score_1st_half__2nd_half_no_yes',
        'pre_both_teams_to_score_1st_half__2nd_half_no_no',
        'end_both_teams_to_score_1st_half__2nd_half_yes_yes',
        'end_both_teams_to_score_1st_half__2nd_half_yes_no',
        'end_both_teams_to_score_1st_half__2nd_half_no_yes',
        'end_both_teams_to_score_1st_half__2nd_half_no_no',
        'pre_highest_scoring_half_first',
        'pre_highest_scoring_half_draw',
        'pre_highest_scoring_half_second',
        'end_highest_scoring_half_first',
        'end_highest_scoring_half_draw',
        'end_highest_scoring_half_second',
        'pre_double_chance_home_draw',
        'pre_double_chance_home_away',
        'pre_double_chance_draw_away',
        'end_double_chance_home_draw',
        'end_double_chance_home_away',
        'end_double_chance_draw_away',
        'pre_double_chance__first_half_home_draw',
        'pre_double_chance__first_half_home_away',
        'pre_double_chance__first_half_draw_away',
        'end_double_chance__first_half_home_draw',
        'end_double_chance__first_half_home_away',
        'end_double_chance__first_half_draw_away',
        'pre_oddeven_odd',
        'pre_oddeven_even',
        'end_oddeven_odd',
        'end_oddeven_even',
        'pre_result_total_goals_home_over_35',
        'pre_result_total_goals_draw_over_35',
        'pre_result_total_goals_away_over_35',
        'pre_result_total_goals_home_under_35',
        'pre_result_total_goals_draw_under_35',
        'pre_result_total_goals_away_under_35',
        'pre_result_total_goals_home_over_25',
        'pre_result_total_goals_draw_over_25',
        'pre_result_total_goals_away_over_25',
        'pre_result_total_goals_home_under_25',
        'pre_result_total_goals_draw_under_25',
        'pre_result_total_goals_away_under_25',
        'end_result_total_goals_home_over_35',
        'end_result_total_goals_draw_over_35',
        'end_result_total_goals_away_over_35',
        'end_result_total_goals_home_under_35',
        'end_result_total_goals_draw_under_35',
        'end_result_total_goals_away_under_35',
        'end_result_total_goals_home_over_25',
        'end_result_total_goals_draw_over_25',
        'end_result_total_goals_away_over_25',
        'end_result_total_goals_home_under_25',
        'end_result_total_goals_draw_under_25',
        'end_result_total_goals_away_under_25',
        'pre_clean_sheet__home_yes',
        'pre_clean_sheet__home_no',
        'end_clean_sheet__home_yes',
        'end_clean_sheet__home_no',
        'pre_clean_sheet__away_yes',
        'pre_clean_sheet__away_no',
        'end_clean_sheet__away_yes',
        'end_clean_sheet__away_no',
        'pre_win_both_halves_home',
        'pre_win_both_halves_away',
        'end_win_both_halves_home',
        'end_win_both_halves_away',
        'pre_win_to_nil_home',
        'pre_win_to_nil_away',
        'end_win_to_nil_home',
        'end_win_to_nil_away',
        'pre_to_win_either_half_home',
        'pre_to_win_either_half_away',
        'end_to_win_either_half_home',
        'end_to_win_either_half_away',
        'pre_halftime_result_both_teams_score_home_yes',
        'pre_halftime_result_both_teams_score_draw_yes',
        'pre_halftime_result_both_teams_score_away_yes',
        'pre_halftime_result_both_teams_score_home_no',
        'pre_halftime_result_both_teams_score_draw_no',
        'pre_halftime_result_both_teams_score_away_no',
        'end_halftime_result_both_teams_score_home_yes',
        'end_halftime_result_both_teams_score_draw_yes',
        'end_halftime_result_both_teams_score_away_yes',
        'end_halftime_result_both_teams_score_home_no',
        'end_halftime_result_both_teams_score_draw_no',
        'end_halftime_result_both_teams_score_away_no',
        'pre_exact_goals_number_0',
        'pre_exact_goals_number_1',
        'pre_exact_goals_number_2',
        'pre_exact_goals_number_3',
        'pre_exact_goals_number_4',
        'pre_exact_goals_number_5',
        'pre_exact_goals_number_6',
        'pre_exact_goals_number_more_7',
        'end_exact_goals_number_0',
        'end_exact_goals_number_1',
        'end_exact_goals_number_2',
        'end_exact_goals_number_3',
        'end_exact_goals_number_4',
        'end_exact_goals_number_5',
        'end_exact_goals_number_6',
        'end_exact_goals_number_more_7',
        'pre_exact_goals_number__first_half_0',
        'pre_exact_goals_number__first_half_1',
        'pre_exact_goals_number__first_half_2',
        'pre_exact_goals_number__first_half_3',
        'pre_exact_goals_number__first_half_4',
        'pre_exact_goals_number__first_half_more_5',
        'end_exact_goals_number__first_half_0',
        'end_exact_goals_number__first_half_1',
        'end_exact_goals_number__first_half_2',
        'end_exact_goals_number__first_half_3',
        'end_exact_goals_number__first_half_4',
        'end_exact_goals_number__first_half_more_5',
        'pre_second_half_exact_goals_number_0',
        'pre_second_half_exact_goals_number_1',
        'pre_second_half_exact_goals_number_2',
        'pre_second_half_exact_goals_number_3',
        'pre_second_half_exact_goals_number_4',
        'pre_second_half_exact_goals_number_more_5',
        'end_second_half_exact_goals_number_0',
        'end_second_half_exact_goals_number_1',
        'end_second_half_exact_goals_number_2',
        'end_second_half_exact_goals_number_3',
        'end_second_half_exact_goals_number_4',
        'end_second_half_exact_goals_number_more_5',
        'pre_home_team_exact_goals_number_0',
        'pre_home_team_exact_goals_number_1',
        'pre_home_team_exact_goals_number_2',
        'pre_home_team_exact_goals_number_more_3',
        'end_home_team_exact_goals_number_0',
        'end_home_team_exact_goals_number_1',
        'end_home_team_exact_goals_number_2',
        'end_home_team_exact_goals_number_more_3',
        'pre_away_team_exact_goals_number_0',
        'pre_away_team_exact_goals_number_1',
        'pre_away_team_exact_goals_number_2',
        'pre_away_team_exact_goals_number_more_3',
        'end_away_team_exact_goals_number_0',
        'end_away_team_exact_goals_number_1',
        'end_away_team_exact_goals_number_2',
        'end_away_team_exact_goals_number_more_3',
        'pre_corners_winner_home',
        'pre_corners_winner_draw',
        'pre_corners_winner_away',
        'end_corners_winner_home',
        'end_corners_winner_draw',
        'end_corners_winner_away',
        'pre_10_overunder_over_05',
        'pre_10_overunder_under_05',
        'end_10_overunder_over_05',
        'end_10_overunder_under_05',
        'pre_cards_european_handicap_home_min_2',
        'pre_cards_european_handicap_draw_min_2',
        'pre_cards_european_handicap_away_min_2',
        'pre_cards_european_handicap_home_min_1',
        'pre_cards_european_handicap_draw_min_1',
        'pre_cards_european_handicap_away_min_1',
        'pre_cards_european_handicap_home_plus_0',
        'pre_cards_european_handicap_draw_plus_0',
        'pre_cards_european_handicap_away_plus_0',
        'pre_cards_european_handicap_home_plus_1',
        'pre_cards_european_handicap_draw_plus_1',
        'pre_cards_european_handicap_away_plus_1',
        'pre_cards_european_handicap_home_plus_2',
        'pre_cards_european_handicap_draw_plus_2',
        'pre_cards_european_handicap_away_plus_2',
        'end_cards_european_handicap_home_min_2',
        'end_cards_european_handicap_draw_min_2',
        'end_cards_european_handicap_away_min_2',
        'end_cards_european_handicap_home_min_1',
        'end_cards_european_handicap_draw_min_1',
        'end_cards_european_handicap_away_min_1',
        'end_cards_european_handicap_home_plus_0',
        'end_cards_european_handicap_draw_plus_0',
        'end_cards_european_handicap_away_plus_0',
        'end_cards_european_handicap_home_plus_1',
        'end_cards_european_handicap_draw_plus_1',
        'end_cards_european_handicap_away_plus_1',
        'end_cards_european_handicap_home_plus_2',
        'end_cards_european_handicap_draw_plus_2',
        'end_cards_european_handicap_away_plus_2',
        'pre_rcard_yes',
        'pre_rcard_no',
        'end_rcard_yes',
        'end_rcard_no',
        'pattern_total',
        'pre_ah_pattern',
        'pre_ah_pattern_mirror',
        'pre_gou_pattern',
        'end_ah_pattern',
        'end_ah_pattern_mirror',
        'end_gou_pattern',

        'one',
        'star',

        'stats_goals_home',
        'stats_goals_away',
        'stats_goals_home_against',
        'stats_goals_away_against',
        'stats_corners_home',
        'stats_corners_away',
        'stats_corners_home_against',
        'stats_corners_away_against',
        'stats_yellow_card_home',
        'stats_yellow_card_away',
        'stats_yellow_card_home_against',
        'stats_yellow_card_away_against',
        'stats_red_card_home',
        'stats_red_card_away',
        'stats_red_card_home_against',
        'stats_red_card_away_against',


        'stats_goals_home_as_x',
        'stats_goals_away_as_x',
        'stats_goals_home_against_as_x',
        'stats_goals_away_against_as_x',
        'stats_corners_home_as_x',
        'stats_corners_away_as_x',
        'stats_corners_home_against_as_x',
        'stats_corners_away_against_as_x',
        'stats_yellow_card_home_as_x',
        'stats_yellow_card_away_as_x',
        'stats_yellow_card_home_against_as_x',
        'stats_yellow_card_away_against_as_x',
        'stats_red_card_home_as_x',
        'stats_red_card_away_as_x',
        'stats_red_card_home_against_as_x',
        'stats_red_card_away_against_as_x'
    ];

    protected $hidden = ["deleted_at"];
}
