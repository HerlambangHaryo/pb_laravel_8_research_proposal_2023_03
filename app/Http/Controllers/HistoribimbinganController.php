<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Jenssegers\Agent\Agent;
use DB;

use App\Models\Mahasiswa;
use App\Models\Dosen;
use App\Models\Bimbingan;

class HistoribimbinganController extends Controller
{
    //
    public $template    = 'studio_v30';
    public $mode        = '';
    public $themecolor  = '';
    public $content     = 'Historibimbingan';
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

            $Dosen_1        = Dosen::where('id', '=', $data->dosen_pembimbing_1_id)
                                ->first();

            $Bimbingan_1    = Bimbingan::where('dosen_id', '=', $Dosen_1->user_id)
                                ->where('status_bimbingan', '=',3)
                                ->count();

            $Dosen_2        = Dosen::where('id', '=', $data->dosen_pembimbing_2_id)
                                ->first();

            $Bimbingan_2    = Bimbingan::where('dosen_id', '=', $Dosen_2->user_id)
                                ->where('status_bimbingan', '=',3)
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
                    'Bimbingan_1',
                    'Bimbingan_2',
                )
            );
        ///////////////////////////////////////////////////////////////
    }
}
