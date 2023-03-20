<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Jenssegers\Agent\Agent;
use DB;

use App\Models\Apiaccount; 
use App\Models\Football_Fixture;
use App\Models\League;
  

class RapidapiController extends Controller
{
    //
    public $template    = 'studio_v30';
    public $mode        = '';
    public $themecolor  = '';
    public $content     = 'Rapidapi';
    public $type        = 'backend';

    public function index()
    {
        // ----------------------------------------------------------- Auth
            // $user = auth()->user();   

        // ----------------------------------------------------------- Agent
            $agent              = new Agent(); 
            $additional_view    = define_additionalview($agent->isDesktop(), $agent->isMobile(), $agent->isTablet());

        // ----------------------------------------------------------- Initialize
            $panel_name     = ucwords(str_replace("_"," ", $this->content));  
            
            $template       = $this->template;
            $mode           = $this->mode;
            $themecolor     = $this->themecolor;
            $content        = $this->content;
            $active_as      = $content;

            $view_file      = 'data';
            $view           = define_view($this->template, $this->type, $this->content, $additional_view, $view_file);
            
        // ----------------------------------------------------------- Action 
            $data           = Apiaccount::whereNull('deleted_at')   
                                ->get();
                                    
        // ----------------------------------------------------------- Send
            return view($view,  
                compact(
                    'template', 
                    'mode', 
                    'themecolor',
                    'content', 
                    // 'user', 
                    'panel_name', 
                    'active_as',
                    'view_file', 
                    'data', 
                )
            );
        ///////////////////////////////////////////////////////////////
    } 

    public function reset($id)
    {
        // ----------------------------------------------------------- Auth
            // $user = auth()->user();  

        // ----------------------------------------------------------- Agent 
        // ----------------------------------------------------------- Initialize  
            $model_NON_Apiaccount       = Apiaccount::where('active', '=', 1); 

            $model_NON_Apiaccount->update([  
                'active'       => 4,      
            ]);       

 

        // ----------------------------------------------------------- Action  
            $model_Apiaccount           = Apiaccount::where('id', '=', $id); 

            $model_Apiaccount->update([ 
                'counter'      => 99,
                'active'       => 1,    
                'reset_date_at'       => now(),        
            ]);              

            
        // ----------------------------------------------------------- Send 
        
            return redirect()
                ->route('Rapidapi.index')
                ->with(['Success' => 'Data successfully saved!']);
        ///////////////////////////////////////////////////////////////
    } 

    public function on($id)
    {
        // ----------------------------------------------------------- Auth
            // $user = auth()->user();  

        // ----------------------------------------------------------- Agent 
        // ----------------------------------------------------------- Initialize  
 
            $model_NON_Apiaccount       = Apiaccount::where('active', '=', 1); 
            $model_NON_Apiaccount->update([  
                'active'       => 4,      
            ]);       


        // ----------------------------------------------------------- Action  
            
            $model_Apiaccount           = Apiaccount::where('id', '=', $id); 
            $model_Apiaccount->update([  
                'active'       => 1,      
            ]);              

            

        // ----------------------------------------------------------- Send 
        
            return redirect()
                ->route('Rapidapi.index')
                ->with(['Success' => 'Data successfully saved!']);
        ///////////////////////////////////////////////////////////////
    } 
 
