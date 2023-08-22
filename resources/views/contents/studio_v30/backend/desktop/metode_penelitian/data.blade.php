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
                            Data - {{ $panel_name }} - (500)
                        </h5>
                    </div>
                    <div class="col-6 text-end">
                        <a href="{{ route($content.'.edit', $Penelitian->id) }}"
                            class="btn btn-sm btn-secondary" >
                            <i class="far fa-edit"></i>
                            Edit
                        </a>
                        <a href="{{ route('Print.Print_subbab_review',
                                [
                                    'Print' => $Penelitian->id,
                                    'Review' => 'metode_penelitian'
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
                    <table id="datatableDefaultxx" class="table  ">
                        <thead class=" ">
                            <tr>
                                <x-html.th-content-width title="No." width="5%" />
                                <x-html.th-content-width title="Sub" width="20%" />
                                <x-html.th-content title="Paragraf" />
                                <x-html.th-content-width title="Count" width="10%" />
                                <x-html.th-content title="catatan" />
                            </tr>
                        </thead>
                        <tbody>

                            <tr>
                                <td class="text-center">
                                    1.
                                </td>
                                <td class="text-center">
                                    Gambar Metode
                                </td>
                                <td class="text-left">
                                    {{ $Penelitian->metode_gambar }}
                                </td>
                                <td class="text-center">
                                </td>
                                <td class="text-center">
                                </td>
                            </tr>
                            <tr>
                                <td class="text-center">
                                    2.
                                </td>
                                <td class="text-center">
                                    Uraian diagram alir (100)
                                </td>
                                <td class="text-left">
                                    {{ $Penelitian->metode_uraian }}
                                </td>
                                <td class="text-center">
                                    <?php
                                        $total_count = 0 ;
                                        $count = str_word_count($Penelitian->metode_uraian);
                                        $total_count += $count ;
                                    ?>
                                    {{ $count }} / 100
                                </td>
                                <td class="text-left">
                                    {{ $Penelitian->metode_uraian_catatan }}
                                </td>
                            </tr>
                            <tr>
                                <td class="text-center">
                                    3.
                                </td>
                                <td class="text-center">
                                    Tahapan detail dan jelas (100)
                                </td>
                                <td class="text-left">
                                    {{ $Penelitian->metode_detail }}
                                </td>
                                <td class="text-center">
                                    <?php
                                        $count = str_word_count($Penelitian->metode_detail);
                                        $total_count += $count ;
                                    ?>
                                    {{ $count }} / 100
                                </td>
                                <td class="text-left">
                                    {{ $Penelitian->metode_detail_catatan }}
                                </td>
                            </tr>
                            <tr>
                                <td class="text-center">
                                    4.
                                </td>
                                <td class="text-center">
                                    Luaran (100)
                                </td>
                                <td class="text-left">
                                    {{ $Penelitian->metode_luaran }}
                                </td>
                                <td class="text-center">
                                    <?php
                                        $count = str_word_count($Penelitian->metode_luaran);
                                        $total_count += $count ;
                                    ?>
                                    {{ $count }} / 100
                                </td>
                                <td class="text-left">
                                    {{ $Penelitian->metode_luaran_catatan }}
                                </td>
                            </tr>
                            <tr>
                                <td class="text-center">
                                    5.
                                </td>
                                <td class="text-center">
                                    Indicator capaian (100)
                                </td>
                                <td class="text-left">
                                    {{ $Penelitian->metode_capaian }}
                                </td>
                                <td class="text-center">
                                    <?php
                                        $count = str_word_count($Penelitian->metode_capaian);
                                        $total_count += $count ;
                                    ?>
                                    {{ $count }} / 100
                                </td>
                                <td class="text-left">
                                    {{ $Penelitian->metode_capaian_catatan }}
                                </td>
                            </tr>
                            <tr>
                                <td class="text-center">
                                    6.
                                </td>
                                <td class="text-center">
                                    Tugas masing masing sesuai tahapan (100)
                                </td>
                                <td class="text-left">
                                    {{ $Penelitian->metode_tugas_pengusul }}
                                </td>
                                <td class="text-center">
                                    <?php
                                        $count = str_word_count($Penelitian->metode_tugas_pengusul);
                                        $total_count += $count ;
                                    ?>
                                    {{ $count }} / 100
                                </td>
                                <td class="text-left">
                                    {{ $Penelitian->metode_tugas_pengusul_catatan }}
                                </td>
                            </tr>
                        </tbody>
                        <tfoot>
                            <tr>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td class="text-center">
                                    <h4>
                                        {{ $total_count }}
                                    </h4>
                                </td>
                                <td></td>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>
    </div>

@endsection
