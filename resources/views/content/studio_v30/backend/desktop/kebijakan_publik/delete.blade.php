@extends('template.'.$template.'.form')

@section('title', $panel_name)

@section('content')    
    <form class="col-12" action="{{ route($content.'.destroy', $Kebijakan_publik->id ) }}" 
        method="POST"  > 
        @csrf   
        @method('DELETE') 

        <div class="card mb-4">
            <x-studio_v30.general-form-card-header 
                view_file="{{ $view_file }}"  
                panel_name="{{ $panel_name }}"/>  
            <div class="card-body">     
                <div>  
                    <!-- Judul -->
                        <div class="form-group row mb-3">
                            <label class="col-2 col-form-label">
                                Judul
                            </label>
                            <div class="col-6">
                                <input 
                                    type="text" 
                                    class="form-control form-control-lg"  
                                    name="judul"
                                    value="{{ old('judul', $Kebijakan_publik->judul) }}"
                                    disabled
                                >
                            </div>
                        </div> 
                    <!-- Tahun -->
                        <div class="form-group row mb-3">
                            <label class="col-2 col-form-label">
                                Tahun
                            </label>
                            <div class="col-6">
                                <input 
                                    type="year" 
                                    class="form-control form-control-lg"  
                                    name="tahun"
                                    value="{{ old('tahun', $Kebijakan_publik->tahun) }}"
                                    disabled
                                >
                            </div>
                        </div> 
                    <!-- Tempat -->
                        <div class="form-group row mb-3">
                            <label class="col-2 col-form-label">
                                Tempat
                            </label>
                            <div class="col-6">
                                <input 
                                    type="text" 
                                    class="form-control form-control-lg"  
                                    name="tempat"
                                    value="{{ old('tempat', $Kebijakan_publik->tempat) }}"
                                    disabled
                                >
                            </div>
                        </div> 
                    <!-- Respon -->
                        <div class="form-group row mb-3">
                            <label class="col-2 col-form-label">
                                Respon
                            </label>
                            <div class="col-6">
                                <input 
                                    type="text" 
                                    class="form-control form-control-lg"  
                                    name="respon"
                                    value="{{ old('respon', $Kebijakan_publik->respon) }}"
                                    disabled
                                >
                            </div>
                        </div> 
                </div> 
            </div>            
        </div> 

        <x-studio_v30.button-submit />
    </form>
@endsection
