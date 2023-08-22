@extends('templates.'.$template.'.form')

@section('title', $panel_name)

@section('content')
    <form class="col-12" action="{{ route($content.'.update', $Metode_penelitian->id ) }}"
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

                        <!-- Gambar Metode -->
                            <div class="form-group row mb-3">
                                <label class="col-2 col-form-label">
                                    Gambar Metode
                                </label>
                                <div class="col-6">
                                    <input
                                        type="file"
                                        class="form-control form-control-lg"
                                        name="metode_gambar"
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
                    panel="Uraian diagram alir - {{ $panel_name }}"/>
            <div class="card-body pb-4">
                <div class="row justify-content-md-center">
                    <div class="col-11">

                        <!-- Uraian diagram alir (100) -->
                            <div class="form-group row mb-3">
                                <label class="col-2 col-form-label">
                                    Uraian diagram alir (100)
                                </label>
                                <div class="col-8">
                                    <textarea
                                        class="form-control"
                                        name="metode_uraian"
                                        rows="10">{{ old('metode_uraian', $Metode_penelitian->metode_uraian) }}</textarea>
                                </div>
                            </div>
                        <!-- catatan -->
                            <div class="form-group row mb-3">
                                <label class="col-2 col-form-label">
                                    catatan
                                </label>
                                <div class="col-8">
                                    <textarea
                                        class="form-control"
                                        name="metode_uraian_catatan"
                                        rows="3">{{ old('metode_uraian_catatan', $Metode_penelitian->metode_uraian_catatan) }}</textarea>
                                </div>
                            </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="card mb-4">
            <x-studio_v30.general-form-card-header
                    view="{{ $view_file }}"
                    panel="Tugas masing masing sesuai tahapan - {{ $panel_name }}"/>
            <div class="card-body pb-4">
                <div class="row justify-content-md-center">
                    <div class="col-11">

                        <!-- Tugas masing masing sesuai tahapan (100) -->
                            <div class="form-group row mb-3">
                                <label class="col-2 col-form-label">
                                    Tugas masing masing sesuai tahapan (100)
                                </label>
                                <div class="col-8">
                                    <textarea
                                        class="form-control"
                                        name="paragraf_uraian_tugas"
                                        rows="10">{{ old('paragraf_uraian_tugas', $Metode_penelitian->paragraf_uraian_tugas) }}</textarea>
                                </div>
                            </div>
                        <!-- catatan -->
                            <div class="form-group row mb-3">
                                <label class="col-2 col-form-label">
                                    catatan
                                </label>
                                <div class="col-8">
                                    <textarea
                                        class="form-control"
                                        name="metode_tugas_pengusul_catatan"
                                        rows="3">{{ old('metode_tugas_pengusul_catatan', $Metode_penelitian->metode_tugas_pengusul_catatan) }}</textarea>
                                </div>
                            </div>
                    </div>
                </div>
            </div>
        </div>

        <x-studio_v30.button-submit />
    </form>
@endsection