    public function fixturesupdate($league,$season)
    {
        // ----------------------------------------------------------- Initialize 
            $apiaccount = Apiaccount::where('active', '=', 1)->first();
            
            $curl = curl_init();

            curl_setopt_array($curl, [
                CURLOPT_URL => "https://api-football-v1.p.rapidapi.com/v3/fixtures?league=$league&season=$season",
                CURLOPT_RETURNTRANSFER => true,
                CURLOPT_FOLLOWLOCATION => true,
                CURLOPT_ENCODING => "",
                CURLOPT_MAXREDIRS => 10,
                CURLOPT_TIMEOUT => 30,
                CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                CURLOPT_CUSTOMREQUEST => "GET",
                CURLOPT_HTTPHEADER => [
                    "x-rapidapi-host: api-football-v1.p.rapidapi.com",
                    "x-rapidapi-key: $apiaccount->key"
                ],
            ]);

            $response = curl_exec($curl);
            $err = curl_error($curl);

            curl_close($curl);
        // ----------------------------------------------------------- Action 
            if ($err) 
            {
                echo "cURL Error #:" . $err;
            } 
            else 
            {
                $data = $response; 
                $decode = json_decode($data, true); 

                foreach ($decode['response'] as $row) 
                { 
                    $fixtureapi_id      = $row['fixture']['id']; 
                    $model_fixture      = Football_Fixture::where('fixtureapi_id', '=', $fixtureapi_id); 
                    $first_fixture      = Football_Fixture::where('fixtureapi_id', '=', $fixtureapi_id)
                                            ->count();

                    $temp_date          = explode('+', $row['fixture']['date']);
                    $temp_date2         = str_replace('T', ' ', $temp_date[0]); 

                    $date               = date('Y-m-d H:i:s', strtotime($temp_date2));

                    
                    $fixture_status     = $row['fixture']['status']['long']; 
                    $referee            = $row['fixture']['referee']; 
                    $leagueapi_id       = $row['league']['id'];
                    $season             = $row['league']['season'];
                    $round              = $row['league']['round'];
                    $league_name        = $row['league']['name'];
                    $league_country     = $row['league']['country'];

                    $teams_home         = $row['teams']['home']['name'];
                    $teams_away         = $row['teams']['away']['name']; 

                    $goals_home         = $row['goals']['home'];
                    $goals_away         = $row['goals']['away'];

                    $score_halftime_home   = $row['score']['halftime']['home'];
                    $score_halftime_away   = $row['score']['halftime']['away'];

                    $score_fulltime_home    = $row['score']['fulltime']['home'];
                    $score_fulltime_away    = $row['score']['fulltime']['away'];

                    $score_extratime_home   = $row['score']['extratime']['home'];
                    $score_extratime_away   = $row['score']['extratime']['away'];

                    $score_penalty_home     = $row['score']['penalty']['home'];
                    $score_penalty_away     = $row['score']['penalty']['away']; 

                    $venue_name            = $row['fixture']['venue']['name'];
                    $venue_city            = $row['fixture']['venue']['city']; 

                    $fixture_elapsed            = $row['fixture']['status']['elapsed'];

                    $teams_home_id            = $row['teams']['home']['id'];
                    $teams_away_id            = $row['teams']['away']['id']; 

                    $teams_home_logo            = $row['teams']['home']['logo'];
                    $teams_away_logo            = $row['teams']['away']['logo']; 

                    $league_logo            = $row['league']['logo'];
                    $league_flag            = $row['league']['flag']; 

                    if(empty($first_fixture))
                    { 
                        Football_Fixture::create([
                            'venue_name'         => $venue_name,
                            'venue_city'         => $venue_city,

                            'fixture_elapsed'         => $fixture_elapsed,

                            'teams_home_id'         => $teams_home_id,
                            'teams_away_id'         => $teams_away_id,

                            'teams_home_logo'         => $teams_home_logo,
                            'teams_away_logo'         => $teams_away_logo,

                            'league_logo'         => $league_logo,
                            'league_flag'         => $league_flag,


                            'fixtureapi_id'         => $fixtureapi_id,
                            'date'                  => $date, 

                            'fixture_status'        => $fixture_status,

                            'referee'               => $referee,

                            'leagueapi_id'          => $leagueapi_id,
                            'season'                => $season,
                            'round'                 => $round,
                            'league_name'           => $league_name,
                            'league_country'        => $league_country,

                            'teams_home'            => $teams_home,
                            'teams_away'            => $teams_away, 

                            'goals_home'            => $goals_home,
                            'goals_away'            => $goals_away,

                            'score_halftime_home'  => $score_halftime_home,
                            'score_halftime_away'  => $score_halftime_away,

                            'score_fulltime_home'   => $score_fulltime_home,
                            'score_fulltime_away'   => $score_fulltime_away,

                            'score_extratime_home'  => $score_extratime_home,
                            'score_extratime_away'  => $score_extratime_away,
                            
                            'score_penalty_home'    => $score_penalty_home,
                            'score_penalty_away'    => $score_penalty_away,       
                        ]); 
                    }
                    else
                    {
                        $model_fixture->update([     
                            'venue_name'         => $venue_name,
                            'venue_city'         => $venue_city,

                            'fixture_elapsed'         => $fixture_elapsed,

                            'teams_home_id'         => $teams_home_id,
                            'teams_away_id'         => $teams_away_id,

                            'teams_home_logo'         => $teams_home_logo,
                            'teams_away_logo'         => $teams_away_logo,

                            'league_logo'         => $league_logo,
                            'league_flag'         => $league_flag,
 
                            'fixtureapi_id'         => $fixtureapi_id,
                            'date'                  => $date,  

                            'fixture_status'        => $fixture_status,
                            'referee'               => $referee,

                            'leagueapi_id'          => $leagueapi_id,
                            'season'                => $season,
                            'round'                 => $round,
                            'league_name'           => $league_name,
                            'league_country'        => $league_country,

                            'teams_home'            => $teams_home,
                            'teams_away'            => $teams_away, 

                            'goals_home'            => $goals_home,
                            'goals_away'            => $goals_away,

                            'score_halftime_home'  => $score_halftime_home,
                            'score_halftime_away'  => $score_halftime_away,

                            'score_fulltime_home'   => $score_fulltime_home,
                            'score_fulltime_away'   => $score_fulltime_away,

                            'score_extratime_home'  => $score_extratime_home,
                            'score_extratime_away'  => $score_extratime_away,
                            
                            'score_penalty_home'    => $score_penalty_home,
                            'score_penalty_away'    => $score_penalty_away,       
                        ]); 
                    }
                }

                $apiaccount_model = Apiaccount::where('active', '=', 1); 
                    $apiaccount_model->update([ 
                            'counter'        => $apiaccount->counter - 1, 
                        ]);
                

                $league_model = League::where('leagueapi_id', '=', $leagueapi_id); 
                    $league_model->update([ 
                            'tanggal_update_fixtures' => date("Y-m-d H:i:s"), 
                        ]); 

                return redirect()
                    ->route('Leagues.fixtures', [
                            'leagueapi_id' => $league, 
                            'season' => $season
                        ])
                    ->with(['Success' => 'Data successfully saved!']);
            }

        // ----------------------------------------------------------- Send

        ///////////////////////////////////////////////////////////////
    }

