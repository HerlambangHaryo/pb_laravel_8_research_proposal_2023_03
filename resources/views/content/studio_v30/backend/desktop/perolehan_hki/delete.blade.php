@extends('template.'.$template.'.form')

@section('title', $panel_name)

@section('content')    
    <form class="col-12" action="{{ route($content.'.destroy', $Perolehan_hki->id ) }}" 
        method="POST"  > 
        @csrf   
        @method('DELETE') 

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
                                    rows="5" 
                                    disabled>{{ old('judul', $Perolehan_hki->judul) }}</textarea> 
                            </div>
                        </div> 
                    <!-- Jenis -->
                        <div class="form-group row mb-3">
                            <label class="col-2 col-form-label">
                            Jenis
                            </label>
                            <div class="col-6">
                                <input 
                                    type="text" 
                                    class="form-control form-control-lg"  
                                    name="Jenis"
                                    value="{{ old('jenis', $Perolehan_hki->jenis) }}"
                                    disabled
                                >
                            </div>
                        </div> 
                    <!-- Tahun -->
                        <div class="form-group row mb-3">
                            <label class="col-2 col-form-label">
                                Tahun
                            </label>
                            <div class="col-2">
                                <input 
                                    type="year" 
                                    class="form-control form-control-lg"  
                                    name="tahun"
                                    value="{{ old('tahun', $Perolehan_hki->tahun) }}"
                                    disabled
                                >
                            </div>
                        </div> 
                    <!-- Nomor -->
                        <div class="form-group row mb-3">
                            <label class="col-2 col-form-label">
                            Nomor
                            </label>
                            <div class="col-4">
                                <input 
                                    type="text" 
                                    class="form-control form-control-lg"  
                                    name="nomor"
                                    value="{{ old('nomor', $Perolehan_hki->nomor) }}"
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
