<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Jenssegers\Agent\Agent;
use DB;

use App\Models\Peneliti;
use App\Models\Perguruan_tinggi;
use Illuminate\Support\Facades\Storage;

class PenelitiController extends Controller
{
    //
    public $template    = 'studio_v30';
    public $mode        = '';
    public $themecolor  = '';
    public $content     = 'Peneliti';
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
            $data           = Peneliti::get();
                                    
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
            $Perguruan_tinggi = Perguruan_tinggi::whereNull('deleted_at')
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
                    'Perguruan_tinggi', 
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
            $this->validate($request, [
                'nama'     => 'required', 
            ]);
            
            $data = Peneliti::create([ 
                'nama'                          => $request->nama,  
                'jenis_kelamin'                 => $request->jenis_kelamin,  
                'jabatan_fungsional'            => $request->jabatan_fungsional,  
                'nip_nik_lainnya'               => $request->nip_nik_lainnya,  
                'nidn'                          => $request->nidn,  
                'id_sinta_google_scholar'       => $request->id_sinta_google_scholar,  
                'url'                           => $request->url,  
                'id_scopus'                     => $request->id_scopus,  
                'id_orchid'                     => $request->id_orchid,  
                'tempat_lahir'                  => $request->tempat_lahir,  
                'tanggal_lahir'                 => $request->tanggal_lahir,  
                'email'                         => $request->email,  
                'telepon'                       => $request->telepon,   

                'lulusan_s1'                    => $request->lulusan_s1,  
                'lulusan_s2'                    => $request->lulusan_s2,  
                'lulusan_s3'                    => $request->lulusan_s3,  

                's1_perguruan_tinggi'           => $request->s1_perguruan_tinggi,  
                's1_bidang_ilmu'                => $request->s1_bidang_ilmu,  
                's1_tahun_masuk'                => $request->s1_tahun_masuk,  
                's1_tahun_lulus'                => $request->s1_tahun_lulus,  
                's1_judul'                      => $request->s1_judul,  
                's1_pembimbing'                 => $request->s1_pembimbing,  

                's2_perguruan_tinggi'           => $request->s2_perguruan_tinggi,  
                's2_bidang_ilmu'                => $request->s2_bidang_ilmu,  
                's2_tahun_masuk'                => $request->s2_tahun_masuk,  
                's2_tahun_lulus'                => $request->s2_tahun_lulus,  
                's2_judul'                      => $request->s2_judul,  
                's2_pembimbing'                 => $request->s2_pembimbing,  

                's3_perguruan_tinggi'           => $request->s3_perguruan_tinggi,  
                's3_bidang_ilmu'                => $request->s3_bidang_ilmu,  
                's3_tahun_masuk'                => $request->s3_tahun_masuk,  
                's3_tahun_lulus'                => $request->s3_tahun_lulus,  
                's3_judul'                      => $request->s3_judul,   
                's3_pembimbing'                 => $request->s3_pembimbing,  

                'id_perguruan_tinggi'           => $request->id_perguruan_tinggi, 

                'screenshot_sister'             => $request->screenshot_sister, 
                'screenshot_sinta'              => $request->screenshot_sinta,     
            ]);  

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

