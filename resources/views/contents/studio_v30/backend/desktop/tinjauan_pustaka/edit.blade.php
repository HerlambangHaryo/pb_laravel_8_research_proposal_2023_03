@extends('templates.'.$template.'.form')

@section('title', $panel_name)

@section('content')
    <form class="col-12" action="{{ route($content.'.update', $Tinjauan_pustaka->id ) }}"
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

                        <!-- Gambar Road Map -->
                            <div class="form-group row mb-3">
                                <label class="col-2 col-form-label">
                                    Gambar Road Map
                                </label>
                                <div class="col-6">
                                    <input
                                        type="file"
                                        class="form-control form-control-lg"
                                        name="tinjauan_pustaka_roadmap"
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
                    panel="State of the art - {{ $panel_name }}"/>
            <div class="card-body pb-4">
                <div class="row justify-content-md-center">
                    <div class="col-11">

                        <!-- State of the art (250) -->
                            <div class="form-group row mb-3">
                                <label class="col-2 col-form-label">
                                    State of the art (250)
                                </label>
                                <div class="col-8">
                                    <textarea
                                        class="form-control"
                                        name="tinjauan_pustaka_state_of_the_art"
                                        rows="10">{{ old('tinjauan_pustaka_state_of_the_art', $Tinjauan_pustaka->tinjauan_pustaka_state_of_the_art) }}</textarea>
                                </div>
                            </div>
                        <!-- State of the art catatan -->
                            <div class="form-group row mb-3">
                                <label class="col-2 col-form-label">
                                    Catatan
                                </label>
                                <div class="col-8">
                                    <textarea
                                        class="form-control"
                                        name="tinjauan_pustaka_state_of_the_art_catatan"
                                        rows="3">{{ old('tinjauan_pustaka_state_of_the_art_catatan', $Tinjauan_pustaka->tinjauan_pustaka_state_of_the_art_catatan) }}</textarea>
                                </div>
                            </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="card mb-4">
            <x-studio_v30.general-form-card-header
                    view="{{ $view_file }}"
                    panel="Road map 3 tahun ke belakang - {{ $panel_name }}"/>
            <div class="card-body pb-4">
                <div class="row justify-content-md-center">
                    <div class="col-11">

                        <!-- Road map 3 tahun ke belakang (250) -->
                            <div class="form-group row mb-3">
                                <label class="col-2 col-form-label">
                                    Road map 3 tahun ke belakang (250)
                                </label>
                                <div class="col-8">
                                    <textarea
                                        class="form-control"
                                        name="tinjauan_pustaka_sebelum"
                                        rows="10">{{ old('tinjauan_pustaka_sebelum', $Tinjauan_pustaka->tinjauan_pustaka_sebelum) }}</textarea>
                                </div>
                            </div>
                        <!-- Road map 3 tahun ke belakang catatan -->
                            <div class="form-group row mb-3">
                                <label class="col-2 col-form-label">
                                    Catatan
                                </label>
                                <div class="col-8">
                                    <textarea
                                        class="form-control"
                                        name="tinjauan_pustaka_sebelum_catatan"
                                        rows="3">{{ old('tinjauan_pustaka_sebelum_catatan', $Tinjauan_pustaka->tinjauan_pustaka_sebelum_catatan) }}</textarea>
                                </div>
                            </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="card mb-4">
            <x-studio_v30.general-form-card-header
                    view="{{ $view_file }}"
                    panel="Road map 3 tahun ke depan - {{ $panel_name }}"/>
            <div class="card-body pb-4">
                <div class="row justify-content-md-center">
                    <div class="col-11">

                        <!-- Road map 3 tahun ke depan (250) -->
                            <div class="form-group row mb-3">
                                <label class="col-2 col-form-label">
                                    Road map 3 tahun ke depan (250)
                                </label>
                                <div class="col-8">
                                    <textarea
                                        class="form-control"
                                        name="tinjauan_pustaka_setelah"
                                        rows="10">{{ old('tinjauan_pustaka_setelah', $Tinjauan_pustaka->tinjauan_pustaka_setelah) }}</textarea>
                                </div>
                            </div>
                        <!-- Road map 3 tahun ke depan catatan -->
                            <div class="form-group row mb-3">
                                <label class="col-2 col-form-label">
                                    Catatan
                                </label>
                                <div class="col-8">
                                    <textarea
                                        class="form-control"
                                        name="tinjauan_pustaka_setelah_catatan"
                                        rows="3">{{ old('tinjauan_pustaka_setelah_catatan', $Tinjauan_pustaka->tinjauan_pustaka_setelah_catatan) }}</textarea>
                                </div>
                            </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="card mb-4">
            <x-studio_v30.general-form-card-header
                    view="{{ $view_file }}"
                    panel="Tinjuan Pustaka 10 th terakhir - {{ $panel_name }}"/>
            <div class="card-body pb-4">
                <div class="row justify-content-md-center">
                    <div class="col-11">

                        <!-- Tinjuan Pustaka 10 th terakhir (250) -->
                            <div class="form-group row mb-3">
                                <label class="col-2 col-form-label">
                                    Tinjuan Pustaka 10 th terakhir (250)
                                </label>
                                <div class="col-8">
                                    <textarea
                                        class="form-control"
                                        name="tinjauan_pustaka_umum"
                                        rows="10">{{ old('tinjauan_pustaka_umum', $Tinjauan_pustaka->tinjauan_pustaka_umum) }}</textarea>
                                </div>
                            </div>
                        <!-- Tinjuan Pustaka 10 th terakhir catatan -->
                            <div class="form-group row mb-3">
                                <label class="col-2 col-form-label">
                                    Catatan
                                </label>
                                <div class="col-8">
                                    <textarea
                                        class="form-control"
                                        name="tinjauan_pustaka_umum_catatan"
                                        rows="3">{{ old('tinjauan_pustaka_umum_catatan', $Tinjauan_pustaka->tinjauan_pustaka_umum_catatan) }}</textarea>
                                </div>
                            </div>
                    </div>
                </div>
            </div>
        </div>

        <x-studio_v30.button-submit />
    </form>
@endsection
