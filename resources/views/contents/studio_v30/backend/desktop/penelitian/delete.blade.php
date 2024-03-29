@extends('templates.'.$template.'.form')

@section('title', $panel_name)

@section('content')
    <form class="col-12" action="{{ route($content.'.destroy', $Penelitian->id ) }}"
        method="POST"  >
        @csrf
        @method('DELETE')

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
                                        rows="5"
                                        disabled>{{ old('judul', $Penelitian->judul) }}</textarea>
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
                                    disabled
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
                                        disabled
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
                                            <option value="{{ $row->id }}">
                                                {{ $row->nama }}
                                            </option>
                                        @endforeach
                                    </select>
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
                                            <option value="{{ $row->id }}">
                                                {{ $row->nama }}
                                            </option>
                                        @endforeach
                                    </select>
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
                                            <option value="{{ $row->id }}">
                                                {{ $row->nama }}
                                            </option>
                                        @endforeach
                                    </select>
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
                                            <option value="{{ $row->id }}">
                                                {{ $row->nama }}
                                            </option>
                                        @endforeach
                                    </select>
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
                                            <option value="{{ $row->id }}">
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
                                            <option value="{{ $row->id }}">
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
                                            <option value="{{ $row->id }}">
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

        <x-studio_v30.button-submit />
    </form>
@endsection
