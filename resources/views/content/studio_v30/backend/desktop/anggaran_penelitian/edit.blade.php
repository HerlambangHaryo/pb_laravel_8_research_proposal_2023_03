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
                    panel="{{ $panel_name }}"/>
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
                        <!-- 4.	Luaran yang ditargetkan (83) -->
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
                        <!-- 5.	Capaian IKU (83) -->
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
                        <!-- 6.	Capaian TKT (83) -->
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
                    </div> 
                </div> 
            </div>            
        </div> 
  

        <x-studio_v30.button-submit />
    </form>
@endsection
