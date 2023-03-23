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
            <!-- Jenis -->
                <div class="form-group row mb-3">
                    <label class="col-2 col-form-label">
                        Jenis
                    </label>
                    <div class="col-6">
                        <input 
                            type="text" 
                            class="form-control form-control-lg"  
                            name="jenis"
                            value="{{ old('jenis', $Penghargaan->jenis) }}"
                            disabled
                        >
                    </div>
                </div> 
            <!-- Instansi -->
                <div class="form-group row mb-3">
                    <label class="col-2 col-form-label">
                        Instansi
                    </label>
                    <div class="col-6">
                        <input 
                            type="text" 
                            class="form-control form-control-lg"  
                            name="instansi"
                            value="{{ old('instansi', $Penghargaan->instansi) }}"
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
                            value="{{ old('tahun', $Penghargaan->tahun) }}"
                            disabled
                        >
                    </div>
                </div> 
        </div> 
    </div>            
</div> 
@endsection
