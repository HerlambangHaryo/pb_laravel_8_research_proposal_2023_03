<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Jenssegers\Agent\Agent;
use DB;

use App\Models\Football_Fixture;

class StarringController extends Controller
{
    //
    public $template    = 'studio_v30';
    public $mode        = '';
    public $themecolor  = '';
    public $content     = 'Starring';
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

            $view_file      = 'data_ags';
            $view           = define_view($this->template, $this->type, $this->content, $additional_view, $view_file);
            
        // ----------------------------------------------------------- Action 
            $date_start = define_date("start");
            $date_end = define_date("end");

            $data       = Football_Fixture::select(
                                '*',
                                DB::raw('DATE_ADD(date, INTERVAL 7 HOUR) as tanggal')
                            )
                            ->where('date', '>=', $date_start)
                            ->where('date', '<=', $date_end) 
                            ->whereIN('fixture_status', ['Not Started', 'Not Started Yet'])  
                            ->whereNotNull('star')   
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

    

    public function leaguesgroup()
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

            $view_file      = 'leaguesgroup';
            $view           = define_view($this->template, $this->type, $this->content, $additional_view, $view_file);
            
        // ----------------------------------------------------------- Action 
            $date_start = define_date("start");
            $date_end = define_date("end");
        
            $data       = Football_Fixture::select(
                                'leagueapi_id', 
                                'league_name', 
                                'season', 
                                'league_country',
                                DB::raw('COUNT(*) as count')
                            )
                            ->where('date', '>=', $date_start)
                            ->where('date', '<=', $date_end) 
                            ->whereIN('fixture_status', ['Not Started', 'Not Started Yet'])  
                            ->whereNotNull('star')   
                            ->whereNull('deleted_at')   
                            ->groupby('leagueapi_id', 'league_name', 'season', 'league_country')
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

    public function timegroup()
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

            $view_file      = 'timegroup';
            $view           = define_view($this->template, $this->type, $this->content, $additional_view, $view_file);
            
        // ----------------------------------------------------------- Action 
            $date_start = define_date("start");
            $date_end = define_date("end");
        
            $data       = Football_Fixture::select(
                                DB::raw('year( DATE_ADD(date, INTERVAL 7 HOUR) ) as yearx'),
                                DB::raw('month( DATE_ADD(date, INTERVAL 7 HOUR) ) as monthx'),
                                DB::raw('day( DATE_ADD(date, INTERVAL 7 HOUR) ) as dayx'),
                                DB::raw('hour( DATE_ADD(date, INTERVAL 7 HOUR) ) as hourx'),
                                DB::raw('minute( DATE_ADD(date, INTERVAL 7 HOUR) ) as minutex'),
                                DB::raw('COUNT(*) as count')
                            )
                            ->where('date', '>=', $date_start)
                            ->where('date', '<=', $date_end) 
                            ->whereIN('fixture_status', ['Not Started', 'Not Started Yet'])  
                            ->whereNotNull('star')   
                            ->whereNull('deleted_at')   
                            ->groupby( DB::raw('year( DATE_ADD(date, INTERVAL 7 HOUR) )') )
                            ->groupby( DB::raw('month( DATE_ADD(date, INTERVAL 7 HOUR) )') )
                            ->groupby( DB::raw('day( DATE_ADD(date, INTERVAL 7 HOUR) )') )
                            ->groupby( DB::raw('hour( DATE_ADD(date, INTERVAL 7 HOUR) )') )
                            ->groupby( DB::raw('minute( DATE_ADD(date, INTERVAL 7 HOUR) )') )
                            ->orderby('date')    
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

    public function time($year, $month, $day, $hour, $minute)
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

            $view_file      = 'data_ags';
            $view           = define_view($this->template, $this->type, $this->content, $additional_view, $view_file);
            
        // ----------------------------------------------------------- Action 
            $date_start = define_date("start");
            $date_end = define_date("end");
            
            $data       = Football_Fixture::select(
                                '*',
                                DB::raw('DATE_ADD(date, INTERVAL 7 HOUR) as tanggal')
                            )
                            ->where( DB::raw('year( DATE_ADD(date, INTERVAL 7 HOUR) )'), '=', $year) 
                            ->where( DB::raw('month( DATE_ADD(date, INTERVAL 7 HOUR) )'), '=', $month) 
                            ->where( DB::raw('day( DATE_ADD(date, INTERVAL 7 HOUR) )'), '=', $day) 
                            ->where( DB::raw('hour( DATE_ADD(date, INTERVAL 7 HOUR) )'), '=', $hour) 
                            ->where( DB::raw('minute( DATE_ADD(date, INTERVAL 7 HOUR) )'), '=', $minute) 
                            ->whereIN('fixture_status', ['Not Started', 'Not Started Yet'])    
                            ->whereNotNull('star')   
                            ->whereNull('deleted_at')
                            ->orderby('leagueapi_id')      
                            ->orderby('date')   
                            ->get(); 
                                
            $count_one      = Football_Fixture::where('one', '=', 1)
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
                    'date_start', 
                    'date_end', 
                    'count_one', 
                )
            );
        ///////////////////////////////////////////////////////////////
    } 
}
