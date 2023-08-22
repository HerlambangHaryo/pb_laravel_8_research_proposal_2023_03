@extends('templates.'.$template.'.form')

@section('title', $panel_name)

@section('content')
    <form class="col-12" action="{{ route($content.'.destroy', $Karya_buku->id ) }}"
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
        </div>

        <x-studio_v30.button-submit />
    </form>
@endsection