    public function prediction($fixtureapi_id)
    {
        // ----------------------------------------------------------- Initialize 
            
            $apiaccount = Apiaccount::where('active', '=', 1)->first();

            if($apiaccount->counter > 0)
            {

                $curl = curl_init();

                curl_setopt_array($curl, [
                    CURLOPT_URL => "https://api-football-v1.p.rapidapi.com/v3/predictions?fixture=$fixtureapi_id",
                    CURLOPT_RETURNTRANSFER => true,
                    CURLOPT_FOLLOWLOCATION => true,
                    CURLOPT_ENCODING => "",
                    CURLOPT_MAXREDIRS => 10,
                    CURLOPT_TIMEOUT => 30,
                    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                    CURLOPT_CUSTOMREQUEST => "GET",
                    CURLOPT_HTTPHEADER => [
                        "x-rapidapi-host: api-football-v1.p.rapidapi.com",
                        "x-rapidapi-key: $apiaccount->key"
                    ],
                ]);

                $response = curl_exec($curl);
                $err = curl_error($curl);

                curl_close($curl);

                if ($err) {
                    $data = "cURL Error #:" . $err;
                } else {
                    $data = $response;


                    $decode = json_decode($data, true);
 

                    $model_fixture = Football_Fixture::where('fixtureapi_id', '=',$fixtureapi_id);
                    $first_fixture = Football_Fixture::where('fixtureapi_id', '=',$fixtureapi_id)
                                        ->first();

                    foreach ($decode['response'] as $row) 
                    {
                        $model_fixture->update([ 
 

                            'prediction_winner_name'        => $row['predictions']['winner']['name'],
                            'prediction_winner_comment'     => $row['predictions']['winner']['comment'],

                            'prediction_underover'          => $row['predictions']['under_over'],

                            'prediction_goals_home'         => $row['predictions']['goals']['home'],
                            'prediction_goals_away'         => $row['predictions']['goals']['away'],

                            'prediction_advice'             => $row['predictions']['advice'],

                            'prediction_percent_home'       => str_replace('%', '', $row['predictions']['percent']['home']),
                            'prediction_percent_draw'       => str_replace('%', '', $row['predictions']['percent']['draw']),
                            'prediction_percent_away'       => str_replace('%', '', $row['predictions']['percent']['away']),

                            'comparison_form_home'          => str_replace('%', '', $row['comparison']['form']['home']),
                            'comparison_form_away'          => str_replace('%', '', $row['comparison']['form']['away']),

                            'comparison_att_home'           => str_replace('%', '', $row['comparison']['att']['home']),
                            'comparison_att_away'           => str_replace('%', '', $row['comparison']['att']['away']),

                            'comparison_def_home'           => str_replace('%', '', $row['comparison']['def']['home']),
                            'comparison_def_away'           => str_replace('%', '', $row['comparison']['def']['away']),

                            'comparison_hh_home'           => str_replace('%', '', $row['comparison']['h2h']['home']),
                            'comparison_hh_away'           => str_replace('%', '', $row['comparison']['h2h']['away']),
                            
                            'comparison_goals_home'         => str_replace('%', '', $row['comparison']['goals']['home']),
                            'comparison_goals_away'         => str_replace('%', '', $row['comparison']['goals']['away']),
                            
                            'comparison_poisson_distribution_home'         => str_replace('%', '', $row['comparison']['poisson_distribution']['home']),
                            'comparison_poisson_distribution_away'         => str_replace('%', '', $row['comparison']['poisson_distribution']['away']),
                            
                            'comparison_total_home'         => str_replace('%', '', $row['comparison']['total']['home']),
                            'comparison_total_away'         => str_replace('%', '', $row['comparison']['total']['away'])
                            
                        ]);
 
                    }
        

                }

                // ----------------------------------------------------------- Action 

                    $apiaccount_model = Apiaccount::where('active', '=', 1);

                    $apiaccount_model->update([ 
                            'counter'        => $apiaccount->counter - 1, 
                        ]);

                // ----------------------------------------------------------- Send
                    return redirect()
                        ->route('Patternlists.pattern_pre', 
                        [
                            'id' => $first_fixture->id,
                            'leagueapi_id' => $first_fixture->leagueapi_id,

                        ] ); 
            }
            else
            {
                // ----------------------------------------------------------- Send
                    return redirect()
                        ->route('Countries.index'); 

            }

        ///////////////////////////////////////////////////////////////
    }

}
