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
                                    dd($Karya_buku->nama);
                                ?>
                                <tr>
                                    <td class="text-center">
                                        {{ $Karya_buku->id }}
                                    </td>
                                    <td class="text-start">
                                        {{ $Karya_buku->nama }}
                                    </td>
                                    <td class="text-center">
                                        {{ $Karya_buku->jabatan_fungsional }}
                                    </td>
                                    <td class="text-center">
                                        {{ $Karya_buku->nidn }}
                                    </td>
                                    <td class="text-center">
                                        {{ $Karya_buku->email }}
                                    </td>
                                </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
