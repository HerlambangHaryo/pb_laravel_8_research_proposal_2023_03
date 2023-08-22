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

                        <!-- Dekan -->
                        <div class="form-group row mb-3">
                            <label class="col-2 col-form-label">
                                Peneliti
                            </label>
                            <div class="col-6">
                                <select class="form-select"
                                    name="id_peneliti">
                                    <option value="">
                                        Pilih Peneliti
                                    </option>
                                    @foreach($peneliti as $row)
                                        <option value="{{ $row->id }}">
                                            {{ $row->nama }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                </div>
            </div>
        </div>

        <x-studio_v30.button-submit />
    </form>
@endsection
