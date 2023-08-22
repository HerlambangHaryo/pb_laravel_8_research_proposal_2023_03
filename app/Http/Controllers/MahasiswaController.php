<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request; 
use Illuminate\Support\Facades\Storage;

use Jenssegers\Agent\Agent;
use DB;   
 
use App\Models\Bimbingan; 
use App\Models\Mahasiswa; 
use App\Models\Dosen; 
use App\Models\User; 
 
use Ramsey\Uuid\Uuid;

class MahasiswaController extends Controller
{
    //
    public $template    = 'studio_v30';
    public $mode        = '';
    public $themecolor  = '';
    public $content     = 'Mahasiswa';
    public $type        = 'backend';
 
    public function index()
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
            $view           = define_view($this->template, $this->type,  $this->content, $additional_view, $view_file);
            
        // ----------------------------------------------------------- Action  
            $data           = Mahasiswa::where('user_id', '=', $user->id)
                                ->first();
  
            $Bimbingan      = Bimbingan::select(
                                    '*', 
                                    DB::raw('DATE_FORMAT(tanggal, "%W, %e %M %Y") as hari'), 
                                    DB::raw('DATE_FORMAT(tanggal, "%H:%i") as jam'), 
                                )
                                ->where('mahasiswa_id', '=', $data->id)
                                ->whereNull('deleted_at')
                                ->get();

            if(is_null($data))
            {
                $messages                       = "Please update detail information"; 
                $new_route                      = route($content.'.create');
                $status_button                  = '<a href="'.$new_route.'" 
                                                        class="btn btn-primary">
                                                        <i class="far fa-edit"></i> 
                                                        Add 
                                                    </a>';

                $data_nama                      = $messages;
                $data_nama_dosen_pembimbing_1   = $messages;
                $data_nama_dosen_pembimbing_2   = $messages;
 
                $data_repositori_skripsi    = $messages; 
                $data_judul_skripsi         = $messages; 
                $data_whatsapp              = $messages; 
                
                $data_nrp              = $messages; 
            }
            else
            {
                $new_route                      = route($content.'.edit', $data->id);
                $status_button                  = '<a href="'.$new_route.'" 
                                                        class="btn btn-white">
                                                        <i class="far fa-edit"></i> 
                                                        Edit 
                                                    </a>';

                $data_nama                      = $data->nama; 
                $data_nama_dosen_pembimbing_1   = $data->dosen_1->nama; 
                $data_nama_dosen_pembimbing_2   = $data->dosen_2->nama; 
 
                $data_repositori_skripsi    = $data->repositori_skripsi; 
                $data_judul_skripsi         = $data->judul_skripsi; 
                $data_whatsapp              = $data->whatsapp; 
                
                $data_nrp              = $data->nrp; 

                $data_nip_dosen_pembimbing_1   = $data->dosen_1->nip; 
                $data_nip_dosen_pembimbing_2   = $data->dosen_2->nip; 
            }
                               

            $Dosen_1        = Dosen::where('id', '=', $data->dosen_pembimbing_1_id)
                                ->first();

            $Bimbingan_1    = Bimbingan::where('dosen_id', '=', $Dosen_1->user_id)
                                ->count();

            $Dosen_2        = Dosen::where('id', '=', $data->dosen_pembimbing_2_id)
                                ->first();

            $Bimbingan_2    = Bimbingan::where('dosen_id', '=', $Dosen_2->user_id)
                                ->count();     
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
                    'status_button',
                    'data_nama',
                    'data_nama_dosen_pembimbing_1',
                    'data_nama_dosen_pembimbing_2',

                    'data_repositori_skripsi',
                    'data_judul_skripsi',
                    'data_whatsapp',

                    'data_nrp',
                    'Bimbingan',  
                    'Bimbingan_1',
                    'Bimbingan_2',
                )
            );
        ///////////////////////////////////////////////////////////////
    } 
   
    public function create()
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

            $view_file      = 'create';
            $view           = define_view($this->template, $this->type,  $this->content, $additional_view, $view_file);
            
        // ----------------------------------------------------------- Action   
            $data_dosen     = Dosen::whereNull('deleted_at')
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
                    // 'data',    
                    'data_dosen'
                )
            );
        ///////////////////////////////////////////////////////////////
    }

    public function store(Request $request)
    {
        // ----------------------------------------------------------- Auth
            $user = auth()->user();   

        // ----------------------------------------------------------- Agent 

        // ----------------------------------------------------------- Initialize
            $content        = $this->content;

        // ----------------------------------------------------------- Action   

            $data = Mahasiswa::create([
                'id'            => Uuid::uuid4(), 
                'user_id'       => $user->id,
                'nama'          => $request->nama,
                'id'            => Uuid::uuid4(), 

                'dosen_pembimbing_1_id'          => $request->dosen_pembimbing_1,
                'dosen_pembimbing_2_id'          => $request->dosen_pembimbing_2,
            ]); 

        // ----------------------------------------------------------- Send
            if($data)
            {
                return redirect()
                    ->route($content.'.index')
                    ->with(['saved_data' => define_messages('saved_data')]);
            }
            else
            {
                return redirect()
                    ->route($content.'.index')
                    ->with(['Error' => 'Data Gagal Disimpan!']);
            }
        /////////////////////////////////////////////////////////////// 
    }
   
    public function edit(Mahasiswa $Mahasiswa)
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
            $data           = $Mahasiswa;

            $data_dosen     = Dosen::whereNull('deleted_at')
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
                    'data_dosen',  
                )
            );
        ///////////////////////////////////////////////////////////////
    }

    public function update(Request $request, Mahasiswa $Mahasiswa)
    {
        // ----------------------------------------------------------- Auth
            $user = auth()->user();   

        // ----------------------------------------------------------- Initialize
            $content        = $this->content;

        // ----------------------------------------------------------- Action   
            //get post
            $data = $Mahasiswa;
 
            //update 
            $data->update([ 
                'nama'          => $request->nama, 

                'judul_skripsi'             => $request->judul_skripsi, 
                'tahun_masuk'               => $request->tahun_masuk, 
                'semester_masuk'            => $request->semester_masuk, 
                
                'dosen_pembimbing_1_id'          => $request->dosen_pembimbing_1,
                'dosen_pembimbing_2_id'          => $request->dosen_pembimbing_2,
 
                'repositori_skripsi'            => $request->repositori_skripsi,
                'whatsapp'                      => $request->whatsapp,

                'nrp'          => $request->nrp, 
            ]);  
        // ----------------------------------------------------------- Send
            if($data)
            {
                return redirect()
                    ->route($content.'.index')
                    ->with(['saved_data' => define_messages('saved_data')]);
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
