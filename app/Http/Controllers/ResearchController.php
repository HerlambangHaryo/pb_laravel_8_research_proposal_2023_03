<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Jenssegers\Agent\Agent;
use DB;

use App\Models\Football_Fixture; 
use App\Models\League;

class ResearchController extends Controller
{
    //
    public $template    = 'studio_v30';
    public $mode        = '';
    public $themecolor  = '';
    public $content     = 'Research';
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
            $date_start = date("Y-m-d H:i:s", strtotime("- 2 hour"));
            $date_end = date("Y-m-d", strtotime("+ 1 day"));

            $data       = Football_Fixture::select(
                                '*',
                                DB::raw('DATE_ADD(date, INTERVAL 7 HOUR) as tanggal')
                            )
                            ->where('date', '>=', $date_start)
                            ->where('date', '<=', $date_end) 
                            ->where('fixture_status', '=', 'Not Started')
                            ->whereNull('deleted_at')   
                            ->orderby('date')   
                            ->orderby('leagueapi_id')   
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
                    'date_start', 
                    'date_end', 
                )
            );
        ///////////////////////////////////////////////////////////////
    } 

    public function agsleague($leagueapi_id)
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

            $view_file      = 'agsleague';
            $view           = define_view($this->template, $this->type, $this->content, $additional_view, $view_file);
            
        // ----------------------------------------------------------- Action  
            $model_league   = League::where('leagueapi_id', '=', $leagueapi_id)
                                ->first();


            $data           = Football_Fixture::select(
                                    '*',
                                    DB::raw('DATE_ADD(date, INTERVAL 7 HOUR) as tanggal')
                                )
                                ->where('leagueapi_id', '=', $leagueapi_id)  
                                ->whereNotNull('pre_anytime_goal_scorer')    
                                ->whereNull('deleted_at')   
                                ->orderby('date')   
                                ->get();
                  
            $first           = Football_Fixture::select(
                                    '*'
                                )
                                ->where('leagueapi_id', '=', $leagueapi_id)  
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
                    'count_two', 
                    'first'
                )
            );
        ///////////////////////////////////////////////////////////////
    } 

    public function agsfixture($fixtureapi_id)
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

            $view_file      = 'agsleague';
            $view           = define_view($this->template, $this->type, $this->content, $additional_view, $view_file);
            
        // ----------------------------------------------------------- Action   


            $data           = Football_Fixture::select(
                                    '*',
                                    DB::raw('DATE_ADD(date, INTERVAL 7 HOUR) as tanggal')
                                )
                                ->where('fixtureapi_id', '=', $fixtureapi_id)  
                                ->whereNotNull('pre_anytime_goal_scorer')    
                                ->whereNull('deleted_at')   
                                ->orderby('date')   
                                ->get();
                  
            $first           = Football_Fixture::select(
                                    '*'
                                )
                                ->where('fixtureapi_id', '=', $fixtureapi_id)  
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
                    'count_two', 
                    'first'
                )
            );
        ///////////////////////////////////////////////////////////////
    } 

    public function csleague($leagueapi_id)
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

            $view_file      = 'csleague';
            $view           = define_view($this->template, $this->type, $this->content, $additional_view, $view_file);
            
        // ----------------------------------------------------------- Action  
            $model_league   = League::where('leagueapi_id', '=', $leagueapi_id)
                                ->first();


            $data           = Football_Fixture::select(
                                    '*',
                                    DB::raw('DATE_ADD(date, INTERVAL 7 HOUR) as tanggal')
                                )
                                ->where('leagueapi_id', '=', $leagueapi_id)  
                                ->whereNotNull('pre_exact_score')    
                                ->whereNull('deleted_at')   
                                ->orderby('date')   
                                ->get();
                  
            $first           = Football_Fixture::select(
                                    '*'
                                )
                                ->where('leagueapi_id', '=', $leagueapi_id)  
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
                    'count_two', 
                    'first'
                )
            );
        ///////////////////////////////////////////////////////////////
    } 

    public function csfixture($fixtureapi_id)
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

            $view_file      = 'csfixture';
            $view           = define_view($this->template, $this->type, $this->content, $additional_view, $view_file);
            
        // ----------------------------------------------------------- Action   


            $data           = Football_Fixture::select(
                                    '*',
                                    DB::raw('DATE_ADD(date, INTERVAL 7 HOUR) as tanggal')
                                )
                                ->where('fixtureapi_id', '=', $fixtureapi_id)  
                                ->whereNotNull('pre_exact_score')    
                                ->whereNull('deleted_at')   
                                ->orderby('date')   
                                ->get();
                  
            $first           = Football_Fixture::select(
                                    '*'
                                )
                                ->where('fixtureapi_id', '=', $fixtureapi_id)  
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
                    'count_two', 
                    'first'
                )
            );
        ///////////////////////////////////////////////////////////////
    } 
}
