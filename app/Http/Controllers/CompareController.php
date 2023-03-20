<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Jenssegers\Agent\Agent;
use DB;

use App\Models\Football_Fixture;

class CompareController extends Controller
{
    //
    public $template    = 'studio_v30';
    public $mode        = '';
    public $themecolor  = '';
    public $content     = 'Compare';
    public $type        = 'backend'; 
 
    public function fixture($fixtureapi_id, $leagueapi_id, $status)
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
            $first      = Football_Fixture::select(
                                '*',
                                DB::raw('DATE_ADD(date, INTERVAL 7 HOUR) as tanggal')
                            )
                            ->where('fixtureapi_id', '=', $fixtureapi_id)  
                            ->whereNull('deleted_at')    
                            ->first(); 

            $data       = Football_Fixture::compareQuery($leagueapi_id, 
                                $first->pre_ah_pattern, 
                                $first->pre_gou_pattern, 
                                $first->end_ah_pattern, 
                                $first->end_gou_pattern, 
                                $status);

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
                    'first', 
                    'status', 
                    'leagueapi_id'
                )
            );
        ///////////////////////////////////////////////////////////////
    } 

    public function all_odds($fixtureapi_id)
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

            $view_file      = 'all_odds';
            $view           = define_view($this->template, $this->type, $this->content, $additional_view, $view_file);
            
        // ----------------------------------------------------------- Action   
            $first      = Football_Fixture::select(
                                '*',
                                DB::raw('DATE_ADD(date, INTERVAL 7 HOUR) as tanggal')
                            )
                            ->where('fixtureapi_id', '=', $fixtureapi_id)  
                            ->whereNull('deleted_at')    
                            ->first(); 

            $data       = array();

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
                    'first',  
                )
            );
        ///////////////////////////////////////////////////////////////
    } 

}
