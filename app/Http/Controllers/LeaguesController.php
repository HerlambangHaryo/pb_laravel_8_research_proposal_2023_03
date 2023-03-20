<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Jenssegers\Agent\Agent;
use DB;
 
use App\Models\Football_Fixture;
use App\Models\League;
  

class LeaguesController extends Controller
{
    //
    public $template    = 'studio_v30';
    public $mode        = '';
    public $themecolor  = '';
    public $content     = 'Leagues';
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

    public function country($country)
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

            $view_file      = 'country';
            $view           = define_view($this->template, $this->type, $this->content, $additional_view, $view_file);
            
        // ----------------------------------------------------------- Action 
            $data           = Football_Fixture::select(
                                    'leagueapi_id', 
                                    'league_name',  
                                    'season' 
                                )
                                ->where('league_country', '=', $country)
                                ->groupby('leagueapi_id', 'league_name',   'season')    
                                ->whereNull('deleted_at')   
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

    public function fixtures($leagueapi_id, $season)
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

            $view_file      = 'fixtures';
            $view           = define_view($this->template, $this->type, $this->content, $additional_view, $view_file);
            
        // ----------------------------------------------------------- Action 
            $model_league   = League::where('leagueapi_id', '=', $leagueapi_id)
                                ->first();


            $data           = Football_Fixture::select(
                                    '*',
                                    DB::raw('DATE_ADD(date, INTERVAL 7 HOUR) as tanggal')
                                )
                                ->where('leagueapi_id', '=', $leagueapi_id) 
                                ->where('season', '=', $season)   
                                ->whereIN('fixture_status', ['Not Started', 'Not Started Yet'])   
                                ->whereNull('deleted_at')   
                                ->orderby('date')   
                                ->get();
                  
            $first           = Football_Fixture::select(
                                    '*'
                                )
                                ->where('leagueapi_id', '=', $leagueapi_id) 
                                ->where('season', '=', $season)    
                                ->whereNull('deleted_at')   
                                ->orderby('date')   
                                ->first();          
                                    
            $count_two      = Football_Fixture::where('one', '=', 2)
                                ->whereNull('deleted_at')   
                                ->count();        
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
                    'model_league', 
                    'leagueapi_id', 
                    'season', 
                    'count_two', 
                    'first'
                )
            );
        ///////////////////////////////////////////////////////////////
    } 

    
    public function setbookmakers($bookmakersapi_id, $leagueapi_id, $season)
    {
        // ----------------------------------------------------------- Auth
            // $user = auth()->user();  

        // ----------------------------------------------------------- Agent 
        // ----------------------------------------------------------- Initialize  
            $model_league         = League::where('leagueapi_id', '=', $leagueapi_id); 

            if($bookmakersapi_id == 8)
            {
                $bookmakersapi_id   = 8;
                $bookmakers_name    = 'Bet365';
            }
            elseif($bookmakersapi_id == 11)
            {
                $bookmakersapi_id   = 11;
                $bookmakers_name    = '1xBet';
            }
        // ----------------------------------------------------------- Action  
            $model_league->update([ 
                'bookmakersapi_id'      => $bookmakersapi_id,
                'bookmakers_name'       => $bookmakers_name,      
            ]);              
        // ----------------------------------------------------------- Send  
            return redirect()
                ->route('Leagues.fixtures', [
                                                'leagueapi_id' => $leagueapi_id, 
                                                'season' => $season
                                            ])
                ->with(['Success' => 'Data successfully saved!']);
        ///////////////////////////////////////////////////////////////
    } 
}
