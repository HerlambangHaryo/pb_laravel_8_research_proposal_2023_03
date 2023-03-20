<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Jenssegers\Agent\Agent;
use DB;

use App\Models\Football_Fixture;
  

class DashboardController extends Controller
{
    //
    public $template    = 'studio_v30';
    public $mode        = '';
    public $themecolor  = '';
    public $content     = 'Dashboard';
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
                            ->whereIN('leagueapi_id', 
                                [
                                    12, 39, 40, 41, 42, 43, 45, 48, 61, 66, 78, 81, 357, 135,
                                    88, 407, 90, 94, 96, 179, 140, 203, 207, 2, 3, 848, 147,
                                    90, 143 
                                ])  
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
                            ->whereIN('leagueapi_id', 
                                [
                                    12, 39, 40, 41, 42, 43, 45, 48, 61, 66, 78, 81, 357, 135,
                                    88, 407, 90, 94, 96, 179, 140, 203, 207, 2, 3, 848, 147,
                                    90, 143
                                ])    
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

            $view_file      = 'data';
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
                            ->whereIN('leagueapi_id', 
                                [
                                    12, 39, 40, 41, 42, 43, 45, 48, 61, 66, 78, 81, 357, 135,
                                    88, 407, 90, 94, 96, 179, 140, 203, 207, 2, 3, 848 , 147,
                                    90, 143  
                                ])  
                            ->whereNull('deleted_at')
                            ->orderby('leagueapi_id')      
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

}
