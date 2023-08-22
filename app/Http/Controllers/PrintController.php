<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Jenssegers\Agent\Agent;
use DB;

use App\Models\Penelitian;

class PrintController extends Controller
{
    //
    public $template    = 'print_a4';
    public $mode        = '';
    public $themecolor  = '';
    public $content     = 'Print';
    public $type        = 'backend';

    public function show(Penelitian $Print)
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

            # $view_file      = 'data';
        // ----------------------------------------------------------- Action
            $Penelitian     = Penelitian::where('id', '=', $Print->id)
                                ->first();

            $view_file      = ucwords(str_replace(" ","_", $Penelitian->skema));
            $view           = define_view($this->template, $this->type, $this->content, $additional_view, $view_file);
            $pre_view       = 'content.print_a4.backend.desktop.print.';


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
                    'view',
                    'pre_view',
                )
            );
        ///////////////////////////////////////////////////////////////
    }

    public function print_subbab_review(Penelitian $Print, $Review)
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

            # $view_file      = 'data';
        // ----------------------------------------------------------- Action
            $Penelitian     = Penelitian::where('id', '=', $Print->id)
                                ->first();

            $view_file      = ucwords(str_replace(" ","_", $Penelitian->skema)).'_subbab_review_';
            $view           = define_view($this->template, $this->type, $this->content, $additional_view, $view_file);
            $pre_view       = 'content.print_a4.backend.desktop.print.';


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
                    'view',
                    'Review',
                    'pre_view'
                )
            );
        ///////////////////////////////////////////////////////////////
    }


    public function Print_set_page_number(Penelitian $Print, $Review)
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

            # $view_file      = 'data';
        // ----------------------------------------------------------- Action
            $Penelitian     = Penelitian::where('id', '=', $Print->id)
                                ->first();

            $view_file      = ucwords(str_replace(" ","_", $Penelitian->skema.'_'.$Review));
            $view           = define_view($this->template, $this->type, $this->content, $additional_view, $view_file);
            $pre_view       = 'content.print_a4.backend.desktop.print.';

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
                    'view',
                    'pre_view',
                )
            );
        ///////////////////////////////////////////////////////////////
    }
}
