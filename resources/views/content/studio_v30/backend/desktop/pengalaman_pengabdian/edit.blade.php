@extends('template.'.$template.'.form')

@section('title', $panel_name)

@section('content')    
    <form class="col-12" action="{{ route($content.'.update', $Pengalaman_pengabdian->id ) }}" 
        method="POST"  > 
        @csrf   
        @method('PUT') 

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
                                <textarea 
                                    class="form-control" 
                                    name="judul"  
                                    rows="5">{{ old('judul', $Pengalaman_pengabdian->judul) }}</textarea>  
                            </div>
                        </div> 

                         
                    <!-- Tahun -->
                        <div class="form-group row mb-3">
                            <label class="col-2 col-form-label">
                                Tahun
                            </label>
                            <div class="col-2">
                                <input  
                                    type="number" min="1900" max="2099"
                                    class="form-control form-control-lg"  
                                    name="tahun"
                                    value="{{ old('tahun', $Pengalaman_pengabdian->tahun) }}"
                                >
                            </div>
                        </div> 
                    <!-- Sumber Pendanaan -->
                        <div class="form-group row mb-3">
                            <label class="col-2 col-form-label">
                                Sumber Pendanaan
                            </label>
                            <div class="col-6">
                                <input 
                                    type="text" 
                                    class="form-control form-control-lg"  
                                    name="sumber_pendanaan"
                                    value="{{ old('sumber_pendanaan', $Pengalaman_pengabdian->sumber_pendanaan) }}"
                                >
                            </div>
                        </div> 
                    
                    <!-- Jumlah Pendanaan -->
                    <div class="form-group row mb-3">
                            <label class="col-2 col-form-label">
                                Jumlah Pendanaan
                            </label>
                            <div class="col-4">
                                <input 
                                    type="number" 
                                    class="form-control form-control-lg"  
                                    name="jumlah_pendanaan"
                                    value="{{ old('jumlah_pendanaan', $Pengalaman_pengabdian->jumlah_pendanaan) }}"
                                >
                            </div>
                        </div> 
                </div> 
            </div>            
        </div>  

        <x-studio_v30.button-submit />
    </form>
@endsection
