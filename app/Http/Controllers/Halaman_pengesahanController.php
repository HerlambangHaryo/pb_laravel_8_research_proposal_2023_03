<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Jenssegers\Agent\Agent;
use DB;
 
use App\Models\Penelitian;

class Halaman_pengesahanController extends Controller
{
    //
    public $template    = 'studio_v30';
    public $mode        = '';
    public $themecolor  = '';
    public $content     = 'Halaman_pengesahan';
    public $type        = 'backend';

    public function Penelitian($id)
    {
        // ----------------------------------------------------------- Auth
            // $user = auth()->user();   
            session(['id_penelitian' => $id]);

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
            $data           = Penelitian::where('id', '=', $id)
                                ->get();

            $Penelitian     = Penelitian::where('id', '=', $id)
                                ->first();
                                    
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
                    'id', 
                    'data', 
                    'Penelitian', 
                )
            );
        ///////////////////////////////////////////////////////////////
    }  
}
