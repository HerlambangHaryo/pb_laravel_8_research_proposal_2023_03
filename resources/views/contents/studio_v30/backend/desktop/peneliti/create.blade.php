@extends('templates.'.$template.'.form')

@section('title', $panel_name)

@section('content')
    <form class="col-12" action="{{ route($content.'.store' ) }}"
        method="POST"
        enctype="multipart/form-data">
        @csrf


        <div class="card mb-4">
            <x-studio_v30.general-form-card-header
                    view="{{ $view_file }}"
                    panel="{{ $panel_name }}"/>
            <div class="card-body pb-4">
                <div class="row justify-content-md-center">
                    <div class="col-11">
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
                                    rows="5"></textarea>
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
                                >
                            </div>
                        </div>
                    <!-- Lulusan yg dihasilkan -->
                        <div class="form-group row mb-3">
                            <label class="col-2 col-form-label">
                                Lulusan yg dihasilkan S1
                            </label>
                            <div class="col-6">
                                <input
                                    type="text"
                                    class="form-control form-control-lg"
                                    name="lulusan_s1"
                                >
                            </div>
                        </div>
                    <!-- Lulusan yg dihasilkan -->
                        <div class="form-group row mb-3">
                            <label class="col-2 col-form-label">
                                Lulusan yg dihasilkan S2
                            </label>
                            <div class="col-6">
                                <input
                                    type="text"
                                    class="form-control form-control-lg"
                                    name="lulusan_s2"
                                >
                            </div>
                        </div>
                    <!-- Lulusan yg dihasilkan -->
                        <div class="form-group row mb-3">
                            <label class="col-2 col-form-label">
                                Lulusan yg dihasilkan S3
                            </label>
                            <div class="col-6">
                                <input
                                    type="text"
                                    class="form-control form-control-lg"
                                    name="lulusan_s3"
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
            <div class="card-body pb-4">
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
                                    rows="5"></textarea>
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
                                    rows="5"></textarea>
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
            <div class="card-body pb-4">
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
                                    rows="5"></textarea>
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
                                    rows="5"></textarea>
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
            <div class="card-body pb-4">
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
                                    rows="5"></textarea>
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
                                    rows="5"></textarea>
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
                            Form {{ ucfirst($view_file) }} - Mahasiswa {{$panel_name}}
                        </h4>
                    </div>
                    <div class="col-6 text-right">
                    </div>
                </div>
            </div>
            <div class="card-body pb-4">
                <div>
                    <!-- NPM -->
                        <div class="form-group row mb-3">
                            <label class="col-2 col-form-label">
                                NPM
                            </label>
                            <div class="col-6">
                                <input
                                    type="text"
                                    class="form-control form-control-lg"
                                    name="npm"
                                >
                            </div>
                        </div>
                </div>
            </div>
        </div>

        <x-studio_v30.button-submit />
    </form>
@endsection
