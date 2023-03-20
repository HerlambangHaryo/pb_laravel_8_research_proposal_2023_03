<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Jenssegers\Agent\Agent;
use DB;
 
use App\Models\Football_Fixture;
use App\Models\League;

class FixturesController extends Controller
{
    //
    public $template    = 'studio_v30';
    public $mode        = '';
    public $themecolor  = '';
    public $content     = 'Fixtures';
    public $type        = 'backend';

    public function matchfinished($leagueapi_id, $season)
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

            $view_file      = 'matchfinished';
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
                                ->whereIn('fixture_status', ['Match Finished Ended', 'Match Finished'])   
                                ->whereNull('deleted_at')   
                                ->orderby('date', 'desc')   
                                ->get();
                            
                  
            $first           = Football_Fixture::select(
                                    '*'
                                )
                                ->where('leagueapi_id', '=', $leagueapi_id) 
                                ->where('season', '=', $season)   
                                ->whereIn('fixture_status', ['Match Finished Ended', 'Match Finished'])   
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

    public function next($leagueapi_id, $season)
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

            $view_file      = 'next';
            $view           = define_view($this->template, $this->type, $this->content, $additional_view, $view_file);
            
        // ----------------------------------------------------------- Action 
            $date_start = date("Y-m-d H:i:s", strtotime("- 2 hour"));
            $date_end = date("Y-m-d", strtotime("+ 7 day"));

            $model_league   = League::where('leagueapi_id', '=', $leagueapi_id)
                                ->first();


            $data           = Football_Fixture::select(
                                    '*',
                                    DB::raw('DATE_ADD(date, INTERVAL 7 HOUR) as tanggal')
                                )
                                ->where('date', '>=', $date_start)
                                ->where('date', '<=', $date_end) 
                                ->where('leagueapi_id', '=', $leagueapi_id) 
                                ->where('season', '=', $season)    
                                ->whereNull('deleted_at')   
                                ->orderby('date', 'asc')   
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

    public function other($leagueapi_id, $season)
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

            $view_file      = 'matchfinished';
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
                                ->whereNotIn('fixture_status', ['Match Finished Ended', 'Match Finished', 'Not Started'])   
                                ->whereNull('deleted_at')   
                                ->orderby('date', 'desc')   
                                ->get();
                            
                  
            $first           = Football_Fixture::select(
                                    '*'
                                )
                                ->where('leagueapi_id', '=', $leagueapi_id) 
                                ->where('season', '=', $season)   
                                ->whereIn('fixture_status', ['Match Finished Ended', 'Match Finished'])   
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
}
