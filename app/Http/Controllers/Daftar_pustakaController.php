<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Jenssegers\Agent\Agent;
use DB;

use App\Models\Publikasi_artikel;
use App\Models\Penelitian;
use App\Models\Daftar_pustaka;

class Daftar_pustakaController extends Controller
{
    //
    public $template    = 'studio_v30';
    public $mode        = '';
    public $themecolor  = '';
    public $content     = 'Daftar_pustaka';
    public $type        = 'backend';

    public function Penelitian($id)
    {
        // ----------------------------------------------------------- Auth
            $user = auth()->user();
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
            $data               = Penelitian::where('id', '=', $id)
                                    ->get();

            $Penelitian         = Penelitian::where('id', '=', $id)
                                    ->first();


            $pre_data           = Daftar_pustaka::select('id_publikasi_artikel')
                                    ->where('id_penelitian', '=', $id);

            $Daftar_pustaka     = Publikasi_artikel::whereIn('id', $pre_data)
                                    ->orderBy('tahun')
                                    ->orderBy('judul')
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
                    'id',
                    'data',
                    'Penelitian',
                    'Daftar_pustaka',
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
                )
            );
        ///////////////////////////////////////////////////////////////
    }

    public function store(Request $request)
    {
        // ----------------------------------------------------------- Auth
            $user = auth()->user();

        // ----------------------------------------------------------- Initialize
            $id_penelitian = $request->session()->get('id_penelitian');

            $content        = $this->content;

        // ----------------------------------------------------------- Action

            $data = Publikasi_artikel::create([
                'judul'             => $request->judul,
                'jurnal'            => $request->jurnal,
                'volume'            => $request->volume,
                'nomor'             => $request->nomor,
                'tahun'             => $request->tahun,
                'url'               => $request->url,

                'sitasi'            => $request->sitasi,
                'tag_url'           => str_replace(" ", "_", $request->judul),
                'daftar_pustaka'    => $request->daftar_pustaka,
            ]);

            $data2 = Daftar_pustaka::create([
                'id_publikasi_artikel'      => $data->id,
                'id_penelitian'             => $id_penelitian,
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

    public function edit(Publikasi_artikel $Daftar_pustaka)
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
                    'Daftar_pustaka',
                )
            );
        ///////////////////////////////////////////////////////////////
    }

    public function update(Request $request, Publikasi_artikel $Daftar_pustaka)
    {
        // ----------------------------------------------------------- Auth
            $user = auth()->user();

        // ----------------------------------------------------------- Initialize
            $content        = $this->content;

        // ----------------------------------------------------------- Action
            $data = Publikasi_artikel::findOrFail($Daftar_pustaka->id);


            $data->update([
                'judul'             => ucwords($request->judul),
                'jurnal'            => $request->jurnal,
                'volume'            => $request->volume,
                'nomor'             => $request->nomor,
                'tahun'             => $request->tahun,
                'url'               => $request->url,

                'sitasi'            => $request->sitasi,
                'tag_url'           => str_replace(" ", "_", $request->judul),
                'daftar_pustaka'    => $request->daftar_pustaka,
            ]);

        // ----------------------------------------------------------- Send
            if($data)
            {
                # Daftar_pustaka/Peneliti/1
                return redirect()
                    ->route($content.'.Penelitian', $Daftar_pustaka->id_penelitian)
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

    public function show(Daftar_pustaka $Daftar_pustaka)
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
            $data = Publikasi_artikel::where('id', '=', $Daftar_pustaka->id)
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
                    'Daftar_pustaka',
                    'data',
                )
            );
        ///////////////////////////////////////////////////////////////
    }

    public function deletedata(Daftar_pustaka $Daftar_pustaka)
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
                    'Daftar_pustaka',
                )
            );
        ///////////////////////////////////////////////////////////////
    }

    public function destroy($id)
    {
        // ----------------------------------------------------------- Initialize
            $content        = $this->content;

        // ----------------------------------------------------------- Action
            $data = Publikasi_artikel::findOrFail($id);
            $data->delete();

        // ----------------------------------------------------------- Send
            if($data)
            {
                return redirect()
                    ->route($content.'.Peneliti', $data->id_peneliti)
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
