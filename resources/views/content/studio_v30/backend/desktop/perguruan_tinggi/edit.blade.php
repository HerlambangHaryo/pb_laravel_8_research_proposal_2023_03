@extends('template.'.$template.'.form')

@section('title', $panel_name)

@section('content')    
    <form class="col-12" action="{{ route($content.'.update', $Perguruan_tinggi->id ) }}" 
        method="POST"  > 
        @csrf   
        @method('PUT') 
 
        <div class="card mb-4">
            <x-studio_v30.general-form-card-header 
                view_file="{{ $view_file }}"  
                panel_name="{{ $panel_name }}"/>  
            <div class="card-body pb-4">     
                <div> 
                    <!-- Nama -->
                        <div class="form-group row mb-3">
                            <label class="col-2 col-form-label">
                                Nama
                            </label>
                            <div class="col-6">
                                <input 
                                    type="text" 
                                    class="form-control form-control-lg"  
                                    name="nama"
                                    value="{{ old('nama', $Perguruan_tinggi->nama) }}"
                                >
                            </div>
                        </div> 
                    <!-- Alamat -->
                        <div class="form-group row mb-3">
                            <label class="col-2 col-form-label">
                                Alamat
                            </label>
                            <div class="col-6">
                                <input 
                                    type="text" 
                                    class="form-control form-control-lg"  
                                    name="alamat"
                                    value="{{ old('alamat', $Perguruan_tinggi->alamat) }}"
                                >
                            </div>
                        </div> 
                    <!-- Kelurahan -->
                        <div class="form-group row mb-3">
                            <label class="col-2 col-form-label">
                                Kelurahan
                            </label>
                            <div class="col-6">
                                <input 
                                    type="text" 
                                    class="form-control form-control-lg"  
                                    name="kelurahan"
                                    value="{{ old('kelurahan', $Perguruan_tinggi->kelurahan) }}"
                                >
                            </div>
                        </div> 
                    <!-- Kecamatan -->
                        <div class="form-group row mb-3">
                            <label class="col-2 col-form-label">
                                Kecamatan
                            </label>
                            <div class="col-6">
                                <input 
                                    type="text" 
                                    class="form-control form-control-lg"  
                                    name="kecamatan"
                                    value="{{ old('kecamatan', $Perguruan_tinggi->kecamatan) }}"
                                >
                            </div>
                        </div> 
                    <!-- Kota -->
                        <div class="form-group row mb-3">
                            <label class="col-2 col-form-label">
                                Kota
                            </label>
                            <div class="col-6">
                                <input 
                                    type="text" 
                                    class="form-control form-control-lg"  
                                    name="kota"
                                    value="{{ old('kota', $Perguruan_tinggi->kota) }}"
                                >
                            </div>
                        </div> 
                    <!-- provinsi -->
                        <div class="form-group row mb-3">
                            <label class="col-2 col-form-label">
                                Provinsi
                            </label>
                            <div class="col-6">
                                <input 
                                    type="text" 
                                    class="form-control form-control-lg"  
                                    name="provinsi"
                                    value="{{ old('provinsi', $Perguruan_tinggi->provinsi) }}"
                                >
                            </div>
                        </div> 
                    <!-- Kodepos -->
                        <div class="form-group row mb-3">
                            <label class="col-2 col-form-label">
                                Kodepos
                            </label>
                            <div class="col-6">
                                <input 
                                    type="text" 
                                    class="form-control form-control-lg"  
                                    name="kodepos"
                                    value="{{ old('kodepos', $Perguruan_tinggi->kodepos) }}"
                                >
                            </div>
                        </div>  
                    <!-- Telepon -->
                        <div class="form-group row mb-3">
                            <label class="col-2 col-form-label">
                                Telepon
                            </label>
                            <div class="col-6">
                                <input 
                                    type="text" 
                                    class="form-control form-control-lg"  
                                    name="telepon"
                                    value="{{ old('telepon', $Perguruan_tinggi->telepon) }}"
                                >
                            </div>
                        </div>  
                </div> 
            </div>            
        </div> 

        <x-studio_v30.button-submit />
    </form>
@endsection
