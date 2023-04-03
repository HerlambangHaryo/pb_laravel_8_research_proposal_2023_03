@extends('template.'.$template.'.form')

@section('title', $panel_name)

@section('content')    
    <form class="col-12" action="{{ route($content.'.update', $Anggaran_penelitian->id ) }}"  
        method="POST"  > 
        @csrf   
        @method('PUT') 

        <div class="card mb-4">
            <x-studio_v30.general-form-card-header 
                    view="{{ $view_file }}"  
                    panel="{{ $panel_name }}"/>
            <div class="card-body pb-4">    
                <div class="row justify-content-md-center">     
                    <div class="col-11"> 
                         
                        <!-- Kategori -->
                            <div class="form-group row mb-3">
                                <label class="col-2 col-form-label">
                                    Kategori
                                </label>
                                <div class="col-6"> 
                                    <select class="form-select"
                                        name="kategori">
                                        <option value="">
                                            Pilih Kategori
                                        </option>  
                                        <option value="Honor" @if($Anggaran_penelitian->kategori == 'Honor') selected @endif>Honor</option>  
                                        <option value="Peralatan Penunjang" @if($Anggaran_penelitian->kategori == 'Peralatan Penunjang') selected @endif>Peralatan Penunjang</option>  
                                        <option value="Bahan Habis Pakai" @if($Anggaran_penelitian->kategori == 'Bahan Habis Pakai') selected @endif>Bahan Habis Pakai</option>  
                                        <option value="Perjalanan" @if($Anggaran_penelitian->kategori == 'Perjalanan') selected @endif>Perjalanan</option>  
                                        <option value="Lain-lain" @if($Anggaran_penelitian->kategori == 'Lain-lain') selected @endif>Lain-lain</option>  
                                    </select> 
                                </div>
                            </div>  
                        <!-- Kegiatan -->
                            <div class="form-group row mb-3">
                                <label class="col-2 col-form-label">
                                    Kegiatan
                                </label>
                                <div class="col-6">
                                    <textarea 
                                        class="form-control" 
                                        name="kegiatan"  
                                        rows="5">{{ old('kegiatan', $Anggaran_penelitian->kegiatan) }}</textarea>  
                                </div>
                            </div>  
                        <!-- Justifikasi Anggaran -->
                            <div class="form-group row mb-3">
                                <label class="col-2 col-form-label">
                                    Justifikasi Anggaran
                                </label>
                                <div class="col-6">
                                    <input 
                                        type="text" 
                                        class="form-control form-control-lg"  
                                        name="justifikasi_anggaran"
                                        value="{{ old('justifikasi_anggaran', $Anggaran_penelitian->justifikasi_anggaran) }}"
                                    >
                                </div>
                            </div> 

                        <!-- satuan -->
                            <div class="form-group row mb-3">
                                <label class="col-2 col-form-label">
                                    Kuantitas
                                </label>
                                <div class="col-2">
                                    <input 
                                        type="number" 
                                        class="form-control form-control-lg"  
                                        name="kuantitas"
                                        value="{{ old('kuantitas', $Anggaran_penelitian->kuantitas) }}"
                                    > 
                                </div> 
                            </div> 

                        <!-- Harga -->
                            <div class="form-group row mb-3">
                                <label class="col-2 col-form-label">
                                    Harga
                                </label>
                                <div class="col-6">
                                    <input 
                                        type="number" 
                                        class="form-control form-control-lg"  
                                        name="harga"
                                        value="{{ old('harga', $Anggaran_penelitian->harga) }}"
                                    > 
                                </div> 
                            </div> 

                    </div> 
                </div> 
            </div>            
        </div> 
  

        <x-studio_v30.button-submit />
    </form>
@endsection
