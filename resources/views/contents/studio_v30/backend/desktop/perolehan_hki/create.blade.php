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
                                    rows="5"></textarea>
                            </div>
                        </div>
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
                                >
                            </div>
                        </div>
                </div>
            </div>
        </div>

        <x-studio_v30.button-submit />
    </form>
@endsection
