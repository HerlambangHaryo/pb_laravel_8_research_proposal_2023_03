@extends('templates.'.$template.'.form')

@section('title', $panel_name)

@section('content')
    <form class="col-12" action="{{ route($content.'.update', $Daftar_pustaka->id ) }}"
        method="POST"  >
        @csrf
        @method('PUT')

        <div class="card mb-4">
            <x-studio_v30.general-form-card-header
                view="{{ $view_file }}"
                panel="{{ $panel_name }}"/>
            <div class="card-body pb-4">
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
                                    rows="5">{{ old('judul', $Daftar_pustaka->judul) }}</textarea>
                            </div>
                        </div>
                    <!-- Jurnal -->
                        <div class="form-group row mb-3">
                            <label class="col-2 col-form-label">
                                Jurnal
                            </label>
                            <div class="col-6">
                                <textarea
                                    class="form-control"
                                    name="jurnal"
                                    rows="5">{{ old('jurnal', $Daftar_pustaka->jurnal) }}</textarea>
                            </div>
                        </div>
                    <!-- Volume -->
                        <div class="form-group row mb-3">
                            <label class="col-2 col-form-label">
                                Volume
                            </label>
                            <div class="col-4">
                                <input
                                    type="text"
                                    class="form-control form-control-lg"
                                    name="volume"
                                    value="{{ old('volume', $Daftar_pustaka->volume) }}"
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
                                    value="{{ old('nomor', $Daftar_pustaka->nomor) }}"
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
                                    value="{{ old('tahun', $Daftar_pustaka->tahun) }}"
                                >
                            </div>
                        </div>


                    <!-- Link -->
                        <div class="form-group row mb-3">
                            <label class="col-2 col-form-label">
                                Link
                            </label>
                            <div class="col-6">
                                <textarea
                                    class="form-control"
                                    name="url"
                                    rows="5">{{ old('url', $Daftar_pustaka->url) }}</textarea>
                            </div>
                        </div>
                    <!-- Sitasi -->
                        <div class="form-group row mb-3">
                            <label class="col-2 col-form-label">
                                Sitasi
                            </label>
                            <div class="col-6">
                                <input
                                    type="text"
                                    class="form-control form-control-lg"
                                    name="sitasi"
                                    value="{{ old('sitasi', $Daftar_pustaka->sitasi) }}"
                                >
                            </div>
                        </div>
                    <!-- Daftar Pustaka -->
                        <div class="form-group row mb-3">
                            <label class="col-2 col-form-label">
                                Daftar Pustaka
                            </label>
                            <div class="col-6">
                                <textarea
                                    class="form-control"
                                    name="daftar_pustaka"
                                    rows="5">{{ old('url', $Daftar_pustaka->daftar_pustaka) }}</textarea>
                            </div>
                        </div>
                </div>
            </div>
        </div>

        <x-studio_v30.button-submit />
    </form>
@endsection
