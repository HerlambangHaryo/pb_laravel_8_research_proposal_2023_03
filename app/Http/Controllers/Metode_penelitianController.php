<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Jenssegers\Agent\Agent;
use DB;
 
use App\Models\Penelitian;

class Metode_penelitianController extends Controller
{
    //
    public $template    = 'studio_v30';
    public $mode        = '';
    public $themecolor  = '';
    public $content     = 'Metode_penelitian';
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
    
    public function edit(Penelitian $Metode_penelitian)
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

            $view_file      = 'edit';
            $view           = define_view($this->template, $this->type, $this->content, $additional_view, $view_file);
            
        // ----------------------------------------------------------- Action 

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
                    'Metode_penelitian',   
                )
            );
        ///////////////////////////////////////////////////////////////
    }

    public function update(Request $request, Penelitian $Metode_penelitian)
    {
        // ----------------------------------------------------------- Auth
            $user = auth()->user();  

        // ----------------------------------------------------------- Initialize
            $content        = $this->content;

        // ----------------------------------------------------------- Action   
            $data = Penelitian::findOrFail($Metode_penelitian->id); 
   
            $data->update([
                'metode_uraian'             => $request->metode_uraian, 
                'metode_gambar'             => $request->metode_gambar,
                'metode_detail'             => $request->metode_detail,
                'metode_luaran'             => $request->metode_luaran,
                'metode_capaian'            => $request->metode_capaian,
                'metode_tugas_pengusul'     => $request->metode_tugas_pengusul, 
            ]);  
                
        // ----------------------------------------------------------- Send
            if($data)
            {
                # Metode_penelitian/Peneliti/1
                return redirect()
                    ->route($content.'.Penelitian', $data->id)
                    ->with(['Success' => 'Data successfully saved!']);
            }
            else
            {
                return redirect()
                    ->route($content.'.index')
                    ->with(['Error' => 'Data Gagal Disimpan!']);
            }
        ///////////////////////////////////////////////////////////////
    } 
}