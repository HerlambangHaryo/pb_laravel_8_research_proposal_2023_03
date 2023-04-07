@extends('template.'.$template.'.form')

@section('title', $panel_name)

@section('content')    
    <form class="col-12" action="{{ route($content.'.update', $Ringkasan->id ) }}"  
        method="POST"  > 
        @csrf   
        @method('PUT') 

        <div class="card mb-4">
            <x-studio_v30.general-form-card-header 
                    view="{{ $view_file }}"  
                    panel="Latar belakang - {{ $panel_name }}"/>
            <div class="card-body pb-4">    
                <div class="row justify-content-md-center">     
                    <div class="col-11"> 
                         
                        <!-- Latar belakang -->
                            <div class="form-group row mb-3">
                                <label class="col-2 col-form-label">
                                    Latar belakang (83)
                                </label>
                                <div class="col-8">
                                    <textarea 
                                        class="form-control" 
                                        name="ringkasan_latar_belakang"  
                                        rows="10">{{ old('ringkasan_latar_belakang', $Ringkasan->ringkasan_latar_belakang) }}</textarea>  
                                </div>
                            </div>   
                        <!-- Latar belakang catatan -->
                            <div class="form-group row mb-3">
                                <label class="col-2 col-form-label">
                                    Catatan
                                </label>
                                <div class="col-8">
                                    <textarea 
                                        class="form-control" 
                                        name="ringkasan_latar_belakang_catatan"  
                                        rows="3">{{ old('ringkasan_latar_belakang_catatan', $Ringkasan->ringkasan_latar_belakang_catatan) }}</textarea>  
                                </div>
                            </div>   
                    </div> 
                </div> 
            </div>            
        </div> 
        
        <div class="card mb-4">
            <x-studio_v30.general-form-card-header 
                view="{{ $view_file }}"  
                panel="Tujuan - {{ $panel_name }}"/>
            <div class="card-body pb-4">    
                <div class="row justify-content-md-center">     
                    <div class="col-11"> 
                        
                        <!-- Tujuan -->
                            <div class="form-group row mb-3">
                                <label class="col-2 col-form-label">
                                    Tujuan (83)
                                </label>
                                <div class="col-8">
                                    <textarea 
                                        class="form-control" 
                                        name="ringkasan_tujuan"  
                                        rows="10">{{ old('ringkasan_tujuan', $Ringkasan->ringkasan_tujuan) }}</textarea>  
                                </div>
                            </div>   
                        <!-- Tujuan catatan -->
                            <div class="form-group row mb-3">
                                <label class="col-2 col-form-label">
                                    Catatan
                                </label>
                                <div class="col-8">
                                    <textarea 
                                        class="form-control" 
                                        name="ringkasan_tujuan_catatan"  
                                        rows="3">{{ old('ringkasan_tujuan_catatan', $Ringkasan->ringkasan_tujuan_catatan) }}</textarea>  
                                </div>
                            </div>   
                    </div> 
                </div> 
            </div>            
        </div>  

        <div class="card mb-4">
            <x-studio_v30.general-form-card-header 
                view="{{ $view_file }}"  
                panel="Tahapan metode - {{ $panel_name }}"/>
            <div class="card-body pb-4">    
                <div class="row justify-content-md-center">     
                    <div class="col-11"> 
                        
                        <!-- Tahapan metode -->
                            <div class="form-group row mb-3">
                                <label class="col-2 col-form-label">
                                    Tahapan metode (83)
                                </label>
                                <div class="col-8">
                                    <textarea 
                                        class="form-control" 
                                        name="ringkasan_tahapan_metode"  
                                        rows="10">{{ old('ringkasan_tahapan_metode', $Ringkasan->ringkasan_tahapan_metode) }}</textarea>  
                                </div>
                            </div>   
                        <!-- Tahapan metode catatan -->
                            <div class="form-group row mb-3">
                                <label class="col-2 col-form-label">
                                    Catatan
                                </label>
                                <div class="col-8">
                                    <textarea 
                                        class="form-control" 
                                        name="ringkasan_tahapan_metode_catatan"  
                                        rows="3">{{ old('ringkasan_tahapan_metode_catatan', $Ringkasan->ringkasan_tahapan_metode_catatan) }}</textarea>  
                                </div>
                            </div>   
                    </div> 
                </div> 
            </div>            
        </div> 

        <div class="card mb-4">
            <x-studio_v30.general-form-card-header 
                view="{{ $view_file }}"  
                panel="Luaran yang ditargetkan - {{ $panel_name }}"/>
            <div class="card-body pb-4">    
                <div class="row justify-content-md-center">     
                    <div class="col-11"> 
                        
                        <!-- Luaran yang ditargetkan -->
                            <div class="form-group row mb-3">
                                <label class="col-2 col-form-label">
                                    Luaran yang ditargetkan (83)
                                </label>
                                <div class="col-8">
                                    <textarea 
                                        class="form-control" 
                                        name="ringkasan_target_luaran"  
                                        rows="10">{{ old('ringkasan_target_luaran', $Ringkasan->ringkasan_target_luaran) }}</textarea>  
                                </div>
                            </div>   
                        <!-- Luaran yang ditargetkan catatan -->
                            <div class="form-group row mb-3">
                                <label class="col-2 col-form-label">
                                    Catatan
                                </label>
                                <div class="col-8">
                                    <textarea 
                                        class="form-control" 
                                        name="ringkasan_target_luaran_catatan"  
                                        rows="3">{{ old('ringkasan_target_luaran_catatan', $Ringkasan->ringkasan_target_luaran_catatan) }}</textarea>  
                                </div>
                            </div>   
                    </div> 
                </div> 
            </div>            
        </div> 

        <div class="card mb-4">
            <x-studio_v30.general-form-card-header 
                view="{{ $view_file }}"  
                panel="Capaian IKU - {{ $panel_name }}"/>
            <div class="card-body pb-4">    
                <div class="row justify-content-md-center">     
                    <div class="col-11"> 
                        
                        <!-- Capaian IKU -->
                            <div class="form-group row mb-3">
                                <label class="col-2 col-form-label">
                                    Capaian IKU (83)
                                </label>
                                <div class="col-8">
                                    <textarea 
                                        class="form-control" 
                                        name="ringkasan_capaian_iku"  
                                        rows="10">{{ old('ringkasan_capaian_iku', $Ringkasan->ringkasan_capaian_iku) }}</textarea>  
                                </div>
                            </div>   
                        <!-- Capaian IKU catatan -->
                            <div class="form-group row mb-3">
                                <label class="col-2 col-form-label">
                                    Catatan
                                </label>
                                <div class="col-8">
                                    <textarea 
                                        class="form-control" 
                                        name="ringkasan_capaian_iku_catatan"  
                                        rows="3">{{ old('ringkasan_capaian_iku_catatan', $Ringkasan->ringkasan_capaian_iku_catatan) }}</textarea>  
                                </div>
                            </div>   
                    </div> 
                </div> 
            </div>            
        </div> 

        <div class="card mb-4">
            <x-studio_v30.general-form-card-header 
                    view="{{ $view_file }}"  
                    panel="Capaian TKT - {{ $panel_name }}"/>
            <div class="card-body pb-4">    
                <div class="row justify-content-md-center">     
                    <div class="col-11"> 
                         
                        <!-- Capaian TKT -->
                            <div class="form-group row mb-3">
                                <label class="col-2 col-form-label">
                                Capaian TKT (83)
                                </label>
                                <div class="col-8">
                                    <textarea 
                                        class="form-control" 
                                        name="ringkasan_capaian_tkt"  
                                        rows="10">{{ old('ringkasan_capaian_tkt', $Ringkasan->ringkasan_capaian_tkt) }}</textarea>  
                                </div>
                            </div>   
                        <!-- Capaian TKT -->
                            <div class="form-group row mb-3">
                                <label class="col-2 col-form-label">
                                    Catatan
                                </label>
                                <div class="col-8">
                                    <textarea 
                                        class="form-control" 
                                        name="ringkasan_capaian_tkt_catatan"  
                                        rows="3">{{ old('ringkasan_capaian_tkt_catatan', $Ringkasan->ringkasan_capaian_tkt_catatan) }}</textarea>  
                                </div>
                            </div>   
                    </div> 
                </div> 
            </div>            
        </div> 

        <x-studio_v30.button-submit />
    </form>
@endsection
