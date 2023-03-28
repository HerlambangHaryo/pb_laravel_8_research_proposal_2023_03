@extends('template.'.$template.'.form')

@section('title', $panel_name)

@section('content')    
    <form class="col-12" action="{{ route($content.'.update', $Pemakalah_seminar->id ) }}" 
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
                        <!-- Judul -->
                            <div class="form-group row mb-3">
                                <label class="col-2 col-form-label">
                                    Artikel
                                </label>
                                <div class="col-6">
                                    <input 
                                        type="text" 
                                        class="form-control form-control-lg"  
                                        name="judul"
                                        value="{{ old('judul', $Pemakalah_seminar->judul) }}"
                                    >
                                </div>
                            </div> 
                        <!-- Seminar -->
                            <div class="form-group row mb-3">
                                <label class="col-2 col-form-label">
                                    Seminar
                                </label>
                                <div class="col-6">
                                    <input 
                                        type="text" 
                                        class="form-control form-control-lg"  
                                        name="seminar"
                                        value="{{ old('seminar', $Pemakalah_seminar->seminar) }}"
                                    >
                                </div>
                            </div> 
                        <!-- Tanggal -->
                            <div class="form-group row mb-3">
                                <label class="col-2 col-form-label">
                                    Tanggal
                                </label>
                                <div class="col-6">
                                    <input 
                                        type="date" 
                                        class="form-control form-control-lg"  
                                        name="tanggal"
                                        value="{{ old('tanggal', $Pemakalah_seminar->tanggal) }}"
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
                                        value="{{ old('tempat', $Pemakalah_seminar->tempat) }}"
                                    >
                                </div>
                            </div> 
                    </div> 
                </div>  
            </div>            
        </div>  

        <x-studio_v30.button-submit />
    </form>
@endsection
