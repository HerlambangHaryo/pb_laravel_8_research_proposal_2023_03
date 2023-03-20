<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Jenssegers\Agent\Agent;
use DB;

use App\Models\Football_Fixture;
use App\Models\Pattern_list;
use App\Models\League;
use App\Models\Bet;

class PatternlistsController extends Controller
{
    //
    public $template    = 'studio_v30';
    public $mode        = '';
    public $themecolor  = '';
    public $content     = 'Patternlists';
    public $type        = 'backend';

    public function leagues($leagueapi_id)
    {
        // ----------------------------------------------------------- Auth
            $user = auth()->user();  

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

            $view_file      = 'leagues';
            $view           = define_view($this->template, $this->type, $this->content, $additional_view, $view_file);
            
        // ----------------------------------------------------------- Action  
            $data         = Pattern_list::where('leagueapi_id', '=', $leagueapi_id)
                                        ->get();
 

                                    
        // ----------------------------------------------------------- Send
            return view($view,  
                compact(
                    'template', 
                    'mode', 
                    'themecolor',
                    'content', 
                    'user', 
                    'panel_name', 
                    'active_as',
                    'view_file', 
                    'data',   
                )
            );
        ///////////////////////////////////////////////////////////////
    } 

    public function pattern($id, $leagueapi_id)
    {
        // ----------------------------------------------------------- Auth
            $user = auth()->user();  

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
            $first          = Football_fixture::select(
                                                '*',
                                                DB::raw('DATE_ADD(date, INTERVAL 7 HOUR) as tanggal')
                                            )
                                            ->where('id', '=', $id)
                                            ->first(); 

            $league         = League::where('leagueapi_id', '=', $leagueapi_id)
                                        ->first();

            $league_model_2 = League::select('leagueapi_id')
                                        ->where('leagueapi_id', '!=', $first->leagueapi_id)
                                        ->where('bookmakersapi_id', '=', $league->bookmakersapi_id)
                                        ->where('country', '=', $first->league_country);

            if(is_null($first->end_ah_pattern))
            { 
                $data       = Football_fixture::unionPatternlists($league->country, 
                                            $leagueapi_id, 
                                            $first->pre_ah_pattern, 
                                            $first->pre_gou_pattern, 
                                            $first->pre_ah_pattern, 
                                            $first->pre_gou_pattern,
                                            'mdl');   

                $mirror       = Football_fixture::unionPatternlists($league->country, 
                                            $leagueapi_id, 
                                            $first->pre_ah_pattern, 
                                            $first->pre_gou_pattern, 
                                            $first->pre_ah_pattern, 
                                            $first->pre_gou_pattern,
                                            'mirror');   

                $patternlist0 = Pattern_list::where('pre_ah_pattern', '=', $first->pre_ah_pattern)
                                            ->where('pre_gou_pattern', '=', $first->pre_gou_pattern)
                                            ->where('end_ah_pattern', '=', $first->pre_ah_pattern)
                                            ->where('end_gou_pattern', '=', $first->pre_gou_pattern)
                                            ->where('country', '=', $first->league_country);

                $patternlist = Pattern_list::where('pre_ah_pattern_mirror', '=', $first->pre_ah_pattern)
                                            ->where('pre_gou_pattern', '=', $first->pre_gou_pattern)
                                            ->where('end_ah_pattern_mirror', '=', $first->pre_ah_pattern)
                                            ->where('end_gou_pattern', '=', $first->pre_gou_pattern)
                                            ->where('country', '=', $first->league_country) 
                                            ->get();
            }
            else
            { 
                $data       = Football_fixture::unionPatternlists($league->country, 
                                            $leagueapi_id,
                                            $first->pre_ah_pattern, 
                                            $first->pre_gou_pattern, 
                                            $first->end_ah_pattern, 
                                            $first->end_gou_pattern,
                                            'mdl');   

                $mirror       = Football_fixture::unionPatternlists($league->country, 
                                            $leagueapi_id, 
                                            $first->pre_ah_pattern, 
                                            $first->pre_gou_pattern, 
                                            $first->end_ah_pattern, 
                                            $first->end_gou_pattern,
                                            'mirror');   

                $patternlist0 = Pattern_list::where('pre_ah_pattern', '=', $first->pre_ah_pattern)
                                            ->where('pre_gou_pattern', '=', $first->pre_gou_pattern)
                                            ->where('end_ah_pattern', '=', $first->end_ah_pattern)
                                            ->where('end_gou_pattern', '=', $first->end_gou_pattern)
                                            ->where('country', '=', $first->league_country);

                $patternlist = Pattern_list::where('pre_ah_pattern_mirror', '=', $first->pre_ah_pattern)
                                            ->where('pre_gou_pattern', '=', $first->pre_gou_pattern)
                                            ->where('end_ah_pattern_mirror', '=', $first->end_ah_pattern)
                                            ->where('end_gou_pattern', '=', $first->end_gou_pattern)
                                            ->where('country', '=', $first->league_country) 
                                            ->get();
            }


                                    
        // ----------------------------------------------------------- Send
            return view($view,  
                compact(
                    'template', 
                    'mode', 
                    'themecolor',
                    'content', 
                    'user', 
                    'panel_name', 
                    'active_as',
                    'view_file', 
                    'data',  
                    'mirror',  
                    'first', 
                    'patternlist',
                    'id', 
                    'leagueapi_id',
                    'league'
                )
            );
        ///////////////////////////////////////////////////////////////
    } 

