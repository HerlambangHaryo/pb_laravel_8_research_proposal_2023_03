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

                        <!-- Kategori -->
                            <div class="form-group row mb-3">
                                <label class="col-2 col-form-label">
                                    Kategori
                                </label>
                                <div class="col-6">
                                    <select class="form-select"
                                        name="kategori">
                                        <option value="">
                                            Pilih Kategori
                                        </option>
                                        <option value="Honor">Honor</option>
                                        <option value="Peralatan Penunjang">Peralatan Penunjang</option>
                                        <option value="Bahan Habis Pakai">Bahan Habis Pakai</option>
                                        <option value="Perjalanan">Perjalanan</option>
                                        <option value="Lain-lain">Lain-lain</option>
                                    </select>
                                </div>
                            </div>
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
                        <!-- Justifikasi Anggaran -->
                            <div class="form-group row mb-3">
                                <label class="col-2 col-form-label">
                                    Justifikasi Anggaran
                                </label>
                                <div class="col-6">
                                    <input
                                        type="text"
                                        class="form-control form-control-lg"
                                        name="justifikasi_anggaran"
                                    >
                                </div>
                            </div>


                        <!-- satuan -->
                            <div class="form-group row mb-3">
                                <label class="col-2 col-form-label">
                                    Kuantitas
                                </label>
                                <div class="col-2">
                                    <input
                                        type="number"
                                        class="form-control form-control-lg"
                                        name="kuantitas"
                                    >
                                </div>
                            </div>
                        <!-- Harga -->
                            <div class="form-group row mb-3">
                                <label class="col-2 col-form-label">
                                    Harga
                                </label>
                                <div class="col-6">
                                    <input
                                        type="number"
                                        class="form-control form-control-lg"
                                        name="harga"
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
