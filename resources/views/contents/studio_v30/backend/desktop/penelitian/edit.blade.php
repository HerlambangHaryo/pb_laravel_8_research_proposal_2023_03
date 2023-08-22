@extends('templates.'.$template.'.form')

@section('title', $panel_name)

@section('content')
    <form class="col-12" action="{{ route($content.'.update', $Penelitian->id ) }}"
        enctype="multipart/form-data"
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

                        <!-- Judul -->
                            <div class="form-group row mb-3">
                                <label class="col-2 col-form-label">
                                    Judul
                                </label>
                                <div class="col-6">
                                    <textarea
                                        class="form-control"
                                        name="judul"
                                        rows="5">{{ old('judul', $Penelitian->judul) }}</textarea>
                                </div>
                            </div>
                    <!-- Skema -->
                        <div class="form-group row mb-3">
                            <label class="col-2 col-form-label">
                                Skema
                            </label>
                            <div class="col-6">
                                <input
                                    type="text"
                                    class="form-control form-control-lg"
                                    name="skema"
                                    value="{{ old('skema', $Penelitian->skema) }}"
                                >
                            </div>
                        </div>
                        <!-- Tanggal -->
                            <div class="form-group row mb-3">
                                <label class="col-2 col-form-label">
                                    Tanggal
                                </label>
                                <div class="col-2">
                                    <input
                                        type="date"
                                        class="form-control form-control-lg"
                                        name="tanggal"
                                        value="{{ old('tanggal', $Penelitian->tanggal) }}"
                                    >
                                </div>
                            </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="card mb-4">
            <x-studio_v30.general-form-card-header
                    view="{{ $view_file }}"
                    panel="Anggota {{ $panel_name }}"/>
            <div class="card-body pb-4">
                <div class="row justify-content-md-center">
                    <div class="col-11">

                        <!-- Ketua -->
                            <div class="form-group row mb-3">
                                <label class="col-2 col-form-label">
                                    Ketua
                                </label>
                                <div class="col-6">
                                    <select class="form-select"
                                        name="id_ketua">
                                        <option value="">
                                            Pilih Peneliti
                                        </option>
                                        @foreach($peneliti as $row)
                                            <option value="{{ $row->id }}"

                                                @if($Penelitian->id_ketua == $row->id)
                                                    selected
                                                @endif
                                            >
                                                {{ $row->nama }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>


                        <!-- Uraian Tugas -->
                            <div class="form-group row mb-3">
                                <label class="col-2 col-form-label">
                                    Uraian Tugas<br/>Ketua
                                </label>
                                <div class="col-6">
                                    <textarea
                                        class="form-control"
                                        name="uraian_tugas_ketua"
                                        rows="5">{{ old('uraian_tugas_ketua', $Penelitian->uraian_tugas_ketua) }}</textarea>
                                </div>
                            </div>

                        <!-- Anggota 1 -->
                            <div class="form-group row mb-3">
                                <label class="col-2 col-form-label">
                                    Anggota 1
                                </label>
                                <div class="col-6">
                                    <select class="form-select"
                                        name="id_anggota_1">
                                        <option value="">
                                            Pilih Peneliti
                                        </option>
                                        @foreach($peneliti as $row)
                                            <option value="{{ $row->id }}"

                                                @if($Penelitian->id_anggota_1 == $row->id)
                                                    selected
                                                @endif
                                            >
                                                {{ $row->nama }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        <!-- Uraian Tugas -->
                            <div class="form-group row mb-3">
                                <label class="col-2 col-form-label">
                                    Uraian Tugas<br/>Anggota 1
                                </label>
                                <div class="col-6">
                                    <textarea
                                        class="form-control"
                                        name="uraian_tugas_anggota_1"
                                        rows="5">{{ old('uraian_tugas_anggota_1', $Penelitian->uraian_tugas_anggota_1) }}</textarea>
                                </div>
                            </div>

                        <!-- Anggota 2 -->
                            <div class="form-group row mb-3">
                                <label class="col-2 col-form-label">
                                    Anggota 2
                                </label>
                                <div class="col-6">
                                    <select class="form-select"
                                        name="id_anggota_2">
                                        <option value="">
                                            Pilih Peneliti
                                        </option>
                                        @foreach($peneliti as $row)
                                            <option value="{{ $row->id }}"

                                                @if($Penelitian->id_anggota_2 == $row->id)
                                                    selected
                                                @endif
                                            >
                                                {{ $row->nama }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        <!-- Uraian Tugas -->
                            <div class="form-group row mb-3">
                                <label class="col-2 col-form-label">
                                    Uraian Tugas<br/>Anggota 2
                                </label>
                                <div class="col-6">
                                    <textarea
                                        class="form-control"
                                        name="uraian_tugas_anggota_2"
                                        rows="5">{{ old('uraian_tugas_anggota_2', $Penelitian->uraian_tugas_anggota_2) }}</textarea>
                                </div>
                            </div>
                        <!-- Mahasiswa 1 -->
                            <div class="form-group row mb-3">
                                <label class="col-2 col-form-label">
                                    Mahasiswa 1
                                </label>
                                <div class="col-6">
                                    <select class="form-select"
                                        name="id_mahasiswa_1">
                                        <option value="">
                                            Pilih Peneliti
                                        </option>
                                        @foreach($peneliti as $row)
                                            <option value="{{ $row->id }}"

                                                @if($Penelitian->id_mahasiswa_1 == $row->id)
                                                    selected
                                                @endif
                                            >
                                                {{ $row->nama }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        <!-- Uraian Tugas -->
                            <div class="form-group row mb-3">
                                <label class="col-2 col-form-label">
                                    Uraian Tugas<br/>Mahasiswa 1
                                </label>
                                <div class="col-6">
                                    <textarea
                                        class="form-control"
                                        name="uraian_tugas_mahasiswa_1"
                                        rows="5">{{ old('uraian_tugas_mahasiswa_1', $Penelitian->uraian_tugas_mahasiswa_1) }}</textarea>
                                </div>
                            </div>

                        <!-- Mahasiswa 2 -->
                            <div class="form-group row mb-3">
                                <label class="col-2 col-form-label">
                                    Mahasiswa 2
                                </label>
                                <div class="col-6">
                                    <select class="form-select"
                                        name="id_mahasiswa_2">
                                        <option value="">
                                            Pilih Peneliti
                                        </option>
                                        @foreach($peneliti as $row)
                                            <option value="{{ $row->id }}"

                                                @if($Penelitian->id_mahasiswa_2 == $row->id)
                                                    selected
                                                @endif
                                            >
                                                {{ $row->nama }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        <!-- Uraian Tugas -->
                            <div class="form-group row mb-3">
                                <label class="col-2 col-form-label">
                                    Uraian Tugas<br/>Mahasiswa 2
                                </label>
                                <div class="col-6">
                                    <textarea
                                        class="form-control"
                                        name="uraian_tugas_mahasiswa_2"
                                        rows="5">{{ old('uraian_tugas_mahasiswa_2', $Penelitian->uraian_tugas_mahasiswa_2) }}</textarea>
                                </div>
                            </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="card mb-4">
            <x-studio_v30.general-form-card-header
                    view="{{ $view_file }}"
                    panel="{{ $panel_name }}"/>
            <div class="card-body pb-4">
                <div class="row justify-content-md-center">
                    <div class="col-11">

                        <!-- Ketua  -->
                            <div class="form-group row mb-3">
                                <label class="col-2 col-form-label">
                                    Ketua Pusat Studi
                                </label>
                                <div class="col-6">
                                    <select class="form-select"
                                        name="id_ketua_pusat_studi">
                                        <option value="">
                                            Pilih Peneliti
                                        </option>
                                        @foreach($peneliti as $row)
                                            <option value="{{ $row->id }}"

                                                @if($Penelitian->id_ketua_pusat_studi == $row->id)
                                                    selected
                                                @endif
                                            >
                                                {{ $row->nama }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        <!-- Dekan -->
                            <div class="form-group row mb-3">
                                <label class="col-2 col-form-label">
                                    Dekan
                                </label>
                                <div class="col-6">
                                    <select class="form-select"
                                        name="id_dekan">
                                        <option value="">
                                            Pilih Peneliti
                                        </option>
                                        @foreach($peneliti as $row)
                                            <option value="{{ $row->id }}"

                                                @if($Penelitian->id_dekan == $row->id)
                                                    selected
                                                @endif
                                            >
                                                {{ $row->nama }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="card mb-4">
            <x-studio_v30.general-form-card-header
                    view="{{ $view_file }}"
                    panel="Lembar Pengesahan {{ $panel_name }}"/>
            <div class="card-body pb-4">
                <div class="row justify-content-md-center">
                    <div class="col-11">
                        <!-- Lembar Pengesahan -->
                            <div class="form-group row mb-3">
                                <label class="col-2 col-form-label">
                                    Lembar Pengesahan
                                </label>
                                <div class="col-6">
                                    <input
                                        type="file"
                                        class="form-control form-control-lg"
                                        name="lembar_pengesahan"
                                    >
                                </div>
                            </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="card mb-4">
            <x-studio_v30.general-form-card-header
                    view="{{ $view_file }}"
                    panel="Kata Kunci {{ $panel_name }}"/>
            <div class="card-body pb-4">
                <div class="row justify-content-md-center">
                    <div class="col-11">
                        <!-- kata_kunci_1 -->
                            <div class="form-group row mb-3">
                                <label class="col-2 col-form-label">
                                    Kata Kunci 1
                                </label>
                                <div class="col-6">
                                    <input
                                        type="text"
                                        class="form-control form-control-lg"
                                        name="kata_kunci_1"
                                        value="{{ old('kata_kunci_1', $Penelitian->kata_kunci_1) }}"
                                    >
                                </div>
                            </div>
                        <!-- kata_kunci_2 -->
                            <div class="form-group row mb-3">
                                <label class="col-2 col-form-label">
                                    Kata Kunci 2
                                </label>
                                <div class="col-6">
                                    <input
                                        type="text"
                                        class="form-control form-control-lg"
                                        name="kata_kunci_2"
                                        value="{{ old('kata_kunci_2', $Penelitian->kata_kunci_2) }}"
                                    >
                                </div>
                            </div>
                        <!-- kata_kunci_3 -->
                            <div class="form-group row mb-3">
                                <label class="col-2 col-form-label">
                                    Kata Kunci 3
                                </label>
                                <div class="col-6">
                                    <input
                                        type="text"
                                        class="form-control form-control-lg"
                                        name="kata_kunci_3"
                                        value="{{ old('kata_kunci_3', $Penelitian->kata_kunci_3) }}"
                                    >
                                </div>
                            </div>
                        <!-- kata_kunci_4 -->
                            <div class="form-group row mb-3">
                                <label class="col-2 col-form-label">
                                    Kata Kunci 4
                                </label>
                                <div class="col-6">
                                    <input
                                        type="text"
                                        class="form-control form-control-lg"
                                        name="kata_kunci_4"
                                        value="{{ old('kata_kunci_4', $Penelitian->kata_kunci_4) }}"
                                    >
                                </div>
                            </div>
                        <!-- kata_kunci_5 -->
                            <div class="form-group row mb-3">
                                <label class="col-2 col-form-label">
                                    Kata Kunci 5
                                </label>
                                <div class="col-6">
                                    <input
                                        type="text"
                                        class="form-control form-control-lg"
                                        name="kata_kunci_5"
                                        value="{{ old('kata_kunci_5', $Penelitian->kata_kunci_5) }}"
                                    >
                                </div>
                            </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="card mb-4">
            <x-studio_v30.general-form-card-header
                    view="{{ $view_file }}"
                    panel="Paragraf {{ $panel_name }}"/>
            <div class="card-body pb-4">
                <div class="row justify-content-md-center">
                    <div class="col-11">
                        <!-- Jadwal Penelitian -->
                            <div class="form-group row mb-3">
                                <label class="col-2 col-form-label">
                                    Jadwal Penelitian
                                </label>
                                <div class="col-8">
                                    <textarea
                                        class="form-control"
                                        name="paragraf_jadwal_penelitian"
                                        rows="10">{{ old('paragraf_jadwal_penelitian', $Penelitian->paragraf_jadwal_penelitian) }}</textarea>
                                </div>
                            </div>
                        <!-- Uraian Tugas -->
                            <div class="form-group row mb-3">
                                <label class="col-2 col-form-label">
                                    Uraian Tugas
                                </label>
                                <div class="col-8">
                                    <textarea
                                        class="form-control"
                                        name="paragraf_uraian_tugas"
                                        rows="10">{{ old('paragraf_uraian_tugas', $Penelitian->paragraf_uraian_tugas) }}</textarea>
                                </div>
                            </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="card mb-4">
            <x-studio_v30.general-form-card-header
                    view="{{ $view_file }}"
                    panel="Paragraf {{ $panel_name }}"/>
            <div class="card-body pb-4">
                <div class="row justify-content-md-center">
                    <div class="col-11">
                        <!-- Nomor Halaman -->
                            <div class="form-group row mb-3">
                                <label class="col-2 col-form-label">
                                    halaman_pengesahan
                                </label>
                                <div class="col-2">
                                    <input
                                        type="text"
                                        class="form-control form-control-lg"
                                        name="nomor_halaman_halaman_pengesahan"
                                        value="{{ old('nomor_halaman_halaman_pengesahan', $Penelitian->nomor_halaman_halaman_pengesahan) }}"
                                    >
                                </div>
                            </div>
                        <!-- Nomor Halaman -->
                            <div class="form-group row mb-3">
                                <label class="col-2 col-form-label">
                                    daftar_isi
                                </label>
                                <div class="col-2">
                                    <input
                                        type="text"
                                        class="form-control form-control-lg"
                                        name="nomor_halaman_daftar_isi"
                                        value="{{ old('nomor_halaman_daftar_isi', $Penelitian->nomor_halaman_daftar_isi) }}"
                                    >
                                </div>
                            </div>
                        <!-- Nomor Halaman -->
                            <div class="form-group row mb-3">
                                <label class="col-2 col-form-label">
                                    ringkasan
                                </label>
                                <div class="col-2">
                                    <input
                                        type="text"
                                        class="form-control form-control-lg"
                                        name="nomor_halaman_ringkasan"
                                        value="{{ old('nomor_halaman_ringkasan', $Penelitian->nomor_halaman_ringkasan) }}"
                                    >
                                </div>
                            </div>
                        <!-- Nomor Halaman -->
                            <div class="form-group row mb-3">
                                <label class="col-2 col-form-label">
                                    latar_belakang
                                </label>
                                <div class="col-2">
                                    <input
                                        type="text"
                                        class="form-control form-control-lg"
                                        name="nomor_halaman_latar_belakang"
                                        value="{{ old('nomor_halaman_latar_belakang', $Penelitian->nomor_halaman_latar_belakang) }}"
                                    >
                                </div>
                            </div>
                        <!-- Nomor Halaman -->
                            <div class="form-group row mb-3">
                                <label class="col-2 col-form-label">
                                    latar_belakang_masalah
                                </label>
                                <div class="col-2">
                                    <input
                                        type="text"
                                        class="form-control form-control-lg"
                                        name="nomor_halaman_latar_belakang_masalah"
                                        value="{{ old('nomor_halaman_latar_belakang_masalah', $Penelitian->nomor_halaman_latar_belakang_masalah) }}"
                                    >
                                </div>
                            </div>
                        <!-- Nomor Halaman -->
                            <div class="form-group row mb-3">
                                <label class="col-2 col-form-label">
                                    rumusan_masalah
                                </label>
                                <div class="col-2">
                                    <input
                                        type="text"
                                        class="form-control form-control-lg"
                                        name="nomor_halaman_rumusan_masalah"
                                        value="{{ old('nomor_halaman_rumusan_masalah', $Penelitian->nomor_halaman_rumusan_masalah) }}"
                                    >
                                </div>
                            </div>
                        <!-- Nomor Halaman -->
                            <div class="form-group row mb-3">
                                <label class="col-2 col-form-label">
                                    tujuan_penelitian
                                </label>
                                <div class="col-2">
                                    <input
                                        type="text"
                                        class="form-control form-control-lg"
                                        name="nomor_halaman_tujuan_penelitian"
                                        value="{{ old('nomor_halaman_tujuan_penelitian', $Penelitian->nomor_halaman_tujuan_penelitian) }}"
                                    >
                                </div>
                            </div>
                        <!-- Nomor Halaman -->
                            <div class="form-group row mb-3">
                                <label class="col-2 col-form-label">
                                    target_luaran
                                </label>
                                <div class="col-2">
                                    <input
                                        type="text"
                                        class="form-control form-control-lg"
                                        name="nomor_halaman_target_luaran"
                                        value="{{ old('nomor_halaman_target_luaran', $Penelitian->nomor_halaman_target_luaran) }}"
                                    >
                                </div>
                            </div>
                        <!-- Nomor Halaman -->
                            <div class="form-group row mb-3">
                                <label class="col-2 col-form-label">
                                    tinjauan_pustaka
                                </label>
                                <div class="col-2">
                                    <input
                                        type="text"
                                        class="form-control form-control-lg"
                                        name="nomor_halaman_tinjauan_pustaka"
                                        value="{{ old('nomor_halaman_tinjauan_pustaka', $Penelitian->nomor_halaman_tinjauan_pustaka) }}"
                                    >
                                </div>
                            </div>
                        <!-- Nomor Halaman -->
                            <div class="form-group row mb-3">
                                <label class="col-2 col-form-label">
                                    penelitian_terdahulu
                                </label>
                                <div class="col-2">
                                    <input
                                        type="text"
                                        class="form-control form-control-lg"
                                        name="nomor_halaman_penelitian_terdahulu"
                                        value="{{ old('nomor_halaman_penelitian_terdahulu', $Penelitian->nomor_halaman_penelitian_terdahulu) }}"
                                    >
                                </div>
                            </div>
                        <!-- Nomor Halaman -->
                            <div class="form-group row mb-3">
                                <label class="col-2 col-form-label">
                                    roadmap_penelitian
                                </label>
                                <div class="col-2">
                                    <input
                                        type="text"
                                        class="form-control form-control-lg"
                                        name="nomor_halaman_roadmap_penelitian"
                                        value="{{ old('nomor_halaman_roadmap_penelitian', $Penelitian->nomor_halaman_roadmap_penelitian) }}"
                                    >
                                </div>
                            </div>
                        <!-- Nomor Halaman -->
                            <div class="form-group row mb-3">
                                <label class="col-2 col-form-label">
                                    Dasar Teori
                                </label>
                                <div class="col-2">
                                    <input
                                        type="text"
                                        class="form-control form-control-lg"
                                        name="nomor_halaman_dasar_teori"
                                        value="{{ old('nomor_halaman_dasar_teori', $Penelitian->nomor_halaman_dasar_teori) }}"
                                    >
                                </div>
                            </div>
                        <!-- Nomor Halaman -->
                            <div class="form-group row mb-3">
                                <label class="col-2 col-form-label">
                                    metode_penelitian
                                </label>
                                <div class="col-2">
                                    <input
                                        type="text"
                                        class="form-control form-control-lg"
                                        name="nomor_halaman_metode_penelitian"
                                        value="{{ old('nomor_halaman_metode_penelitian', $Penelitian->nomor_halaman_metode_penelitian) }}"
                                    >
                                </div>
                            </div>
                        <!-- Nomor Halaman -->
                            <div class="form-group row mb-3">
                                <label class="col-2 col-form-label">
                                    pembagian_tugas_tim_pengusul
                                </label>
                                <div class="col-2">
                                    <input
                                        type="text"
                                        class="form-control form-control-lg"
                                        name="nomor_halaman_pembagian_tugas_tim_pengusul"
                                        value="{{ old('nomor_halaman_pembagian_tugas_tim_pengusul', $Penelitian->nomor_halaman_pembagian_tugas_tim_pengusul) }}"
                                    >
                                </div>
                            </div>
                        <!-- Nomor Halaman -->
                            <div class="form-group row mb-3">
                                <label class="col-2 col-form-label">
                                    jadwal_penelitian
                                </label>
                                <div class="col-2">
                                    <input
                                        type="text"
                                        class="form-control form-control-lg"
                                        name="nomor_halaman_jadwal_penelitian"
                                        value="{{ old('nomor_halaman_jadwal_penelitian', $Penelitian->nomor_halaman_jadwal_penelitian) }}"
                                    >
                                </div>
                            </div>
                        <!-- Nomor Halaman -->
                            <div class="form-group row mb-3">
                                <label class="col-2 col-form-label">
                                    daftar_pustaka
                                </label>
                                <div class="col-2">
                                    <input
                                        type="text"
                                        class="form-control form-control-lg"
                                        name="nomor_halaman_daftar_pustaka"
                                        value="{{ old('nomor_halaman_daftar_pustaka', $Penelitian->nomor_halaman_daftar_pustaka) }}"
                                    >
                                </div>
                            </div>
                        <!-- Nomor Halaman -->
                            <div class="form-group row mb-3">
                                <label class="col-2 col-form-label">
                                    lampiran_1
                                </label>
                                <div class="col-2">
                                    <input
                                        type="text"
                                        class="form-control form-control-lg"
                                        name="nomor_halaman_lampiran_1"
                                        value="{{ old('nomor_halaman_lampiran_1', $Penelitian->nomor_halaman_lampiran_1) }}"
                                    >
                                </div>
                            </div>
                        <!-- Nomor Halaman -->
                            <div class="form-group row mb-3">
                                <label class="col-2 col-form-label">
                                    lampiran_2
                                </label>
                                <div class="col-2">
                                    <input
                                        type="text"
                                        class="form-control form-control-lg"
                                        name="nomor_halaman_lampiran_2"
                                        value="{{ old('nomor_halaman_lampiran_2', $Penelitian->nomor_halaman_lampiran_2) }}"
                                    >
                                </div>
                            </div>
                        <!-- Nomor Halaman -->
                            <div class="form-group row mb-3">
                                <label class="col-2 col-form-label">
                                    lampiran_3
                                </label>
                                <div class="col-2">
                                    <input
                                        type="text"
                                        class="form-control form-control-lg"
                                        name="nomor_halaman_lampiran_3"
                                        value="{{ old('nomor_halaman_lampiran_3', $Penelitian->nomor_halaman_lampiran_3) }}"
                                    >
                                </div>
                            </div>
                        <!-- Nomor Halaman -->
                            <div class="form-group row mb-3">
                                <label class="col-2 col-form-label">
                                    lampiran_4
                                </label>
                                <div class="col-2">
                                    <input
                                        type="text"
                                        class="form-control form-control-lg"
                                        name="nomor_halaman_lampiran_4"
                                        value="{{ old('nomor_halaman_lampiran_4', $Penelitian->nomor_halaman_lampiran_4) }}"
                                    >
                                </div>
                            </div>
                        <!-- Nomor Halaman -->
                            <div class="form-group row mb-3">
                                <label class="col-2 col-form-label">
                                    lampiran_5
                                </label>
                                <div class="col-2">
                                    <input
                                        type="text"
                                        class="form-control form-control-lg"
                                        name="nomor_halaman_lampiran_5"
                                        value="{{ old('nomor_halaman_lampiran_5', $Penelitian->nomor_halaman_lampiran_5) }}"
                                    >
                                </div>
                            </div>
                        <!-- Nomor Halaman -->
                            <div class="form-group row mb-3">
                                <label class="col-2 col-form-label">
                                    lampiran_6
                                </label>
                                <div class="col-2">
                                    <input
                                        type="text"
                                        class="form-control form-control-lg"
                                        name="nomor_halaman_lampiran_6"
                                        value="{{ old('nomor_halaman_lampiran_6', $Penelitian->nomor_halaman_lampiran_6) }}"
                                    >
                                </div>
                            </div>
                        <!-- Nomor Halaman -->
                            <div class="form-group row mb-3">
                                <label class="col-2 col-form-label">
                                    lampiran_7
                                </label>
                                <div class="col-2">
                                    <input
                                        type="text"
                                        class="form-control form-control-lg"
                                        name="nomor_halaman_lampiran_7"
                                        value="{{ old('nomor_halaman_lampiran_7', $Penelitian->nomor_halaman_lampiran_7) }}"
                                    >
                                </div>
                            </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="card mb-4">
            <x-studio_v30.general-form-card-header
                    view="{{ $view_file }}"
                    panel="Surat Pernyataan {{ $panel_name }}"/>
            <div class="card-body pb-4">
                <div class="row justify-content-md-center">
                    <div class="col-11">
                        <!-- Surat Pernyataan -->
                            <div class="form-group row mb-3">
                                <label class="col-2 col-form-label">
                                    surat_pernyataan_ketua
                                </label>
                                <div class="col-6">
                                    <input
                                        type="file"
                                        class="form-control form-control-lg"
                                        name="surat_pernyataan_ketua"
                                    >
                                </div>
                            </div>
                        <!-- Surat Pernyataan -->
                            <div class="form-group row mb-3">
                                <label class="col-2 col-form-label">
                                    surat_pernyataan_anggota_1
                                </label>
                                <div class="col-6">
                                    <input
                                        type="file"
                                        class="form-control form-control-lg"
                                        name="surat_pernyataan_anggota_1"
                                    >
                                </div>
                            </div>
                        <!-- Surat Pernyataan -->
                            <div class="form-group row mb-3">
                                <label class="col-2 col-form-label">
                                    surat_pernyataan_anggota_2
                                </label>
                                <div class="col-6">
                                    <input
                                        type="file"
                                        class="form-control form-control-lg"
                                        name="surat_pernyataan_anggota_2"
                                    >
                                </div>
                            </div>
                        <!-- Surat Pernyataan -->
                            <div class="form-group row mb-3">
                                <label class="col-2 col-form-label">
                                    surat_pernyataan_mahasiswa_1
                                </label>
                                <div class="col-6">
                                    <input
                                        type="file"
                                        class="form-control form-control-lg"
                                        name=" 	surat_pernyataan_mahasiswa_1"
                                    >
                                </div>
                            </div>
                        <!-- Surat Pernyataan -->
                            <div class="form-group row mb-3">
                                <label class="col-2 col-form-label">
                                    surat_pernyataan_mahasiswa_2
                                </label>
                                <div class="col-6">
                                    <input
                                        type="file"
                                        class="form-control form-control-lg"
                                        name="surat_pernyataan_mahasiswa_2"
                                    >
                                </div>
                            </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="card mb-4">
            <x-studio_v30.general-form-card-header
                    view="{{ $view_file }}"
                    panel="Surat Pernyataan {{ $panel_name }}"/>
            <div class="card-body pb-4">
                <div class="row justify-content-md-center">
                    <div class="col-11">
                        <!-- Surat Pernyataan -->
                            <div class="form-group row mb-3">
                                <label class="col-2 col-form-label">
                                    surat_pernyataan_kesanggupan_ketua
                                </label>
                                <div class="col-6">
                                    <input
                                        type="file"
                                        class="form-control form-control-lg"
                                        name="surat_pernyataan_kesanggupan_ketua"
                                    >
                                </div>
                            </div>
                        <!-- Surat Pernyataan -->
                            <div class="form-group row mb-3">
                                <label class="col-2 col-form-label">
                                    surat_pernyataan_kesanggupan_anggota_1
                                </label>
                                <div class="col-6">
                                    <input
                                        type="file"
                                        class="form-control form-control-lg"
                                        name="surat_pernyataan_kesanggupan_anggota_1"
                                    >
                                </div>
                            </div>
                        <!-- Surat Pernyataan -->
                            <div class="form-group row mb-3">
                                <label class="col-2 col-form-label">
                                    surat_pernyataan_kesanggupan_anggota_2
                                </label>
                                <div class="col-6">
                                    <input
                                        type="file"
                                        class="form-control form-control-lg"
                                        name="surat_pernyataan_kesanggupan_anggota_2"
                                    >
                                </div>
                            </div>
                        <!-- Surat Pernyataan -->
                            <div class="form-group row mb-3">
                                <label class="col-2 col-form-label">
                                    surat_pernyataan_kesanggupan_mahasiswa_1
                                </label>
                                <div class="col-6">
                                    <input
                                        type="file"
                                        class="form-control form-control-lg"
                                        name=" 	surat_pernyataan_kesanggupan_mahasiswa_1"
                                    >
                                </div>
                            </div>
                        <!-- Surat Pernyataan -->
                            <div class="form-group row mb-3">
                                <label class="col-2 col-form-label">
                                    surat_pernyataan_kesanggupan_mahasiswa_2
                                </label>
                                <div class="col-6">
                                    <input
                                        type="file"
                                        class="form-control form-control-lg"
                                        name="surat_pernyataan_kesanggupan_mahasiswa_2"
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
