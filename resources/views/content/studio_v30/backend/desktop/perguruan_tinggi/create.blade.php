@extends('template.'.$template.'.form')

@section('title', $panel_name)

@section('content')    
    <form class="col-12" action="{{ route($content.'.store' ) }}" 
        method="POST"  > 
        @csrf   

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
