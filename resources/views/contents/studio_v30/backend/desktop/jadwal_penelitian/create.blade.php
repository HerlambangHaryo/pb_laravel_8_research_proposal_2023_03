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
                        <!-- Kegiatan -->
                            <div class="form-group row mb-3">
                                <label class="col-2 col-form-label">
                                    Kegiatan
                                </label>
                                <div class="col-6">
                                    <textarea
                                        class="form-control"
                                        name="kegiatan"
                                        rows="5"></textarea>
                                </div>
                            </div>
                        <!-- urutan -->
                            <div class="form-group row mb-3">
                                <label class="col-2 col-form-label">
                                    Urutan
                                </label>
                                <div class="col-2">
                                    <input
                                        type="number"
                                        class="form-control form-control-lg"
                                        name="urutan"
                                    >
                                </div>
                            </div>
                        <!-- Bulan Pengerjaan -->
                        <div class="form-group row mb-3">
                            <label class="col-2 col-form-label">
                                Bulan Pengerjaan
                            </label>
                            <div class="col-4">
                                <input
                                    type="text"
                                    class="form-control form-control-lg"
                                    name="bulan"
                                >
                            </div>
                        </div>


                    <!-- Indikator Capaian -->
                        <div class="form-group row mb-3">
                            <label class="col-2 col-form-label">
                                Indikator Capaian
                            </label>
                            <div class="col-6">
                                <textarea
                                    class="form-control"
                                    name="indikator_capaian"
                                    rows="5"></textarea>
                            </div>
                        </div>

                    <!-- Penjelasan -->
                        <div class="form-group row mb-3">
                            <label class="col-2 col-form-label">
                                Penjelasan (100)
                            </label>
                            <div class="col-8">
                                <textarea
                                    class="form-control"
                                    name="penjelasan"
                                    rows="10"></textarea>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>

        <x-studio_v30.button-submit />
    </form>
@endsection
