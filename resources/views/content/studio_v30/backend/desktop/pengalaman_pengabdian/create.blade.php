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
                                    type="number" min="1900" max="2099"
                                    class="form-control form-control-lg"  
                                    name="tahun"
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
                                >
                            </div>
                        </div> 
                    
                    <!-- Jumlah Pendanaan -->
                    <div class="form-group row mb-3">
                            <label class="col-2 col-form-label">
                                Jumlah Pendanaan
                            </label>
                            <div class="col-6">
                                <input 
                                    type="number" 
                                    class="form-control form-control-lg"  
                                    name="jumlah_pendanaan"
                                >
                            </div>
                        </div> 
                </div> 
            </div>            
        </div> 
 
        <x-studio_v30.button-submit />
    </form>
@endsection
