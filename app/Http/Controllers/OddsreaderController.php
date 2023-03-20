<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Jenssegers\Agent\Agent;
use DB;

use App\Models\Football_Fixture;

class OddsreaderController extends Controller
{
    //
    public $template    = 'studio_v30';
    public $mode        = '';
    public $themecolor  = '';
    public $content     = 'Oddsreader';
    public $type        = 'backend'; 

    public function status($id)
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

            $data0       = Football_Fixture::select(
                                '*',
                                DB::raw('DATE_ADD(date, INTERVAL 7 HOUR) as tanggal')
                            )
                            ->where('date', '>=', $date_start)
                            ->where('date', '<=', $date_end) 
                            # ->whereIN('fixture_status', ['Not Started', 'Not Started Yet'])  
                            ->where('on_predefine', 'like', '%'.$id.'%')  
                            ->whereNull('deleted_at')   
                            ->orderby('date')   
                            ->orderby('leagueapi_id');

                            
            $data       = Football_Fixture::select(
                                '*',
                                DB::raw('DATE_ADD(date, INTERVAL 7 HOUR) as tanggal')
                            )
                            ->where('date', '>=', $date_start)
                            ->where('date', '<=', $date_end) 
                            # ->whereIN('fixture_status', ['Not Started', 'Not Started Yet'])  
                            ->where('on_enddefine', 'like', '%'.$id.'%')  
                            ->whereNull('deleted_at')   
                            ->orderby('leagueapi_id')   
                            ->union($data0)   
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
                    'id', 
                )
            );
        ///////////////////////////////////////////////////////////////
    }  

    public function research($id)
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

            if($id == '1stHwin') { $idx = '1stwin'; }
            elseif($id == '1stXwin') { $idx = '1stwin'; }
            elseif($id == '1stAwin') { $idx = '1stwin'; } 

            elseif($id == '2ndHwin') { $idx = '2ndwin'; }
            elseif($id == '2ndXwin') { $idx = '2ndwin'; }
            elseif($id == '2ndAwin') { $idx = '2ndwin'; } 

            
            elseif($id == 'H-Both') { $idx = 'W-Both'; }
            elseif($id == 'A-Both') { $idx = 'W-Both'; } 
            
            $view_file      = $idx;
            $view           = define_view($this->template, $this->type, $this->content, $additional_view, $view_file);
            
        // ----------------------------------------------------------- Action  
            $date_start = define_date("start");
            $date_end = define_date("end");

            $data0       = Football_Fixture::select(
                                '*',
                                DB::raw('DATE_ADD(date, INTERVAL 7 HOUR) as tanggal')
                            ) 
                            ->whereIN('fixture_status', ['Match Finished', 'Match Finished Ended'])  
                            ->where('on_predefine', 'like', '%'.$id.'%')  
                            ->whereNull('deleted_at')   
                            ->orderby('date')   
                            ->orderby('leagueapi_id');

                            
            $data       = Football_Fixture::select(
                                '*',
                                DB::raw('DATE_ADD(date, INTERVAL 7 HOUR) as tanggal')
                            ) 
                            ->whereIN('fixture_status', ['Match Finished', 'Match Finished Ended'])  
                            ->where('on_enddefine', 'like', '%'.$id.'%')  
                            ->whereNull('deleted_at')   
                            ->orderby('leagueapi_id')   
                            ->union($data0)   
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

    
    public function double_research($id, $id2)
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
 
            
            $view_file      = $id."_".$id2;
            $view           = define_view($this->template, $this->type, $this->content, $additional_view, $view_file);
            
        // ----------------------------------------------------------- Action  
            $date_start = define_date("start");
            $date_end = define_date("end");
 
                            
            $data0       = Football_Fixture::select(
                                '*',
                                DB::raw('DATE_ADD(date, INTERVAL 7 HOUR) as tanggal')
                            ) 
                            ->whereIN('fixture_status', ['Match Finished', 'Match Finished Ended'])  
                            ->where('on_predefine', 'like', '%'.$id.'%')   
                            ->where('on_predefine', 'like', '%'.$id2.'%')  
                            ->whereNull('deleted_at')   
                            ->orderby('date')   
                            ->orderby('leagueapi_id');

                            
            $data       = Football_Fixture::select(
                                '*',
                                DB::raw('DATE_ADD(date, INTERVAL 7 HOUR) as tanggal')
                            ) 
                            ->whereIN('fixture_status', ['Match Finished', 'Match Finished Ended'])  
                            ->where('on_enddefine', 'like', '%'.$id.'%')   
                            ->where('on_enddefine', 'like', '%'.$id2.'%')  
                            ->whereNull('deleted_at')   
                            ->orderby('leagueapi_id')   
                            ->union($data0)    
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