    public function pattern_pre($id, $leagueapi_id, $status)
    {
        // ----------------------------------------------------------- Auth
            $user = auth()->user();  

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
            $first          = Football_fixture::select(
                                                '*',
                                                DB::raw('DATE_ADD(date, INTERVAL 7 HOUR) as tanggal')
                                            )
                                            ->where('id', '=', $id)
                                            ->first(); 

            $league         = League::where('leagueapi_id', '=', $leagueapi_id)
                                        ->first();

            $league_model_2 = League::select('leagueapi_id')
                                        ->where('leagueapi_id', '!=', $first->leagueapi_id)
                                        ->where('bookmakersapi_id', '=', $league->bookmakersapi_id)
                                        ->where('country', '=', $first->league_country);

                                        
            $data       = Football_fixture::unionPatternlists($league->country, 
                                        $leagueapi_id, 
                                        $first->pre_ah_pattern, 
                                        $first->pre_gou_pattern, 
                                        $first->pre_ah_pattern, 
                                        $first->pre_gou_pattern,
                                        'mdl');   

            $mirror       = Football_fixture::unionPatternlists($league->country, 
                                        $leagueapi_id, 
                                        $first->pre_ah_pattern, 
                                        $first->pre_gou_pattern, 
                                        $first->pre_ah_pattern, 
                                        $first->pre_gou_pattern,
                                        'mirror');   

            $patternlist0 = Pattern_list::where('pre_ah_pattern', '=', $first->pre_ah_pattern)
                                        ->where('pre_gou_pattern', '=', $first->pre_gou_pattern)
                                        ->where('end_ah_pattern', '=', $first->pre_ah_pattern)
                                        ->where('end_gou_pattern', '=', $first->pre_gou_pattern)
                                        ->where('country', '=', $first->league_country);

            $patternlist = Pattern_list::where('pre_ah_pattern_mirror', '=', $first->pre_ah_pattern)
                                        ->where('pre_gou_pattern', '=', $first->pre_gou_pattern)
                                        ->where('end_ah_pattern_mirror', '=', $first->pre_ah_pattern)
                                        ->where('end_gou_pattern', '=', $first->pre_gou_pattern)
                                        ->where('country', '=', $first->league_country) 
                                        ->union($patternlist0)
                                        ->get(); 
                           
            $otherpattern0 = Pattern_list::where('pre_ah_pattern', '=', $first->pre_ah_pattern)
                        ->where('pre_gou_pattern', '=', $first->pre_gou_pattern) 
                        ->where('country', '=', $first->league_country) 
                        ->where('leagueapi_id', '=', $leagueapi_id);

            $otherpattern = Pattern_list::where('pre_ah_pattern_mirror', '=', $first->pre_ah_pattern)
                        ->where('pre_gou_pattern', '=', $first->pre_gou_pattern) 
                        ->where('country', '=', $first->league_country)  
                        ->where('leagueapi_id', '=', $leagueapi_id)
                        ->union($otherpattern0)
                        ->get();  
 
        // ----------------------------------------------------------- Send
            return view($view,  
                compact(
                    'template', 
                    'mode', 
                    'themecolor',
                    'content', 
                    'user', 
                    'panel_name', 
                    'active_as',
                    'view_file', 
                    'data',  
                    'mirror',  
                    'first', 
                    'patternlist',
                    'id', 
                    'leagueapi_id',
                    'league',
                    'otherpattern',
                    'status'

                )
            );
        ///////////////////////////////////////////////////////////////
    } 

