@extends('template.'.$template.'.form')

@section('title', $panel_name)

@section('content')    
    <form class="col-12" action="{{ route($content.'.destroy', $Penulis_publikasi_artikel->id ) }}" 
        method="POST"  > 
        @csrf   
        @method('DELETE')  

        <div class="card mb-4">
            <x-studio_v30.general-form-card-header 
                view="{{ $view_file }}"  
                panel="{{ $panel_name }}"/> 
            <div class="card-body pb-4">     
                <div>  
                    
                    <!-- Publikasi -->
                    <div class="form-group row mb-3">
                            <label class="col-2 col-form-label">
                                Publikasi Artikel
                            </label>
                            <div class="col-6"> 
                                <textarea 
                                    class="form-control" 
                                    name="jurnal"  
                                    rows="5"
                                    disabled>{{ old('id_publikasi_artikel', $Penulis_publikasi_artikel->publikasi_artikel->judul) }}</textarea>  
                            </div>
                        </div> 
                    <!-- Peneliti -->
                        <div class="form-group row mb-3">
                            <label class="col-2 col-form-label">
                                Peneliti
                            </label>
                            <div class="col-6"> 
                                <input 
                                    type="text" 
                                    class="form-control form-control-lg"  
                                    name="id_penulis"
                                    value="{{ old('id_penulis', $Penulis_publikasi_artikel->peneliti->nama) }}"
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
