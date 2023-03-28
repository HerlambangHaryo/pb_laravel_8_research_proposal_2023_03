@extends('template.'.$template.'.form')

@section('title', $panel_name)

@section('content')    
    <form class="col-12" action="{{ route($content.'.store' ) }}" 
        method="POST"  > 
        @csrf   

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
                                >
                            </div>
                        </div>  
                </div> 
            </div>            
        </div> 
 
        <x-studio_v30.button-submit />
    </form>
@endsection
