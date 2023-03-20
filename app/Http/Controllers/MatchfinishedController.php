<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Jenssegers\Agent\Agent;
use DB;

use App\Models\Football_Fixture;


class MatchfinishedController extends Controller
{
    //
    public $template    = 'studio_v30';
    public $mode        = '';
    public $themecolor  = '';
    public $content     = 'Matchfinished';
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
                                '*'
                            )
                            ->where('date', '>=', $date_start)
                            ->where('date', '<=', $date_end)  
                            ->whereIN('fixture_status', ['Match Finished', 'Match Finished Ended'])  
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
}
