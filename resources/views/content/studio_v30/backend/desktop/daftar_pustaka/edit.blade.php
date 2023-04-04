@extends('template.'.$template.'.form')

@section('title', $panel_name)

@section('content')    
    <form class="col-12" action="{{ route($content.'.update', $Jadwal_penelitian->id ) }}" 
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
                        <!-- Kegiatan -->
                            <div class="form-group row mb-3">
                                <label class="col-2 col-form-label">
                                    Kegiatan
                                </label>
                                <div class="col-6">
                                    <textarea 
                                        class="form-control" 
                                        name="kegiatan"  
                                        rows="5">{{ old('kegiatan', $Jadwal_penelitian->kegiatan) }}</textarea>  
                                </div>
                            </div> 
                        <!-- urutan -->
                            <div class="form-group row mb-3">
                                <label class="col-2 col-form-label">
                                    Urutan
                                </label>
                                <div class="col-2">
                                    <input 
                                        type="number" 
                                        class="form-control form-control-lg"  
                                        name="urutan"
                                        value="{{ old('urutan', $Jadwal_penelitian->urutan) }}"
                                    >
                                </div>
                            </div>  
                        <!-- Bulan Pengerjaan -->
                        <div class="form-group row mb-3">
                            <label class="col-2 col-form-label">
                                Bulan Pengerjaan
                            </label>
                            <div class="col-4">
                                <input 
                                    type="text" 
                                    class="form-control form-control-lg"  
                                    name="bulan"
                                    value="{{ old('bulan', $Jadwal_penelitian->bulan) }}"
                                >
                            </div>
                        </div> 

                        
                    <!-- Indikator Capaian -->
                        <div class="form-group row mb-3">
                            <label class="col-2 col-form-label">
                                Indikator Capaian
                            </label>
                            <div class="col-6">
                                <textarea 
                                    class="form-control" 
                                    name="indikator_capaian"  
                                    rows="5">{{ old('indikator_capaian', $Jadwal_penelitian->indikator_capaian) }}</textarea>   
                            </div> 
                        </div> 


                    </div> 
                </div> 
            </div>            
        </div> 
 
        <x-studio_v30.button-submit />
    </form>
@endsection
