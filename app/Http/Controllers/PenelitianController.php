<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Jenssegers\Agent\Agent;
use DB;

use App\Models\Penelitian;
use App\Models\Peneliti;
use Illuminate\Support\Facades\Storage;

class PenelitianController extends Controller
{
    //
    public $template    = 'studio_v30';
    public $mode        = '';
    public $themecolor  = '';
    public $content     = 'Penelitian';
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

            $view_file      = 'data';
            $view           = define_view($this->template, $this->type, $this->content, $additional_view, $view_file);
            
        // ----------------------------------------------------------- Action 
            $data           = Penelitian::get();
                                    
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
                )
            );
        ///////////////////////////////////////////////////////////////
    } 
 
    public function create()
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

            $view_file      = 'create';
            $view           = define_view($this->template, $this->type, $this->content, $additional_view, $view_file);
            
        // ----------------------------------------------------------- Action  
            $peneliti       = Peneliti::get();

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
                    'peneliti',
                )
            );
        ///////////////////////////////////////////////////////////////
    }

    public function store(Request $request)
    {
        // ----------------------------------------------------------- Auth
            // $user = auth()->user();  
            
        // ----------------------------------------------------------- Initialize
            $content        = $this->content;

        // ----------------------------------------------------------- Action   

        
            if($request->file('lembar_pengesahan') == "") {

                $data = Penelitian::create([ 
                    'id_ketua'                  => $request->id_ketua, 
                    'id_anggota_1'              => $request->id_anggota_1,
                    'id_anggota_2'              => $request->id_anggota_2,
                    'id_mahasiswa_1'            => $request->id_mahasiswa_1,
                    'id_mahasiswa_2'            => $request->id_mahasiswa_2,
                    'judul'                     => $request->judul,
                    'skema'                     => $request->skema,
                    'tanggal'                   => $request->tanggal,
                    'id_ketua_pusat_studi'      => $request->id_ketua_pusat_studi,
                    'id_dekan'                  => $request->id_dekan,      

                    'kata_kunci_1'                  => $request->kata_kunci_1,   
                    'kata_kunci_2'                  => $request->kata_kunci_2,   
                    'kata_kunci_3'                  => $request->kata_kunci_3,   
                    'kata_kunci_4'                  => $request->kata_kunci_4,   
                    'kata_kunci_5'                  => $request->kata_kunci_5,   
                ]); 

            } else { 
                        
                //hapus old image
                Storage::disk('local')->delete('public/penelitian/'.$data->lembar_pengesahan);

                //upload new image
                $lembar_pengesahan = $request->file('lembar_pengesahan');
                $lembar_pengesahan->storeAs('public/penelitian', $lembar_pengesahan->hashName());
                
                $data = Penelitian::create([ 
                    'id_ketua'                  => $request->id_ketua, 
                    'id_anggota_1'              => $request->id_anggota_1,
                    'id_anggota_2'              => $request->id_anggota_2,
                    'id_mahasiswa_1'            => $request->id_mahasiswa_1,
                    'id_mahasiswa_2'            => $request->id_mahasiswa_2,
                    'judul'                     => $request->judul,
                    'skema'                     => $request->skema,
                    'tanggal'                   => $request->tanggal,
                    'id_ketua_pusat_studi'      => $request->id_ketua_pusat_studi,
                    'id_dekan'                  => $request->id_dekan,   
                    'lembar_pengesahan'         => $lembar_pengesahan->hashName(),   

                    'kata_kunci_1'                  => $request->kata_kunci_1,   
                    'kata_kunci_2'                  => $request->kata_kunci_2,   
                    'kata_kunci_3'                  => $request->kata_kunci_3,   
                    'kata_kunci_4'                  => $request->kata_kunci_4,   
                    'kata_kunci_5'                  => $request->kata_kunci_5,   
                ]); 
            }

 
        // ----------------------------------------------------------- Send
            if($data)
            {
                return redirect()
                    ->route($content.'.index')
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

    public function edit(Penelitian $Penelitian)
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
            $peneliti       = Peneliti::get();

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
                    'Penelitian',   
                    'peneliti',   
                )
            );
        ///////////////////////////////////////////////////////////////
    }

    public function update(Request $request, Penelitian $Penelitian)
    {
        // ----------------------------------------------------------- Auth
            $user = auth()->user();  

        // ----------------------------------------------------------- Initialize
            $content        = $this->content;

        // ----------------------------------------------------------- Action   

            $data = Penelitian::findOrFail($Penelitian->id); 

            if($request->file('lembar_pengesahan') == "") {

                $data->update([
                    'id_ketua'                  => $request->id_ketua, 
                    'id_anggota_1'              => $request->id_anggota_1,
                    'id_anggota_2'              => $request->id_anggota_2,
                    'id_mahasiswa_1'            => $request->id_mahasiswa_1,
                    'id_mahasiswa_2'            => $request->id_mahasiswa_2,
                    'judul'                     => $request->judul,
                    'skema'                     => $request->skema,
                    'tanggal'                   => $request->tanggal,
                    'id_ketua_pusat_studi'      => $request->id_ketua_pusat_studi,
                    'id_dekan'                  => $request->id_dekan,      

                    'kata_kunci_1'                  => $request->kata_kunci_1,   
                    'kata_kunci_2'                  => $request->kata_kunci_2,   
                    'kata_kunci_3'                  => $request->kata_kunci_3,   
                    'kata_kunci_4'                  => $request->kata_kunci_4,   
                    'kata_kunci_5'                  => $request->kata_kunci_5,   
                ]); 

            } else { 
                        
                //hapus old image
                Storage::disk('local')->delete('public/penelitian/'.$data->lembar_pengesahan);

                //upload new image
                $lembar_pengesahan = $request->file('lembar_pengesahan');
                $lembar_pengesahan->storeAs('public/penelitian', $lembar_pengesahan->hashName());
                
                $data->update([
                    'id_ketua'                  => $request->id_ketua, 
                    'id_anggota_1'              => $request->id_anggota_1,
                    'id_anggota_2'              => $request->id_anggota_2,
                    'id_mahasiswa_1'            => $request->id_mahasiswa_1,
                    'id_mahasiswa_2'            => $request->id_mahasiswa_2,
                    'judul'                     => $request->judul,
                    'skema'                     => $request->skema,
                    'tanggal'                   => $request->tanggal,
                    'id_ketua_pusat_studi'      => $request->id_ketua_pusat_studi,
                    'id_dekan'                  => $request->id_dekan,   
                    'lembar_pengesahan'         => $lembar_pengesahan->hashName(),   

                    'kata_kunci_1'                  => $request->kata_kunci_1,   
                    'kata_kunci_2'                  => $request->kata_kunci_2,   
                    'kata_kunci_3'                  => $request->kata_kunci_3,   
                    'kata_kunci_4'                  => $request->kata_kunci_4,   
                    'kata_kunci_5'                  => $request->kata_kunci_5,   
                ]); 
            }
             
                
        // ----------------------------------------------------------- Send
            if($data)
            {
                return redirect()
                    ->route($content.'.index')
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

    public function show(Penelitian $Penelitian)
    {
        // ----------------------------------------------------------- Auth
            $user = auth()->user();  
            session(['id_penelitian' => $Penelitian->id]);

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

            $view_file      = 'show';
            $view           = define_view($this->template, $this->type, $this->content, $additional_view, $view_file);
            
        // ----------------------------------------------------------- Action  
            $data = Penelitian::where('id', '=', $Penelitian->id)
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
                    'Penelitian',   
                    'data',  
                )
            );
        ///////////////////////////////////////////////////////////////
    }

    public function deletedata(Penelitian $Penelitian)
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

            $view_file      = 'delete';
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
                    'Penelitian',   
                )
            );
        ///////////////////////////////////////////////////////////////
    }
    
    public function destroy($id)
    {
        // ----------------------------------------------------------- Initialize
            $content        = $this->content;

        // ----------------------------------------------------------- Action  
            $data = Penelitian::findOrFail($id);
            $data->delete();

        // ----------------------------------------------------------- Send
            if($data)
            {
                return redirect()
                    ->route($content.'.index')
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
