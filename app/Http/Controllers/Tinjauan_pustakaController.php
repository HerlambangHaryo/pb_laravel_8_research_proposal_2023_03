<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Jenssegers\Agent\Agent;
use DB;

use App\Models\Penelitian;
use Illuminate\Support\Facades\Storage;

class Tinjauan_pustakaController extends Controller
{
    //
    public $template    = 'studio_v30';
    public $mode        = '';
    public $themecolor  = '';
    public $content     = 'Tinjauan_pustaka';
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
                    'user',
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

    public function edit(Penelitian $Tinjauan_pustaka)
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
                    'Tinjauan_pustaka',
                )
            );
        ///////////////////////////////////////////////////////////////
    }

    public function update(Request $request, Penelitian $Tinjauan_pustaka)
    {
        // ----------------------------------------------------------- Auth
            $user = auth()->user();

        // ----------------------------------------------------------- Initialize
            $content        = $this->content;

        // ----------------------------------------------------------- Action
            $data = Penelitian::findOrFail($Tinjauan_pustaka->id);



            if($request->file('tinjauan_pustaka_roadmap') == "") {

                $data->update([
                    'tinjauan_pustaka_state_of_the_art'     => $request->tinjauan_pustaka_state_of_the_art,
                    'tinjauan_pustaka_sebelum'              => $request->tinjauan_pustaka_sebelum,
                    'tinjauan_pustaka_setelah'              => $request->tinjauan_pustaka_setelah,
                    'tinjauan_pustaka_umum'                 => $request->tinjauan_pustaka_umum,

                    'tinjauan_pustaka_state_of_the_art_catatan'     => $request->tinjauan_pustaka_state_of_the_art_catatan,
                    'tinjauan_pustaka_sebelum_catatan'              => $request->tinjauan_pustaka_sebelum_catatan,
                    'tinjauan_pustaka_setelah_catatan'              => $request->tinjauan_pustaka_setelah_catatan,
                    'tinjauan_pustaka_umum_catatan'                 => $request->tinjauan_pustaka_umum_catatan,
                ]);

            } else {

                //hapus old image
                Storage::disk('local')->delete('public/tinjauan_pustaka/'.$data->tinjauan_pustaka_roadmap);

                //upload new image
                $tinjauan_pustaka_roadmap = $request->file('tinjauan_pustaka_roadmap');
                $tinjauan_pustaka_roadmap->storeAs('public/tinjauan_pustaka', $tinjauan_pustaka_roadmap->hashName());

                $data->update([
                    'tinjauan_pustaka_state_of_the_art'     => $request->tinjauan_pustaka_state_of_the_art,
                    'tinjauan_pustaka_sebelum'              => $request->tinjauan_pustaka_sebelum,
                    'tinjauan_pustaka_setelah'              => $request->tinjauan_pustaka_setelah,
                    'tinjauan_pustaka_umum'                 => $request->tinjauan_pustaka_umum,

                    'tinjauan_pustaka_state_of_the_art_catatan'     => $request->tinjauan_pustaka_state_of_the_art_catatan,
                    'tinjauan_pustaka_sebelum_catatan'              => $request->tinjauan_pustaka_sebelum_catatan,
                    'tinjauan_pustaka_setelah_catatan'              => $request->tinjauan_pustaka_setelah_catatan,
                    'tinjauan_pustaka_umum_catatan'                 => $request->tinjauan_pustaka_umum_catatan,


                    'tinjauan_pustaka_roadmap'         => $tinjauan_pustaka_roadmap->hashName(),
                ]);
            }


        // ----------------------------------------------------------- Send
            if($data)
            {
                # tinjauan_pustaka/Peneliti/1
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
