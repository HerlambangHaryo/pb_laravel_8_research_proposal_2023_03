@extends('template.'.$template.'.form')

@section('title', $panel_name)

@section('content')    
    <form class="col-12" action="{{ route($content.'.destroy', $Pemakalah_seminar->id ) }}" 
        method="POST"  > 
        @csrf   
        @method('DELETE') 

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
                                    value="{{ old('judul', $Pemakalah_seminar->judul) }}"
                                    disabled
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
                                    value="{{ old('seminar', $Pemakalah_seminar->seminar) }}"
                                    disabled
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
                                    value="{{ old('tanggal', $Pemakalah_seminar->tanggal) }}"
                                    disabled
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
                                    value="{{ old('tempat', $Pemakalah_seminar->tempat) }}"
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
