<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Jenssegers\Agent\Agent;
use DB;
 
use App\Models\Penelitian;

class Latar_belakangController extends Controller
{
    //
    public $template    = 'studio_v30';
    public $mode        = '';
    public $themecolor  = '';
    public $content     = 'Latar_belakang';
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
    
    public function edit(Penelitian $Latar_belakang)
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
                    'Latar_belakang',   
                )
            );
        ///////////////////////////////////////////////////////////////
    }

    public function update(Request $request, Penelitian $Latar_belakang)
    {
        // ----------------------------------------------------------- Auth
            $user = auth()->user();  

        // ----------------------------------------------------------- Initialize
            $content        = $this->content;

        // ----------------------------------------------------------- Action   
            $data = Penelitian::findOrFail($Latar_belakang->id); 
 
            $data->update([
                'latar_belakang_umum'                   => $request->latar_belakang_umum, 
                'latar_belakang_permasalahan'           => $request->latar_belakang_permasalahan,
                'latar_belakang_tujuan'                 => $request->latar_belakang_tujuan,
                'latar_belakang_target_luaran'          => $request->latar_belakang_target_luaran,
                'latar_belakang_urgensi'                => $request->latar_belakang_urgensi,
                'latar_belakang_terkait_dengan_skema'   => $request->latar_belakang_terkait_dengan_skema, 

                'latar_belakang_umum_catatan'                   => $request->latar_belakang_umum_catatan, 
                'latar_belakang_permasalahan_catatan'           => $request->latar_belakang_permasalahan_catatan,
                'latar_belakang_tujuan_catatan'                 => $request->latar_belakang_tujuan_catatan,
                'latar_belakang_target_luaran_catatan'          => $request->latar_belakang_target_luaran_catatan,
                'latar_belakang_urgensi_catatan'                => $request->latar_belakang_urgensi_catatan,
                'latar_belakang_terkait_dengan_skema_catatan'   => $request->latar_belakang_terkait_dengan_skema_catatan, 
            ]);  
                
        // ----------------------------------------------------------- Send
            if($data)
            {
                # Latar_belakang/Peneliti/1
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
