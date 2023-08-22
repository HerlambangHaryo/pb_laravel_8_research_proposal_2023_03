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
                                    'Review' => 'latar_belakang'
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
                    <table id="datatableDefaultx" class="table  ">
                        <thead class=" ">
                            <tr>
                                <x-html.th-content-width title="No." width="5%" />
                                <x-html.th-content-width title="Sub" width="15%" />
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
                                    Umum (100)
                                </td>
                                <td class="text-left">
                                    {{ $Penelitian->latar_belakang_umum }}
                                </td>
                                <td class="text-center">
                                    <?php
                                        $total_count = 0 ;
                                        $count = str_word_count($Penelitian->latar_belakang_umum);
                                        $total_count += $count ;
                                    ?>
                                    {{ $count }} / 100
                                </td>
                                <td class="text-left">
                                    {{ $Penelitian->latar_belakang_umum_catatan }}
                                </td>
                            </tr>
                            <tr>
                                <td class="text-center">
                                    2.
                                </td>
                                <td class="text-center">
                                    Permasalahan (100)
                                </td>
                                <td class="text-left">
                                    {{ $Penelitian->latar_belakang_permasalahan }}
                                </td>
                                <td class="text-center">
                                    <?php
                                        $count = str_word_count($Penelitian->latar_belakang_permasalahan);
                                        $total_count += $count ;
                                    ?>
                                    {{ $count }} / 100
                                </td>
                                <td class="text-left">
                                    {{ $Penelitian->latar_belakang_permasalahan_catatan }}
                                </td>
                            </tr>
                            <tr>
                                <td class="text-center">
                                    3.
                                </td>
                                <td class="text-center">
                                    Tujuan (100)
                                </td>
                                <td class="text-left">
                                    {{ $Penelitian->latar_belakang_tujuan }}
                                </td>
                                <td class="text-center">
                                    <?php
                                        $count = str_word_count($Penelitian->latar_belakang_tujuan);
                                        $total_count += $count ;
                                    ?>
                                    {{ $count }} / 100
                                </td>
                                <td class="text-left">
                                    {{ $Penelitian->latar_belakang_tujuan_catatan }}
                                </td>
                            </tr>
                            <tr>
                                <td class="text-center">
                                    4.
                                </td>
                                <td class="text-center">
                                    Urgensi (100)
                                </td>
                                <td class="text-left">
                                    {{ $Penelitian->latar_belakang_urgensi }}
                                </td>
                                <td class="text-center">
                                    <?php
                                        $count = str_word_count($Penelitian->latar_belakang_urgensi);
                                        $total_count += $count ;
                                    ?>
                                    {{ $count }} / 100
                                </td>
                                <td class="text-left">
                                    {{ $Penelitian->latar_belakang_urgensi_catatan }}
                                </td>
                            </tr>
                            <tr>
                                <td class="text-center">
                                    5.
                                </td>
                                <td class="text-center">
                                    Terkait skema (100)
                                </td>
                                <td class="text-left">
                                    {{ $Penelitian->latar_belakang_terkait_dengan_skema }}
                                </td>
                                <td class="text-center">
                                    <?php
                                        $count = str_word_count($Penelitian->latar_belakang_terkait_dengan_skema);
                                        $total_count += $count ;
                                    ?>
                                    {{ $count }} / 100
                                </td>
                                <td class="text-left">
                                    {{ $Penelitian->latar_belakang_terkait_dengan_skema_catatan }}
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
