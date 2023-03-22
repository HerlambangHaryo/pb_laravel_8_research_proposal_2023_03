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
                                    rows="5"></textarea> 
                            </div>
                        </div>  
                </div> 
            </div>            
        </div> 
 
        <x-studio_v30.button-submit />
    </form>
@endsection