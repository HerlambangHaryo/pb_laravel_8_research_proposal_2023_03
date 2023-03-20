<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Jenssegers\Agent\Agent;
use DB;

use App\Models\Company;
  

class CompanyController extends Controller
{
    //
    public $template    = 'studio_v30';
    public $mode        = '';
    public $themecolor  = '';
    public $content     = 'Company';
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
            $view           = define_view($this->template, $this->type, $this->content, $additional_view, $view_file);
            
        // ----------------------------------------------------------- Action 
            $data           = array(); 
                                    
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
                )
            );
        ///////////////////////////////////////////////////////////////
    } 

    public function edit(Company $Company)
    {
        // ----------------------------------------------------------- Auth
            $user = auth()->user();  

        // ----------------------------------------------------------- Agent
            $agent              = new Agent(); 
            $additional_view    = define_additionalview($agent->isDesktop(), $agent->isMobile(), $agent->isTablet());

        // ----------------------------------------------------------- Initialize
            $panel_name     = $this->content;
            
            $template       = $this->template;
            $mode           = $this->mode;
            $themecolor     = $this->themecolor;
            $content        = $this->content;
            $active_as      = $content;

            $view_file      = 'edit';
            $view           = 'content.'.$this->template.'.backend.'.strtolower($this->content).'.'.$additional_view.'.'.$view_file;
            
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
                    'Company',   
                )
            );
        ///////////////////////////////////////////////////////////////
    }

    public function update(Request $request, Company $Company)
    {
        // ----------------------------------------------------------- Auth
            $user = auth()->user();  

        // ----------------------------------------------------------- Initialize
            $content        = $this->content;

        // ----------------------------------------------------------- Action 
 
            $model = Company::findOrFail(1);
             
            if($request->logo != '')
            {
                $image = $request->file('logo');
                $image->storeAs('public/company', $image->hashName());

                $model->update([
                    'nama'              => $request->nama,  
                    'alamat'            => $request->alamat, 
                    'kecamatan'         => $request->kecamatan, 
                    'kelurahan'         => $request->kelurahan,  
                    'kota'              => $request->kota,  
                    'provinsi'          => $request->provinsi,  
                    
                    'kodepos'           => $request->kodepos,  
                    'telepon'           => $request->telepon,   
                    'email'             => $request->email,  
                    'npwp'              => $request->npwp, 
 
                    'logo'              => $image->hashName(),
                ]); 

            }else{
                $model->update([
                    'nama'              => $request->nama,  
                    'alamat'            => $request->alamat, 
                    'kecamatan'         => $request->kecamatan, 
                    'kelurahan'         => $request->kelurahan,  
                    'kota'              => $request->kota,  
                    'provinsi'          => $request->provinsi,  
                    
                    'kodepos'           => $request->kodepos,  
                    'telepon'           => $request->telepon,   
                    'email'             => $request->email,  
                    'npwp'              => $request->npwp,  
                ]); 
            }
                
        // ----------------------------------------------------------- Send
            if($model)
            {
                return redirect()
                    ->route('Settings.index')
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