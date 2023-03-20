<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Jenssegers\Agent\Agent;
use DB;

use App\Models\Football_Fixture;

class DatedoneController extends Controller
{
    //
    public $template    = 'studio_v30';
    public $mode        = '';
    public $themecolor  = '';
    public $content     = 'Datedone';
    public $type        = 'backend'; 
  
    public function day($id)
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
            $id_start = $id - 1;  
            $id_end = $id - 2;

            $date_start = date("Y-m-d", strtotime("- ".$id_start." day"));
            $date_end = date("Y-m-d", strtotime("- ".$id_end." day")); 

            $data       = Football_Fixture::select(
                                '*',
                                DB::raw('DATE_ADD(date, INTERVAL 7 HOUR) as tanggal')
                            )
                            ->where('date', '>=', $date_start)
                            ->where('date', '<=', $date_end)  
                            ->whereNull('deleted_at')   
                            ->whereNull('end_odd_updated_at')   
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
 
    public function league($leagueapi_id)
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
            $date_start = date("Y-m-d H:i:s", strtotime("- 7 day"));
            $date_end = date("Y-m-d H:i:s" );
        
            $data       = Football_Fixture::select(
                                '*',
                                DB::raw('DATE_ADD(date, INTERVAL 7 HOUR) as tanggal')
                            )
                            ->where('date', '>=', $date_start)
                            ->where('date', '<=', $date_end)  
                            ->where('leagueapi_id', '=', $leagueapi_id)
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
            $date_start = date("Y-m-d H:i:s", strtotime("- 7 day"));
            $date_end = date("Y-m-d H:i:s" );
        
            $data       = Football_Fixture::select(
                                'leagueapi_id', 
                                'league_name', 
                                'season', 
                                'league_country', 
                            )
                            ->where('date', '>=', $date_start)
                            ->where('date', '<=', $date_end)  
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

}