    public function edit(Peneliti $Peneliti)
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
            $Perguruan_tinggi = Perguruan_tinggi::whereNull('deleted_at')
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
                    'Peneliti',   
                    'Perguruan_tinggi',   
                )
            );
        ///////////////////////////////////////////////////////////////
    }

    public function update(Request $request, Peneliti $Peneliti)
    {
        // ----------------------------------------------------------- Auth
            $user = auth()->user();  

        // ----------------------------------------------------------- Initialize
            $content        = $this->content;

        // ----------------------------------------------------------- Action   
            $this->validate($request, [
                'nama'     => 'required', 
            ]);
        
            $data = Peneliti::findOrFail($Peneliti->id); 

            if($request->file('screenshot_sister') == "" && $request->file('screenshot_sinta') == "") 
            { 
                $data->update([
                    'nama'                          => $request->nama,  
                    'jenis_kelamin'                 => $request->jenis_kelamin,  
                    'jabatan_fungsional'            => $request->jabatan_fungsional,  
                    'nip_nik_lainnya'               => $request->nip_nik_lainnya,  
                    'nidn'                          => $request->nidn,  
                    'id_sinta_google_scholar'       => $request->id_sinta_google_scholar,  
                    'url'                           => $request->url,  
                    'id_scopus'                     => $request->id_scopus,  
                    'id_orchid'                     => $request->id_orchid,  
                    'tempat_lahir'                  => $request->tempat_lahir,  
                    'tanggal_lahir'                 => $request->tanggal_lahir,  
                    'email'                         => $request->email,  
                    'telepon'                       => $request->telepon,   
                    
                    'lulusan_s1'                    => $request->lulusan_s1,  
                    'lulusan_s2'                    => $request->lulusan_s2,  
                    'lulusan_s3'                    => $request->lulusan_s3,  
    
                    's1_perguruan_tinggi'           => $request->s1_perguruan_tinggi,  
                    's1_bidang_ilmu'                => $request->s1_bidang_ilmu,  
                    's1_tahun_masuk'                => $request->s1_tahun_masuk,  
                    's1_tahun_lulus'                => $request->s1_tahun_lulus,  
                    's1_judul'                      => $request->s1_judul,  
                    's1_pembimbing'                 => $request->s1_pembimbing,  
    
                    's2_perguruan_tinggi'           => $request->s2_perguruan_tinggi,  
                    's2_bidang_ilmu'                => $request->s2_bidang_ilmu,  
                    's2_tahun_masuk'                => $request->s2_tahun_masuk,  
                    's2_tahun_lulus'                => $request->s2_tahun_lulus,  
                    's2_judul'                      => $request->s2_judul,  
                    's2_pembimbing'                 => $request->s2_pembimbing,  
    
                    's3_perguruan_tinggi'           => $request->s3_perguruan_tinggi,  
                    's3_bidang_ilmu'                => $request->s3_bidang_ilmu,  
                    's3_tahun_masuk'                => $request->s3_tahun_masuk,  
                    's3_tahun_lulus'                => $request->s3_tahun_lulus,  
                    's3_judul'                      => $request->s3_judul,   
                    's3_pembimbing'                 => $request->s3_pembimbing,   
    
                    'id_perguruan_tinggi'           => $request->id_perguruan_tinggi,  
                ]);   
            } 
            else 
            {
                if($request->file('screenshot_sister') != "")
                {
                    //hapus old image
                    Storage::disk('local')->delete('public/peneliti/'.$data->screenshot_sister);

                    //upload new image
                    $ss_sister = $request->file('screenshot_sister');
                    $ss_sister->storeAs('public/peneliti', $ss_sister->hashName());
                }
                if($request->file('screenshot_sinta') != "")
                {
                    //hapus old image
                    Storage::disk('local')->delete('public/peneliti/'.$data->screenshot_sinta);

                    //upload new image
                    $ss_sinta = $request->file('screenshot_sinta');
                    $ss_sinta->storeAs('public/peneliti', $ss_sinta->hashName());
                }
 
 
                
                $data->update([
                    'nama'                          => $request->nama,  
                    'jenis_kelamin'                 => $request->jenis_kelamin,  
                    'jabatan_fungsional'            => $request->jabatan_fungsional,  
                    'nip_nik_lainnya'               => $request->nip_nik_lainnya,  
                    'nidn'                          => $request->nidn,  
                    'id_sinta_google_scholar'       => $request->id_sinta_google_scholar,  
                    'url'                           => $request->url,  
                    'id_scopus'                     => $request->id_scopus,  
                    'id_orchid'                     => $request->id_orchid,  
                    'tempat_lahir'                  => $request->tempat_lahir,  
                    'tanggal_lahir'                 => $request->tanggal_lahir,  
                    'email'                         => $request->email,  
                    'telepon'                       => $request->telepon,   
                    
                    'lulusan_s1'                    => $request->lulusan_s1,  
                    'lulusan_s2'                    => $request->lulusan_s2,  
                    'lulusan_s3'                    => $request->lulusan_s3,  
    
                    's1_perguruan_tinggi'           => $request->s1_perguruan_tinggi,  
                    's1_bidang_ilmu'                => $request->s1_bidang_ilmu,  
                    's1_tahun_masuk'                => $request->s1_tahun_masuk,  
                    's1_tahun_lulus'                => $request->s1_tahun_lulus,  
                    's1_judul'                      => $request->s1_judul,  
                    's1_pembimbing'                 => $request->s1_pembimbing,  
    
                    's2_perguruan_tinggi'           => $request->s2_perguruan_tinggi,  
                    's2_bidang_ilmu'                => $request->s2_bidang_ilmu,  
                    's2_tahun_masuk'                => $request->s2_tahun_masuk,  
                    's2_tahun_lulus'                => $request->s2_tahun_lulus,  
                    's2_judul'                      => $request->s2_judul,  
                    's2_pembimbing'                 => $request->s2_pembimbing,  
    
                    's3_perguruan_tinggi'           => $request->s3_perguruan_tinggi,  
                    's3_bidang_ilmu'                => $request->s3_bidang_ilmu,  
                    's3_tahun_masuk'                => $request->s3_tahun_masuk,  
                    's3_tahun_lulus'                => $request->s3_tahun_lulus,  
                    's3_judul'                      => $request->s3_judul,   
                    's3_pembimbing'                 => $request->s3_pembimbing,   
    
                    'id_perguruan_tinggi'           => $request->id_perguruan_tinggi, 

                    'screenshot_sister'           => $ss_sister->hashName(), 
                    'screenshot_sinta'           => $ss_sinta->hashName(), 
          
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

    public function show(Peneliti $Peneliti)
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

            $view_file      = 'show';
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
                    'Peneliti',   
                )
            );
        ///////////////////////////////////////////////////////////////
    }

    public function deletedata(Peneliti $Peneliti)
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
                    'Peneliti',   
                )
            );
        ///////////////////////////////////////////////////////////////
    }
    
    public function destroy($id)
    {
        // ----------------------------------------------------------- Initialize
            $content        = $this->content;

        // ----------------------------------------------------------- Action  
            $data = Peneliti::findOrFail($id);
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
