@extends('templates.'.$template.'.form')

@section('title', $panel_name)

@section('content')
    <form class="col-12" action="{{ route($content.'.update', $Dasar_teori->id ) }}"
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
                        <!-- form -->
                        <div class="form-group row mb-3">
                                <label class="col-2 col-form-label">
                                    Teori
                                </label>
                                <div class="col-4">
                                    <input
                                        type="text"
                                        class="form-control form-control-lg"
                                        name="teori"
                                        value="{{ old('teori', $Dasar_teori->teori) }}"
                                    >
                                </div>
                            </div>

                        <!-- Penjelasan -->
                            <div class="form-group row mb-3">
                                <label class="col-2 col-form-label">
                                    Penjelasan
                                </label>
                                <div class="col-8">
                                    <textarea
                                        class="form-control"
                                        name="penjelasan"
                                        rows="10">{{ old('penjelasan', $Dasar_teori->penjelasan) }}</textarea>
                                </div>
                            </div>
                        <!-- urutan -->
                            <div class="form-group row mb-3">
                                <label class="col-2 col-form-label">
                                    Nomor Halaman
                                </label>
                                <div class="col-2">
                                    <input
                                        type="number"
                                        class="form-control form-control-lg"
                                        name="nomor_halaman"
                                        value="{{ old('nomor_halaman', $Dasar_teori->nomor_halaman) }}"
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
