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
                                value="{{ old('judul', $Publikasi_artikel->judul) }}"
                                disabled
                            >
                        </div>
                    </div> 
                <!-- Jurnal -->
                    <div class="form-group row mb-3">
                        <label class="col-2 col-form-label">
                            Jurnal
                        </label>
                        <div class="col-6">
                            <input 
                                type="text" 
                                class="form-control form-control-lg"  
                                name="jurnal"
                                value="{{ old('jurnal', $Publikasi_artikel->jurnal) }}"
                                disabled
                            >
                        </div>
                    </div> 
                <!-- Volume -->
                    <div class="form-group row mb-3">
                        <label class="col-2 col-form-label">
                            Volume
                        </label>
                        <div class="col-6">
                            <input 
                                type="text" 
                                class="form-control form-control-lg"  
                                name="volume"
                                value="{{ old('volume', $Publikasi_artikel->volume) }}"
                                disabled
                            >
                        </div>
                    </div> 
                <!-- Nomor -->
                    <div class="form-group row mb-3">
                        <label class="col-2 col-form-label">
                            Nomor
                        </label>
                        <div class="col-6">
                            <input 
                                type="text" 
                                class="form-control form-control-lg"  
                                name="nomor"
                                value="{{ old('nomor', $Publikasi_artikel->nomor) }}"
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
                                value="{{ old('tahun', $Publikasi_artikel->tahun) }}"
                                disabled
                            >
                        </div>
                    </div> 

                    
                <!-- Link -->
                    <div class="form-group row mb-3">
                        <label class="col-2 col-form-label">
                            Link
                        </label>
                        <div class="col-6">
                            <textarea 
                                class="form-control" 
                                name="url"  
                                rows="5" disabled>{{ old('url', $Publikasi_artikel->url) }}</textarea> 
                        </div>
                    </div>  
            </div> 
        </div>            
    </div>   
@endsection