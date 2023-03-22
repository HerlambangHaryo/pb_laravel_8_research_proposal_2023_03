@extends('template.'.$template.'.form')

@section('title', $panel_name)

@section('content')  

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
                            value="{{ old('judul', $Karya_buku->judul) }}"
                            disabled
                        >
                    </div>
                </div> 
            <!-- Penerbit -->
                <div class="form-group row mb-3">
                    <label class="col-2 col-form-label">
                        Penerbit
                    </label>
                    <div class="col-6">
                        <input 
                            type="text" 
                            class="form-control form-control-lg"  
                            name="penerbit"
                            value="{{ old('penerbit', $Karya_buku->penerbit) }}"
                            disabled
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
                            value="{{ old('tahun', $Karya_buku->tahun) }}"
                            disabled
                        >
                    </div>
                </div> 
            <!-- Halaman -->
                <div class="form-group row mb-3">
                    <label class="col-2 col-form-label">
                        Halaman
                    </label>
                    <div class="col-6">
                        <input 
                            type="number" 
                            class="form-control form-control-lg"  
                            name="halaman"
                            value="{{ old('halaman', $Karya_buku->halaman) }}"
                            disabled
                        >
                    </div>
                </div> 
        </div> 
    </div>            
</div> 
@endsection
