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
                                    'Review' => 'Dasar_teori'
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
                                <x-html.th-content-width title="Urutan" width="5%" />
                                <x-html.th-content title="Teori" />
                                <x-html.th-content title="Penjelasan" />
                                <x-html.th-content-width title="nomor" width="10%" />
                                <x-html.th-content-width title="Action." width="10%" />
                            </tr>
                        </thead>
                        <tbody>
                            @php $total_count = 0; @endphp

                            @forelse ($Dasar_teori as $row)
                                <tr>
                                    <td class="text-center">
                                        {{ $loop->iteration }}
                                    </td>
                                    <td class="text-center">
                                        {{ $row->teori }}
                                    </td>
                                    <td class="text-left">
                                        {{ $row->penjelasan }}
                                    </td>
                                    <td class="text-start">
                                        {{ $row->nomor_halaman }}
                                    </td>
                                    <td class="text-center">
                                        <?php
                                            $total_count = 0 ;
                                            $count = str_word_count($row->penjelasan);
                                            $total_count += $count ;
                                        ?>
                                        {{ $count }} / 100
                                    </td>
                                    <td class="text-start">
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
