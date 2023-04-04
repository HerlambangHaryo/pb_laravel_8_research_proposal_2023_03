@extends('template.'.$template.'.form')

@section('title', $panel_name)

@section('content')    
    <form class="col-12" action="{{ route($content.'.update', $Metode_penelitian->id ) }}"  
        enctype="multipart/form-data" 
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
                         
                        <!-- Uraian diagram alir (100) -->
                            <div class="form-group row mb-3">
                                <label class="col-2 col-form-label">
                                    Uraian diagram alir (100)
                                </label>
                                <div class="col-8">
                                    <textarea 
                                        class="form-control" 
                                        name="metode_uraian"  
                                        rows="10">{{ old('metode_uraian', $Metode_penelitian->metode_uraian) }}</textarea>  
                                </div>
                            </div>  
                        <!-- Gambar Metode -->
                            <div class="form-group row mb-3">
                                <label class="col-2 col-form-label">
                                    Gambar Metode
                                </label>
                                <div class="col-6">
                                    <input 
                                        type="file" 
                                        class="form-control form-control-lg"  
                                        name="metode_gambar" 
                                    >
                                </div>
                            </div>   
                        <!-- Tahapan detail dan jelas (100) -->
                            <div class="form-group row mb-3">
                                <label class="col-2 col-form-label">
                                    Tahapan detail dan jelas (100)
                                </label>
                                <div class="col-8">
                                    <textarea 
                                        class="form-control" 
                                        name="metode_detail"  
                                        rows="10">{{ old('metode_detail', $Metode_penelitian->metode_detail) }}</textarea>  
                                </div>
                            </div>  
                        <!-- Luaran (100) -->
                            <div class="form-group row mb-3">
                                <label class="col-2 col-form-label">
                                    Luaran (100)
                                </label>
                                <div class="col-8">
                                    <textarea 
                                        class="form-control" 
                                        name="metode_luaran"  
                                        rows="10">{{ old('metode_luaran', $Metode_penelitian->metode_luaran) }}</textarea>  
                                </div>
                            </div>  
                        <!-- Indicator capaian (100) -->
                            <div class="form-group row mb-3">
                                <label class="col-2 col-form-label">
                                    Indicator capaian (100)
                                </label>
                                <div class="col-8">
                                    <textarea 
                                        class="form-control" 
                                        name="metode_capaian"  
                                        rows="10">{{ old('metode_capaian', $Metode_penelitian->metode_capaian) }}</textarea>  
                                </div>
                            </div>   
                        <!-- 5.	Tugas masing masing sesuai tahapan (100) -->
                            <div class="form-group row mb-3">
                                <label class="col-2 col-form-label">
                                    Tugas masing masing sesuai tahapan (100)
                                </label>
                                <div class="col-8">
                                    <textarea 
                                        class="form-control" 
                                        name="metode_tugas_pengusul"  
                                        rows="10">{{ old('metode_tugas_pengusul', $Metode_penelitian->metode_tugas_pengusul) }}</textarea>  
                                </div>
                            </div>    
                    </div> 
                </div> 
            </div>            
        </div> 
  

        <x-studio_v30.button-submit />
    </form>
@endsection
