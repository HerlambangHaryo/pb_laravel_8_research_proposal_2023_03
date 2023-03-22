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
                                Artikel
                            </label>
                            <div class="col-6">
                                <input 
                                    type="text" 
                                    class="form-control form-control-lg"  
                                    name="judul"
                                >
                            </div>
                        </div> 
                    <!-- Seminar -->
                        <div class="form-group row mb-3">
                            <label class="col-2 col-form-label">
                                Seminar
                            </label>
                            <div class="col-6">
                                <input 
                                    type="text" 
                                    class="form-control form-control-lg"  
                                    name="seminar"
                                >
                            </div>
                        </div> 
                    <!-- Tanggal -->
                        <div class="form-group row mb-3">
                            <label class="col-2 col-form-label">
                                Tanggal
                            </label>
                            <div class="col-6">
                                <input 
                                    type="date" 
                                    class="form-control form-control-lg"  
                                    name="tanggal"
                                >
                            </div>
                        </div> 
                    <!-- Tempat -->
                        <div class="form-group row mb-3">
                            <label class="col-2 col-form-label">
                                Tempat
                            </label>
                            <div class="col-6">
                                <input 
                                    type="text" 
                                    class="form-control form-control-lg"  
                                    name="tempat"
                                >
                            </div>
                        </div> 
                </div> 
            </div>            
        </div> 
 
        <x-studio_v30.button-submit />
    </form>
@endsection
