@extends('templates.'.$template.'.datatable')

@section('title', $panel_name)

@section('content')
    @include('contents.includes.data_menu_penelitian')
    @include('contents.includes.sub_menu_penelitian')


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
                        <a href="{{ route('Print.Print_subbab_review',
                                [
                                    'Print' => $Penelitian->id,
                                    'Review' => 'daftar_pustaka'
                                ]
                                ) }}"
                            class="btn btn-sm btn-secondary"
                            target="_blank">
                            <i class="fas fa-print"></i>
                            Print subbab review
                        </a>
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
                                <x-html.th-content title="Jurnal" />
                                <x-html.th-content-width title="Tahun" width="5%" />
                                <x-html.th-content-width title="Link" width="12%" />
                                <x-html.th-content-width title="Action." width="10%" />
                            </tr>
                        </thead>
                        <tbody>


                        @forelse ($Daftar_pustaka as $row)
                                <tr>
                                    <td class="text-center">
                                        {{ $loop->iteration }}
                                    </td>
                                    <td class="text-start">
                                        {{ $row->judul }}
                                    </td>
                                    <td class="text-start">
                                        {{ $row->jurnal }}
                                    </td>
                                    <td class="text-start">
                                        {{ $row->tahun }}
                                    </td>
                                    <td class="text-center">
                                        @if(!is_null($row->url))
                                            <a href="{{ $row->url }}" target="_blank">
                                                Publikasi_{{ $row->id }}
                                                <i class="fas fa-external-link-square-alt"></i>
                                            </a>
                                        @endif
                                    </td>
                                    <td class="text-start">
                                        <div class="menu">
                                            <div class="menu-item dropdown">
                                                <a href="#" data-bs-toggle="dropdown" data-display="static" class="menu-link">
                                                    <div class="menu-text btn btn-sm btn-secondary">
                                                        Actions
                                                        <i class="fa-solid fa-caret-down fa-fw ms-auto text-dark text-opacity-50"></i>
                                                    </div>
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-right me-lg-3">
                                                    <a class="dropdown-item d-flex align-items-center"
                                                        href="{{ route($content.'.show', $row->id) }}">
                                                        Author
                                                        <i class="fa fa-eye fa-fw ms-auto text-dark text-opacity-50"></i>
                                                    </a>
                                                    <a class="dropdown-item d-flex align-items-center"
                                                        href="{{ route($content.'.edit', $row->id) }}">
                                                        Edit
                                                        <i class="far fa-edit fa-fw ms-auto text-dark text-opacity-50"></i>
                                                    </a>
                                                    <a class="dropdown-item d-flex align-items-center"
                                                        href="{{ route($content.'.deletedata', $row->id) }}">
                                                        Delete
                                                        <i class="fas fa-trash-alt fa-fw ms-auto text-dark text-opacity-50"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>

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
