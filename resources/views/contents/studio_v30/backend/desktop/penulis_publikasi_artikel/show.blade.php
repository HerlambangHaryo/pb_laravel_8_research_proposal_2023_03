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
                                <x-html.th-content-width title="No." width="10%" />
                                <x-html.th-content title="Nama" />
                                <x-html.th-content title="Jabatan" />
                                <x-html.th-content title="NIDN" />
                                <x-html.th-content title="Email" />
                            </tr>
                        </thead>
                        <tbody>
                                <?php
                                    dd($Publikasi_artikel->nama);
                                ?>
                                <tr>
                                    <td class="text-center">
                                        {{ $Publikasi_artikel->id }}
                                    </td>
                                    <td class="text-start">
                                        {{ $Publikasi_artikel->nama }}
                                    </td>
                                    <td class="text-center">
                                        {{ $Publikasi_artikel->jabatan_fungsional }}
                                    </td>
                                    <td class="text-center">
                                        {{ $Publikasi_artikel->nidn }}
                                    </td>
                                    <td class="text-center">
                                        {{ $Publikasi_artikel->email }}
                                    </td>
                                </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
