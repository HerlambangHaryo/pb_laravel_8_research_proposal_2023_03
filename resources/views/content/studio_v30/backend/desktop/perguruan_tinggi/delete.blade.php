@extends('template.'.$template.'.form')

@section('title', $panel_name)

@section('content')    
    <form class="col-12" action="{{ route($content.'.destroy', $Perguruan_tinggi->id ) }}" 
        method="POST"  > 
        @csrf   
        @method('DELETE') 

        <div class="card mb-4">
            <x-studio_v30.general-form-card-header 
                view="{{ $view_file }}"  
                panel="{{ $panel_name }}"/> 
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
                                    disabled
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
                                    disabled
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
                                    disabled
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
                                    disabled
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
                                    disabled
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
                                    disabled
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
                                    disabled
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
                                    disabled
                                >
                            </div>
                        </div>  
                    <!-- Fax -->
                        <div class="form-group row mb-3">
                            <label class="col-2 col-form-label">
                                Fax
                            </label>
                            <div class="col-6">
                                <input 
                                    type="text" 
                                    class="form-control form-control-lg"  
                                    name="fax"
                                    value="{{ old('fax', $Perguruan_tinggi->fax) }}"
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
