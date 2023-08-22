<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

use Jenssegers\Agent\Agent;
use DB;   
 
use App\Models\Jadwal_bimbingan;
use App\Models\Bimbingan; 
use App\Models\Mahasiswa; 
use App\Models\Dosen; 

use Carbon\Carbon;

class BimbinganController extends Controller
{
    //
    public $template    = 'studio_v30';
    public $mode        = '';
    public $themecolor  = '';
    public $content     = 'Bimbingan';
    public $type        = 'backend';
   
    public function createpembimbing1()
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
            $row                    = Mahasiswa::where('user_id', '=', $user->id)
                                        ->first();

            $dosen                  = Dosen::where('id', '=', $row->dosen_pembimbing_1_id) 
                                        ->first();

            $jadwal_bimbingan_harian        = Jadwal_bimbingan::select(
                                                '*',
                                                DB::raw('DATE_FORMAT(tanggal_mulai, "%Y-%m-%d %H:%i:%s") as mulai'), 
                                                DB::raw('DATE_FORMAT(tanggal_berakhir, "%Y-%m-%d %H:%i:%s") as berakhir'),
                                                DB::raw('DATE_FORMAT(tanggal_mulai, "%H:%i") as jam_mulai'), 
                                                DB::raw('DATE_FORMAT(tanggal_berakhir, "%H:%i") as jam_berakhir'),
                                                )
                                                ->where('dosen_id', '=', $dosen->user_id) 
                                                ->where('berulang', '=', 1)
                                                ->get();

            $jadwal_bimbingan_minggu_ini    = Jadwal_bimbingan::select(
                                                '*',
                                                DB::raw('DATE_FORMAT(tanggal_mulai, "%Y-%m-%d %H:%i:%s") as mulai'), 
                                                DB::raw('DATE_FORMAT(tanggal_berakhir, "%Y-%m-%d %H:%i:%s") as berakhir'),
                                                DB::raw('DATE_FORMAT(tanggal_mulai, "%H:%i") as jam_mulai'), 
                                                DB::raw('DATE_FORMAT(tanggal_berakhir, "%H:%i") as jam_berakhir'),
                                                )
                                                ->where('dosen_id', '=', $dosen->user_id) 
                                                ->where('berulang', '=', 2)
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
                    'jadwal_bimbingan_harian',  
                    'jadwal_bimbingan_minggu_ini' 
                )
            );
        ///////////////////////////////////////////////////////////////
    }

    public function createpembimbing2()
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
            $row                    = Mahasiswa::where('user_id', '=', $user->id)
                                        ->first();

            $dosen                  = Dosen::where('id', '=', $row->dosen_pembimbing_2_id) 
                                        ->first();

            $jadwal_bimbingan_harian        = Jadwal_bimbingan::select(
                                                '*',
                                                DB::raw('DATE_FORMAT(tanggal_mulai, "%Y-%m-%d %H:%i:%s") as mulai'), 
                                                DB::raw('DATE_FORMAT(tanggal_berakhir, "%Y-%m-%d %H:%i:%s") as berakhir'),
                                                DB::raw('DATE_FORMAT(tanggal_mulai, "%H:%i") as jam_mulai'), 
                                                DB::raw('DATE_FORMAT(tanggal_berakhir, "%H:%i") as jam_berakhir'),
                                                )
                                                ->where('dosen_id', '=', $dosen->user_id) 
                                                ->where('berulang', '=', 1)
                                                ->get();

            $jadwal_bimbingan_minggu_ini    = Jadwal_bimbingan::select(
                                                '*',
                                                DB::raw('DATE_FORMAT(tanggal_mulai, "%Y-%m-%d %H:%i:%s") as mulai'), 
                                                DB::raw('DATE_FORMAT(tanggal_berakhir, "%Y-%m-%d %H:%i:%s") as berakhir'),
                                                DB::raw('DATE_FORMAT(tanggal_mulai, "%H:%i") as jam_mulai'), 
                                                DB::raw('DATE_FORMAT(tanggal_berakhir, "%H:%i") as jam_berakhir'),
                                                )
                                                ->where('dosen_id', '=', $dosen->user_id) 
                                                ->where('berulang', '=', 2)
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
                    'jadwal_bimbingan_harian',  
                    'jadwal_bimbingan_minggu_ini' 
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
            $data_mahasiswa     = Mahasiswa::where('user_id', '=', $user->id)
                                    ->first();

            $data_jadwal        = Jadwal_bimbingan::where('id', '=', $request->jadwal_id)
                                    ->first();
 
            $dateString = $request->tanggal; 

            $dateTime = Carbon::createFromFormat('l, d F Y', $dateString);
            $formattedDate = $dateTime->format('Y-m-d');

            $data = Bimbingan::create([
                'mahasiswa_id'      => $data_mahasiswa->id,
                'dosen_id'          => $data_jadwal->dosen_id, 
                'lokasi'            => $request->lokasi,  
                'status_bimbingan'  => 1,  
                'tanggal'           => $formattedDate.' '.$request->jam,  
            ]); 

        // ----------------------------------------------------------- Send
            if($data)
            {
                return redirect()
                    ->route('Dashboard.index')
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
