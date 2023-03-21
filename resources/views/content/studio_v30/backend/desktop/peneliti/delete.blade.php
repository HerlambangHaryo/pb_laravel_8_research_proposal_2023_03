@extends('template.'.$template.'.form')

@section('title', $panel_name)

@section('content')    
    <form class="col-12" action="{{ route($content.'.destroy', $Peneliti->id ) }}" 
        method="POST"  > 
        @csrf   
        @method('DELETE') 

        <div class="card mb-4">
            <div class="card-header">
                <div class="row mt-1 mb-2">
                    <div class="col-6">
                        <h4>    
                            Form {{ ucfirst($view_file) }} - Biodata {{$panel_name}} 
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
                                    value="{{ old('nama', $Peneliti->nama) }}"
                                    disabled
                                >
                            </div>
                        </div> 
                    <!-- Jenis Kelamin -->
                        <div class="form-group row mb-3">
                            <label class="col-2 col-form-label">
                                Jenis Kelamin
                            </label>
                            <div class="col-6">
                                <input 
                                    type="text" 
                                    class="form-control form-control-lg"  
                                    name="jenis_kelamin"
                                    value="{{ old('jenis_kelamin', $Peneliti->jenis_kelamin) }}"
                                    disabled
                                >
                            </div>
                        </div> 
                    <!-- Jabatan fungsional -->
                        <div class="form-group row mb-3">
                            <label class="col-2 col-form-label">
                                Jabatan fungsional
                            </label>
                            <div class="col-6">
                                <input 
                                    type="text" 
                                    class="form-control form-control-lg"  
                                    name="jabatan_fungsional"
                                    value="{{ old('jabatan_fungsional', $Peneliti->jabatan_fungsional) }}"
                                    disabled
                                >
                            </div>
                        </div> 
                    <!-- NIP/NIK/Lainnya -->
                        <div class="form-group row mb-3">
                            <label class="col-2 col-form-label">
                                NIP/NIK/Lainnya
                            </label>
                            <div class="col-6">
                                <input 
                                    type="text" 
                                    class="form-control form-control-lg"  
                                    name="nip_nik_lainnya"
                                    value="{{ old('nip_nik_lainnya', $Peneliti->nip_nik_lainnya) }}"
                                    disabled
                                >
                            </div>
                        </div> 
                    <!-- nidn -->
                        <div class="form-group row mb-3">
                            <label class="col-2 col-form-label">
                                NIDN
                            </label>
                            <div class="col-6">
                                <input 
                                    type="text" 
                                    class="form-control form-control-lg"  
                                    name="nidn"
                                    value="{{ old('nidn', $Peneliti->nidn) }}"
                                    disabled
                                >
                            </div>
                        </div> 
                    <!-- id_sinta_google_scholar -->
                        <div class="form-group row mb-3">
                            <label class="col-2 col-form-label">
                                ID Sinta / google scholar
                            </label>
                            <div class="col-6">
                                <input 
                                    type="text" 
                                    class="form-control form-control-lg"  
                                    name="id_sinta_google_scholar"
                                    value="{{ old('id_sinta_google_scholar', $Peneliti->id_sinta_google_scholar) }}"
                                    disabled
                                >
                            </div>
                        </div> 
                    <!-- url -->
                        <div class="form-group row mb-3">
                            <label class="col-2 col-form-label">
                                URL
                            </label>
                            <div class="col-6">
                                <textarea 
                                    class="form-control" 
                                    name="url"  
                                    rows="5" disabled>{{ old('url', $Peneliti->url) }}</textarea> 
                            </div>
                        </div> 
                    <!-- id_scopus -->
                        <div class="form-group row mb-3">
                            <label class="col-2 col-form-label">
                                ID Scopus
                            </label>
                            <div class="col-6">
                                <input 
                                    type="text" 
                                    class="form-control form-control-lg"  
                                    name="id_scopus"
                                    value="{{ old('id_scopus', $Peneliti->id_scopus) }}"
                                    disabled
                                >
                            </div>
                        </div> 
                    <!-- id_orchid -->
                        <div class="form-group row mb-3">
                            <label class="col-2 col-form-label">
                                ID Orchid
                            </label>
                            <div class="col-6">
                                <input 
                                    type="text" 
                                    class="form-control form-control-lg"  
                                    name="id_orchid"
                                    value="{{ old('id_orchid', $Peneliti->id_orchid) }}"
                                    disabled
                                >
                            </div>
                        </div> 
                    <!-- tempat_lahir -->
                        <div class="form-group row mb-3">
                            <label class="col-2 col-form-label">
                                Tempat Lahir
                            </label>
                            <div class="col-6">
                                <input 
                                    type="text" 
                                    class="form-control form-control-lg"  
                                    name="tempat_lahir"
                                    value="{{ old('tempat_lahir', $Peneliti->tempat_lahir) }}"
                                    disabled
                                >
                            </div>
                        </div> 
                    <!-- tanggal_lahir -->
                        <div class="form-group row mb-3">
                            <label class="col-2 col-form-label">
                                Tanggal Lahir
                            </label>
                            <div class="col-3">
                                <input 
                                    type="date" 
                                    class="form-control form-control-lg"  
                                    name="tanggal_lahir"
                                    value="{{ old('tanggal_lahir', $Peneliti->tanggal_lahir) }}"
                                    disabled
                                >
                            </div>
                        </div> 
                    <!-- email -->
                        <div class="form-group row mb-3">
                            <label class="col-2 col-form-label">
                                E-mail
                            </label>
                            <div class="col-6">
                                <input 
                                    type="text" 
                                    class="form-control form-control-lg"  
                                    name="email"
                                    value="{{ old('email', $Peneliti->email) }}"
                                    disabled
                                >
                            </div>
                        </div> 
                    <!-- telepon -->
                        <div class="form-group row mb-3">
                            <label class="col-2 col-form-label">
                                Telepon
                            </label>
                            <div class="col-6">
                                <input 
                                    type="text" 
                                    class="form-control form-control-lg"  
                                    name="telepon"
                                    value="{{ old('telepon', $Peneliti->telepon) }}"
                                    disabled
                                >
                            </div>
                        </div>  
                    <!-- Alamat Kantor -->
                        <div class="form-group row mb-3">
                            <label class="col-2 col-form-label">
                                Alamat Kantor
                            </label>
                            <div class="col-6">
                                <textarea 
                                    class="form-control" 
                                    name="alamat_kantor"  
                                    rows="5" disabled>{{ old('alamat_kantor', $Peneliti->alamat_kantor) }}</textarea>  
                            </div>
                        </div>  
                    <!-- Telepon Kantor -->
                        <div class="form-group row mb-3">
                            <label class="col-2 col-form-label">
                                Telepon Kantor
                            </label>
                            <div class="col-6">
                                <input 
                                    type="text" 
                                    class="form-control form-control-lg"  
                                    name="telepon_kantor"
                                    value="{{ old('telepon_kantor', $Peneliti->telepon_kantor) }}"
                                    disabled
                                >
                            </div>
                        </div>  
                </div> 
            </div>            
        </div> 

        <div class="card mb-4">
            <div class="card-header">
                <div class="row mt-1 mb-2">
                    <div class="col-6">
                        <h4>    
                            Form {{ ucfirst($view_file) }} - Latar belakang pendidikan S1 {{$panel_name}} 
                        </h4>
                    </div>
                    <div class="col-6 text-right"> 
                    </div> 
                </div>
            </div>
            <div class="card-body">     
                <div> 
                    <!-- Perguruan Tinggi S1 -->
                        <div class="form-group row mb-3">
                            <label class="col-2 col-form-label">
                                Perguruan Tinggi S1
                            </label>
                            <div class="col-6">
                                <textarea 
                                    class="form-control" 
                                    name="s1_perguruan_tinggi"  
                                    rows="5" disabled>{{ old('s1_perguruan_tinggi', $Peneliti->s1_perguruan_tinggi) }}</textarea>   
                            </div>
                        </div>  
                    <!-- Bidang Ilmu S1 -->
                        <div class="form-group row mb-3">
                            <label class="col-2 col-form-label">
                                Bidang Ilmu S1
                            </label>
                            <div class="col-6">
                                <input 
                                    type="text" 
                                    class="form-control form-control-lg"  
                                    name="s1_bidang_ilmu"
                                    value="{{ old('s1_bidang_ilmu', $Peneliti->s1_bidang_ilmu) }}"
                                    disabled
                                >
                            </div>
                        </div>  
                    <!-- Tahun Masuk S1 -->
                        <div class="form-group row mb-3">
                            <label class="col-2 col-form-label">
                                Tahun Masuk S1
                            </label>
                            <div class="col-6">
                                <input 
                                    type="text" 
                                    class="form-control form-control-lg"  
                                    name="s1_tahun_masuk"
                                    value="{{ old('s1_tahun_masuk', $Peneliti->s1_tahun_masuk) }}"
                                    disabled
                                >
                            </div>
                        </div> 
                    <!-- Tahun Lulus S1 -->
                        <div class="form-group row mb-3">
                            <label class="col-2 col-form-label">
                                Tahun Lulus S1
                            </label>
                            <div class="col-6">
                                <input 
                                    type="text" 
                                    class="form-control form-control-lg"  
                                    name="s1_tahun_lulus"
                                    value="{{ old('s1_tahun_lulus', $Peneliti->s1_tahun_lulus) }}"
                                    disabled
                                >
                            </div>
                        </div> 
                    <!-- Judul S1 -->
                        <div class="form-group row mb-3">
                            <label class="col-2 col-form-label">
                                Judul S1
                            </label>
                            <div class="col-6">
                                <textarea 
                                    class="form-control" 
                                    name="s1_judul"  
                                    rows="5" disabled>{{ old('s1_judul', $Peneliti->s1_judul) }}</textarea>   
                            </div>
                        </div> 
                    <!-- Pembimbing S1 -->
                        <div class="form-group row mb-3">
                            <label class="col-2 col-form-label">
                                Pembimbing S1
                            </label>
                            <div class="col-6">
                                <input 
                                    type="text" 
                                    class="form-control form-control-lg"  
                                    name="s1_pembimbing"
                                    value="{{ old('s1_pembimbing', $Peneliti->s1_pembimbing) }}"
                                    disabled
                                >
                            </div>
                        </div> 
                </div> 
            </div>            
        </div> 

        <div class="card mb-4">
            <div class="card-header">
                <div class="row mt-1 mb-2">
                    <div class="col-6">
                        <h4>    
                            Form {{ ucfirst($view_file) }} - Latar belakang pendidikan S2 {{$panel_name}} 
                        </h4>
                    </div>
                    <div class="col-6 text-right"> 
                    </div> 
                </div>
            </div>
            <div class="card-body">     
                <div> 
                    <!-- Perguruan Tinggi s2 -->
                        <div class="form-group row mb-3">
                            <label class="col-2 col-form-label">
                                Perguruan Tinggi S2
                            </label>
                            <div class="col-6">
                                <textarea 
                                    class="form-control" 
                                    name="s2_perguruan_tinggi"  
                                    rows="5" disabled>{{ old('s2_perguruan_tinggi', $Peneliti->s2_perguruan_tinggi) }}</textarea>   
                            </div>
                        </div>  
                    <!-- Bidang Ilmu s2 -->
                        <div class="form-group row mb-3">
                            <label class="col-2 col-form-label">
                                Bidang Ilmu S2
                            </label>
                            <div class="col-6">
                                <input 
                                    type="text" 
                                    class="form-control form-control-lg"  
                                    name="s2_bidang_ilmu"
                                    value="{{ old('s2_bidang_ilmu', $Peneliti->s2_bidang_ilmu) }}"
                                    disabled
                                >
                            </div>
                        </div>  
                    <!-- Tahun Masuk s2 -->
                        <div class="form-group row mb-3">
                            <label class="col-2 col-form-label">
                                Tahun Masuk S2
                            </label>
                            <div class="col-6">
                                <input 
                                    type="text" 
                                    class="form-control form-control-lg"  
                                    name="s2_tahun_masuk"
                                    value="{{ old('s2_tahun_masuk', $Peneliti->s2_tahun_masuk) }}"
                                    disabled
                                >
                            </div>
                        </div> 
                    <!-- Tahun Lulus s2 -->
                        <div class="form-group row mb-3">
                            <label class="col-2 col-form-label">
                                Tahun Lulus S2
                            </label>
                            <div class="col-6">
                                <input 
                                    type="text" 
                                    class="form-control form-control-lg"  
                                    name="s2_tahun_lulus"
                                    value="{{ old('s2_tahun_lulus', $Peneliti->s2_tahun_lulus) }}"
                                    disabled
                                >
                            </div>
                        </div> 
                    <!-- Judul s2 -->
                        <div class="form-group row mb-3">
                            <label class="col-2 col-form-label">
                                Judul S2
                            </label>
                            <div class="col-6">
                                <textarea 
                                    class="form-control" 
                                    name="s2_judul"  
                                    rows="5" disabled>{{ old('s2_judul', $Peneliti->s2_judul) }}</textarea>   
                            </div>
                        </div> 
                    <!-- Pembimbing s2 -->
                        <div class="form-group row mb-3">
                            <label class="col-2 col-form-label">
                                Pembimbing S2
                            </label>
                            <div class="col-6">
                                <input 
                                    type="text" 
                                    class="form-control form-control-lg"  
                                    name="s2_pembimbing"
                                    value="{{ old('s2_pembimbing', $Peneliti->s2_pembimbing) }}"
                                    disabled
                                >
                            </div>
                        </div> 
                </div> 
            </div>            
        </div> 

        

        <div class="card mb-4">
            <div class="card-header">
                <div class="row mt-1 mb-2">
                    <div class="col-6">
                        <h4>    
                            Form {{ ucfirst($view_file) }} - Latar belakang pendidikan S3 {{$panel_name}} 
                        </h4>
                    </div>
                    <div class="col-6 text-right"> 
                    </div> 
                </div>
            </div>
            <div class="card-body">     
                <div> 
                    <!-- Perguruan Tinggi s3 -->
                        <div class="form-group row mb-3">
                            <label class="col-2 col-form-label">
                                Perguruan Tinggi S3
                            </label>
                            <div class="col-6">
                                <textarea 
                                    class="form-control" 
                                    name="s3_perguruan_tinggi"  
                                    rows="5" disabled>{{ old('s3_perguruan_tinggi', $Peneliti->s3_perguruan_tinggi) }}</textarea>  
                            </div>
                        </div>  
                    <!-- Bidang Ilmu s3 -->
                        <div class="form-group row mb-3">
                            <label class="col-2 col-form-label">
                                Bidang Ilmu S3
                            </label>
                            <div class="col-6">
                                <input 
                                    type="text" 
                                    class="form-control form-control-lg"  
                                    name="s3_bidang_ilmu"
                                    value="{{ old('s3_bidang_ilmu', $Peneliti->s3_bidang_ilmu) }}"
                                    disabled
                                >
                            </div>
                        </div>  
                    <!-- Tahun Masuk s3 -->
                        <div class="form-group row mb-3">
                            <label class="col-2 col-form-label">
                                Tahun Masuk S3
                            </label>
                            <div class="col-6">
                                <input 
                                    type="text" 
                                    class="form-control form-control-lg"  
                                    name="s3_tahun_masuk"
                                    value="{{ old('s3_tahun_masuk', $Peneliti->s3_tahun_masuk) }}"
                                    disabled
                                >
                            </div>
                        </div> 
                    <!-- Tahun Lulus s3 -->
                        <div class="form-group row mb-3">
                            <label class="col-2 col-form-label">
                                Tahun Lulus S3
                            </label>
                            <div class="col-6">
                                <input 
                                    type="text" 
                                    class="form-control form-control-lg"  
                                    name="s3_tahun_lulus"
                                    value="{{ old('s3_tahun_lulus', $Peneliti->s3_tahun_lulus) }}"
                                    disabled
                                >
                            </div>
                        </div> 
                    <!-- Judul s3 -->
                        <div class="form-group row mb-3">
                            <label class="col-2 col-form-label">
                                Judul S3
                            </label>
                            <div class="col-6">
                                <textarea 
                                    class="form-control" 
                                    name="s3_judul"  
                                    rows="5" disabled>{{ old('s3_judul', $Peneliti->s3_judul) }}</textarea>   
                            </div>
                        </div> 
                    <!-- Pembimbing s3 -->
                        <div class="form-group row mb-3">
                            <label class="col-2 col-form-label">
                                Pembimbing S3
                            </label>
                            <div class="col-6">
                                <input 
                                    type="text" 
                                    class="form-control form-control-lg"  
                                    name="s3_pembimbing"
                                    value="{{ old('s3_pembimbing', $Peneliti->s3_pembimbing) }}"
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
