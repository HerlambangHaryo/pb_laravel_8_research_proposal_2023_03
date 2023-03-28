@extends('template.'.$template.'.form')

@section('title', $panel_name)

@section('content')    
    <form class="col-12" action="{{ route($content.'.destroy', $Publikasi_artikel->id ) }}" 
        method="POST"  > 
        @csrf   
        @method('DELETE') 

        <div class="card mb-4">
            <x-studio_v30.general-form-card-header 
                view="{{ $view_file }}"  
                panel="{{ $panel_name }}"/> 
            <div class="card-body pb-4">     
                <div>  
                    <!-- Judul -->
                        <div class="form-group row mb-3">
                            <label class="col-2 col-form-label">
                                Judul
                            </label>
                            <div class="col-6">
                                <textarea 
                                    class="form-control" 
                                    name="judul"  
                                    rows="5"
                                    disabled>{{ old('judul', $Publikasi_artikel->judul) }}</textarea>   
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
                        <div class="col-2">
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

        <x-studio_v30.button-submit />
    </form>
@endsection
