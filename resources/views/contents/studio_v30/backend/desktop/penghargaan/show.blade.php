@extends('templates.'.$template.'.form')

@section('title', $panel_name)

@section('content')

<div class="card mb-4">
    <x-studio_v30.general-form-card-header
        view="{{ $view_file }}"
        panel="{{ $panel_name }}"/>
    <div class="card-body pb-4">
        <div>
            <!-- Jenis -->
                <div class="form-group row mb-3">
                    <label class="col-2 col-form-label">
                        Jenis
                    </label>
                    <div class="col-6">
                        <input
                            type="text"
                            class="form-control form-control-lg"
                            name="jenis"
                            value="{{ old('jenis', $Penghargaan->jenis) }}"
                            disabled
                        >
                    </div>
                </div>
            <!-- Instansi -->
                <div class="form-group row mb-3">
                    <label class="col-2 col-form-label">
                        Instansi
                    </label>
                    <div class="col-6">
                        <input
                            type="text"
                            class="form-control form-control-lg"
                            name="instansi"
                            value="{{ old('instansi', $Penghargaan->instansi) }}"
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
                            value="{{ old('tahun', $Penghargaan->tahun) }}"
                            disabled
                        >
                    </div>
                </div>
        </div>
    </div>
</div>
@endsection