    public function pattern_preworld($id, $leagueapi_id)
    {
        // ----------------------------------------------------------- Auth
            $user = auth()->user();  

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
            $first          = Football_fixture::select(
                                                '*',
                                                DB::raw('DATE_ADD(date, INTERVAL 7 HOUR) as tanggal')
                                            )
                                            ->where('id', '=', $id)
                                            ->first(); 

            $league         = League::where('leagueapi_id', '=', $leagueapi_id)
                                        ->first();

            $league_model_2 = League::select('leagueapi_id')
                                        ->where('leagueapi_id', '!=', $first->leagueapi_id)
                                        ->where('bookmakersapi_id', '=', $league->bookmakersapi_id)
                                        ->where('country', '=', $first->league_country);

                                        
                $data       = Football_fixture::unionPatternlists($league->country, 
                                            $leagueapi_id, 
                                            $first->pre_ah_pattern, 
                                            $first->pre_gou_pattern, 
                                            $first->pre_ah_pattern, 
                                            $first->pre_gou_pattern,
                                            'mdl');   

                $mirror       = Football_fixture::unionPatternlists($league->country, 
                                            $leagueapi_id, 
                                            $first->pre_ah_pattern, 
                                            $first->pre_gou_pattern, 
                                            $first->pre_ah_pattern, 
                                            $first->pre_gou_pattern,
                                            'mirror');   

                $patternlist0 = Pattern_list::where('pre_ah_pattern', '=', $first->pre_ah_pattern)
                                            ->where('pre_gou_pattern', '=', $first->pre_gou_pattern)
                                            ->where('end_ah_pattern', '=', $first->pre_ah_pattern)
                                            ->where('end_gou_pattern', '=', $first->pre_gou_pattern)
                                            ->where('country', '!=', $first->league_country);

                $patternlist = Pattern_list::where('pre_ah_pattern_mirror', '=', $first->pre_ah_pattern)
                                            ->where('pre_gou_pattern', '=', $first->pre_gou_pattern)
                                            ->where('end_ah_pattern_mirror', '=', $first->pre_ah_pattern)
                                            ->where('end_gou_pattern', '=', $first->pre_gou_pattern)
                                            ->where('country', '!=', $first->league_country) 
                                            ->get(); 
                                    
        // ----------------------------------------------------------- Send
            return view($view,  
                compact(
                    'template', 
                    'mode', 
                    'themecolor',
                    'content', 
                    'user', 
                    'panel_name', 
                    'active_as',
                    'view_file', 
                    'data',  
                    'mirror',  
                    'first', 
                    'patternlist',
                    'id', 
                    'leagueapi_id',
                    'league'
                )
            );
        ///////////////////////////////////////////////////////////////
    } 
    
