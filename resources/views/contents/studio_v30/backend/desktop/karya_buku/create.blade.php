@extends('templates.'.$template.'.form')

@section('title', $panel_name)

@section('content')
    <form class="col-12" action="{{ route($content.'.store' ) }}"
        method="POST"  >
        @csrf

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
