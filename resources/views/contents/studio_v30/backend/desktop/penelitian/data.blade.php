@extends('templates.'.$template.'.datatable')

@section('title', $panel_name)

@section('content')
    <div id="datatable" class="mb-5">
        <div class="card">
            <div class="card-header">
                <div class="row mb-4">
                    <div class="col-6">
                        <h5>
                            Data - {{ $panel_name }}
                        </h5>
                    </div>
                    <div class="col-6 text-end">
                        <x-studio_v30.button-create content="{{ $content }}" />
                    </div>
                </div>
            </div>
            <div class="card-body pb-4">
                <div>
                    <table id="datatableDefault" class="table  ">
                        <thead class=" ">
                            <tr>
                                <x-html.th-content-width title="No." width="5%" />
                                <x-html.th-content title="Judul" />
                                <x-html.th-content-width title="Tahun" width="5%" />
                                <x-html.th-content-width title="Skema" width="5%" />
                                <x-html.th-content-width title="Pengusul" width="25%" />
                                <x-html.th-content-width title="Action." width="10%" />
                            </tr>
                        </thead>
                        <tbody>

                            @forelse ($data as $row)
                                <tr>
                                    <td class="text-center">
                                        {{ $loop->iteration }}
                                    </td>
                                    <td class="text-start">
                                        {{ $row->judul }}
                                    </td>
                                    <td class="text-center">
                                        {{ define_year($row->tanggal_usulan) }}
                                    </td>
                                    <td class="text-center">
                                        {{ $row->skema }}
                                    </td>
                                    <td class="text-start">
                                        <b>
                                            {{ $row->ketua->nama }}
                                        </b>
                                        <br/>
                                        {{ $row->anggota_1->nama }}
                                        <br/>
                                        {{ $row->anggota_2->nama }}
                                    </td>
                                    <td class="text-center">
                                        <x-studio_v30.menu-dropdown-data content="{{ $content }}" id="{{ $row->id }}" />
                                    </td>
                                </tr>
                                @empty

                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
