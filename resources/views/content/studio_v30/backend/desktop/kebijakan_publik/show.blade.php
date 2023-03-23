@extends('template.'.$template.'.form')

@section('title', $panel_name)

@section('content')  

<div class="card mb-4">
    <div class="card-header">
        <div class="row mt-1 mb-2">
            <div class="col-6">
                <h4>    
                    Form {{ ucfirst($view_file) }} - {{$panel_name}} 
                </h4>
            </div>
            <div class="col-6 text-right"> 
            </div> 
        </div>
    </div>
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
@endsection