    public function pattern_end($id, $leagueapi_id, $status)
    {
        // ----------------------------------------------------------- Auth
            $user = auth()->user();  

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
            $first          = Football_fixture::select(
                                                '*',
                                                DB::raw('DATE_ADD(date, INTERVAL 7 HOUR) as tanggal')
                                            )
                                            ->where('id', '=', $id)
                                            ->first(); 

            $league         = League::where('leagueapi_id', '=', $leagueapi_id)
                                        ->first();

            $league_model_2 = League::select('leagueapi_id')
                                        ->where('leagueapi_id', '!=', $first->leagueapi_id)
                                        ->where('bookmakersapi_id', '=', $league->bookmakersapi_id)
                                        ->where('country', '=', $first->league_country);
 
                $data       = Football_fixture::unionPatternlists($league->country, 
                                            $leagueapi_id,
                                            $first->pre_ah_pattern, 
                                            $first->pre_gou_pattern, 
                                            $first->end_ah_pattern, 
                                            $first->end_gou_pattern,
                                            'mdl');   

                $mirror       = Football_fixture::unionPatternlists($league->country, 
                                            $leagueapi_id, 
                                            $first->pre_ah_pattern, 
                                            $first->pre_gou_pattern, 
                                            $first->end_ah_pattern, 
                                            $first->end_gou_pattern,
                                            'mirror');   

                $patternlist0 = Pattern_list::where('pre_ah_pattern', '=', $first->pre_ah_pattern)
                                            ->where('pre_gou_pattern', '=', $first->pre_gou_pattern)
                                            ->where('end_ah_pattern', '=', $first->end_ah_pattern)
                                            ->where('end_gou_pattern', '=', $first->end_gou_pattern)
                                            ->where('country', '=', $first->league_country);

                $patternlist = Pattern_list::where('pre_ah_pattern_mirror', '=', $first->pre_ah_pattern)
                                            ->where('pre_gou_pattern', '=', $first->pre_gou_pattern)
                                            ->where('end_ah_pattern_mirror', '=', $first->end_ah_pattern)
                                            ->where('end_gou_pattern', '=', $first->end_gou_pattern)
                                            ->where('country', '=', $first->league_country) 
                                            ->union($patternlist0)
                                            ->get(); 
                                    
            $otherpattern0 = Pattern_list::where('pre_ah_pattern', '=', $first->pre_ah_pattern)
                                ->where('pre_gou_pattern', '=', $first->pre_gou_pattern) 
                                ->where('country', '=', $first->league_country) 
                                ->where('leagueapi_id', '=', $leagueapi_id);

            $otherpattern = Pattern_list::where('pre_ah_pattern_mirror', '=', $first->pre_ah_pattern)
                                ->where('pre_gou_pattern', '=', $first->pre_gou_pattern) 
                                ->where('country', '=', $first->league_country)  
                                ->where('leagueapi_id', '=', $leagueapi_id)
                                ->union($otherpattern0)
                                ->get();  

                                    
        // ----------------------------------------------------------- Send
            return view($view,  
                compact(
                    'template', 
                    'mode', 
                    'themecolor',
                    'content', 
                    'user', 
                    'panel_name', 
                    'active_as',
                    'view_file', 
                    'data',  
                    'mirror',  
                    'first', 
                    'patternlist',
                    'id', 
                    'leagueapi_id',
                    'league',
                    'otherpattern',
                    'status'
                )
            );
        ///////////////////////////////////////////////////////////////
    } 

    public function pattern_endworld($id, $leagueapi_id)
    {
        // ----------------------------------------------------------- Auth
            $user = auth()->user();  

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
            $first          = Football_fixture::select(
                                                '*',
                                                DB::raw('DATE_ADD(date, INTERVAL 7 HOUR) as tanggal')
                                            )
                                            ->where('id', '=', $id)
                                            ->first(); 

            $league         = League::where('leagueapi_id', '=', $leagueapi_id)
                                        ->first();

            $league_model_2 = League::select('leagueapi_id')
                                        ->where('leagueapi_id', '!=', $first->leagueapi_id)
                                        ->where('bookmakersapi_id', '=', $league->bookmakersapi_id)
                                        ->where('country', '=', $first->league_country);
 
                $data       = Football_fixture::unionPatternlists($league->country, 
                                            $leagueapi_id,
                                            $first->pre_ah_pattern, 
                                            $first->pre_gou_pattern, 
                                            $first->end_ah_pattern, 
                                            $first->end_gou_pattern,
                                            'mdl');   

                $mirror       = Football_fixture::unionPatternlists($league->country, 
                                            $leagueapi_id, 
                                            $first->pre_ah_pattern, 
                                            $first->pre_gou_pattern, 
                                            $first->end_ah_pattern, 
                                            $first->end_gou_pattern,
                                            'mirror');   

                $patternlist0 = Pattern_list::where('pre_ah_pattern', '=', $first->pre_ah_pattern)
                                            ->where('pre_gou_pattern', '=', $first->pre_gou_pattern)
                                            ->where('end_ah_pattern', '=', $first->end_ah_pattern)
                                            ->where('end_gou_pattern', '=', $first->end_gou_pattern)
                                            ->where('country', '!=', $first->league_country);

                $patternlist = Pattern_list::where('pre_ah_pattern_mirror', '=', $first->pre_ah_pattern)
                                            ->where('pre_gou_pattern', '=', $first->pre_gou_pattern)
                                            ->where('end_ah_pattern_mirror', '=', $first->end_ah_pattern)
                                            ->where('end_gou_pattern', '=', $first->end_gou_pattern)
                                            ->where('country', '!=', $first->league_country) 
                                            ->get(); 

                                    
        // ----------------------------------------------------------- Send
            return view($view,  
                compact(
                    'template', 
                    'mode', 
                    'themecolor',
                    'content', 
                    'user', 
                    'panel_name', 
                    'active_as',
                    'view_file', 
                    'data',  
                    'mirror',  
                    'first', 
                    'patternlist',
                    'id', 
                    'leagueapi_id',
                    'league'
                )
            );
        ///////////////////////////////////////////////////////////////
    } 
    
    public function pattern_onlyend($id, $leagueapi_id, $status)
    {
        // ----------------------------------------------------------- Auth
            $user = auth()->user();  

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
            $first          = Football_fixture::select(
                                                '*',
                                                DB::raw('DATE_ADD(date, INTERVAL 7 HOUR) as tanggal')
                                            )
                                            ->where('id', '=', $id)
                                            ->first(); 

            $league         = League::where('leagueapi_id', '=', $leagueapi_id)
                                        ->first();

            $league_model_2 = League::select('leagueapi_id')
                                        ->where('leagueapi_id', '!=', $first->leagueapi_id)
                                        ->where('bookmakersapi_id', '=', $league->bookmakersapi_id)
                                        ->where('country', '=', $first->league_country);
 
            $data       = Football_fixture::unionPatternlists($league->country, 
                                        $leagueapi_id,
                                        $first->pre_ah_pattern, 
                                        $first->pre_gou_pattern, 
                                        $first->end_ah_pattern, 
                                        $first->end_gou_pattern,
                                        'mdl_onlyend');   

            $mirror       = Football_fixture::unionPatternlists($league->country, 
                                        $leagueapi_id, 
                                        $first->pre_ah_pattern, 
                                        $first->pre_gou_pattern, 
                                        $first->end_ah_pattern, 
                                        $first->end_gou_pattern,
                                        'mirror_onlyend');   

                $patternlist0 = Pattern_list::where('pre_ah_pattern', '=', $first->pre_ah_pattern)
                                            ->where('pre_gou_pattern', '=', $first->pre_gou_pattern)
                                            ->where('end_ah_pattern', '=', $first->end_ah_pattern)
                                            ->where('end_gou_pattern', '=', $first->end_gou_pattern)
                                            ->where('country', '=', $first->league_country);

                $patternlist = Pattern_list::where('pre_ah_pattern_mirror', '=', $first->pre_ah_pattern)
                                            ->where('pre_gou_pattern', '=', $first->pre_gou_pattern)
                                            ->where('end_ah_pattern_mirror', '=', $first->end_ah_pattern)
                                            ->where('end_gou_pattern', '=', $first->end_gou_pattern)
                                            ->where('country', '=', $first->league_country) 
                                            ->union($patternlist0)
                                            ->get(); 
                                    
            $otherpattern0 = Pattern_list::where('pre_ah_pattern', '=', $first->pre_ah_pattern)
                                ->where('pre_gou_pattern', '=', $first->pre_gou_pattern) 
                                ->where('country', '=', $first->league_country) 
                                ->where('leagueapi_id', '=', $leagueapi_id);

            $otherpattern = Pattern_list::where('pre_ah_pattern_mirror', '=', $first->pre_ah_pattern)
                                ->where('pre_gou_pattern', '=', $first->pre_gou_pattern) 
                                ->where('country', '=', $first->league_country)  
                                ->where('leagueapi_id', '=', $leagueapi_id)
                                ->union($otherpattern0)
                                ->get();  

                                    
        // ----------------------------------------------------------- Send
            return view($view,  
                compact(
                    'template', 
                    'mode', 
                    'themecolor',
                    'content', 
                    'user', 
                    'panel_name', 
                    'active_as',
                    'view_file', 
                    'data',  
                    'mirror',  
                    'first', 
                    'patternlist',
                    'id', 
                    'leagueapi_id',
                    'league',
                    'otherpattern',
                    'status'
                )
            );
        ///////////////////////////////////////////////////////////////
    } 
}
