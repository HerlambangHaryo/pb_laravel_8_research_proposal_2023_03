@extends('templates.'.$template.'.datatable')

@section('title', $panel_name)

@section('content')
    @include('contents.includes.data_menu_peneliti')
    @include('contents.includes.sub_menu_peneliti')

    <div class="row mb-4 justify-content-md-center">
        <div class="col-6">
            <table id="datatableDefault" class="table  "  >
                <tbody>
                    <tr>
                        <td width="40%">
                            Nama Lengkap
                        </td>
                        <td>:</td>
                        <td>
                            {{ $Peneliti->nama }}
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Jenis Kelamin
                        </td>
                        <td>:</td>
                        <td>
                            {{ $Peneliti->jenis_kelamin }}
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Jabatan Fungsional
                        </td>
                        <td>:</td>
                        <td>
                            {{ $Peneliti->jabatan_fungsional }}
                        </td>
                    </tr>
                    <tr>
                        <td>
                            NIP/NIK/Identitas lainnya
                        </td>
                        <td>:</td>
                        <td>
                            {{ $Peneliti->nip_nik_lainnya }}
                        </td>
                    </tr>
                    <tr>
                        <td>
                            NIDN
                        </td>
                        <td>:</td>
                        <td>
                            {{ $Peneliti->nidn }}
                        </td>
                    </tr>
                    <tr>
                        <td>
                        ID Sinta / Google Scholar
                        <br/>
                        URL
                        </td>
                        <td>:</td>
                        <td>
                            {{ $Peneliti->id_sinta_google_scholar }}
                            @if(!is_null($Peneliti->url))
                                <br/>
                                <a href="{{ $Peneliti->url }}" target="_blank">
                                    URL Google Scholar
                                    <i class="fas fa-external-link-square-alt"></i>
                                </a>
                            @endif
                        </td>
                    </tr>
                    <tr>
                        <td>
                            ID Scopus
                        </td>
                        <td>:</td>
                        <td>
                            {{ $Peneliti->id_scopus }}
                        </td>
                    </tr>
                    <tr>
                        <td>
                            ID Orchid
                        </td>
                        <td>:</td>
                        <td>
                            {{ $Peneliti->id_orchid }}
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Tempat dan Tanggal Lahir
                        </td>
                        <td>:</td>
                        <td>
                            {{ $Peneliti->tempat_lahir }},
                            {{ $Peneliti->tanggal_lahir }}
                        </td>
                    </tr>
                    <tr>
                        <td>
                            E-mail
                        </td>
                        <td>:</td>
                        <td>
                            {{ $Peneliti->email }}
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Nomor Telepon/ HP
                        </td>
                        <td>:</td>
                        <td>
                            {{ $Peneliti->telepon }}
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Alamat Kantor
                        </td>
                        <td>:</td>
                        <td>
                            {{ $Peneliti->perguruan_tinggi->alamat }},
                            Kel. {{ $Peneliti->perguruan_tinggi->kelurahan }},
                            Kec. {{ $Peneliti->perguruan_tinggi->kecamatan }},
                            Kota {{ $Peneliti->perguruan_tinggi->kota }},
                            {{ $Peneliti->perguruan_tinggi->provinsi }}
                            {{ $Peneliti->perguruan_tinggi->kodepos }}
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Nomor Telepon / Faks
                        </td>
                        <td>:</td>
                        <td>
                            {{ $Peneliti->perguruan_tinggi->telepon }} /

                            {{ $Peneliti->perguruan_tinggi->fax }}
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Lulusan yang Telah Dihasilkan
                        </td>
                        <td>:</td>
                        <td>
                            @if(!is_null($Peneliti->lulusan_s1))
                                <br/>
                                S-1 = {{ $Peneliti->lulusan_s1 }} Orang
                            @endif
                            @if(!is_null($Peneliti->lulusan_s2))
                                <br/>
                                S-2 = {{ $Peneliti->lulusan_s2 }} Orang
                            @endif
                            @if(!is_null($Peneliti->lulusan_s3))
                                <br/>
                                S-3 = {{ $Peneliti->lulusan_s3 }} Orang
                            @endif
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Mata Kuliah yang Diampu
                        </td>
                        <td>:</td>
                        <td>
                            @foreach($Peneliti->mata_kuliah as $row)
                                {{ $loop->iteration }}. {{ $row->judul }}<br/>
                            @endforeach
                        </td>
                    </tr>
                </tbody>
            </table>

        </div>
    </div>

    <div class="row mb-4 justify-content-md-center">
        <div class="col-6">
            <table id="datatableDefault" class="table  "  >
                <tbody>
                    <tr>
                        <td>
                        </td>
                        <td>
                            S-1
                        </td>
                        <td>
                            S-2
                        </td>
                        <td>
                            S-3
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Nama Perguruan Tinggi
                        </td>
                        <td>
                            {{ $Peneliti->s1_perguruan_tinggi }}
                        </td>
                        <td>
                            {{ $Peneliti->s2_perguruan_tinggi }}
                        </td>
                        <td>
                            {{ $Peneliti->s3_perguruan_tinggi }}
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Bidang Ilmu
                        </td>
                        <td>
                            {{ $Peneliti->s1_bidang_ilmu }}
                        </td>
                        <td>
                            {{ $Peneliti->s2_bidang_ilmu }}
                        </td>
                        <td>
                            {{ $Peneliti->s3_bidang_ilmu }}
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Tahun Masuk - Lulus
                        </td>
                        <td>
                            {{ $Peneliti->s1_tahun_masuk }} -
                            {{ $Peneliti->s1_tahun_lulus }}
                        </td>
                        <td>
                            {{ $Peneliti->s2_tahun_masuk }} -
                            {{ $Peneliti->s2_tahun_lulus }}
                        </td>
                        <td>
                            {{ $Peneliti->s3_tahun_masuk }} -
                            {{ $Peneliti->s3_tahun_lulus }}
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Judul Skripsi / Tesis / Disertasi
                        </td>
                        <td>
                            {{ $Peneliti->s1_judul  }}
                        </td>
                        <td>
                            {{ $Peneliti->s2_judul  }}
                        </td>
                        <td>
                            {{ $Peneliti->s3_judul  }}
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Nama Pembimbing / Promotor
                        </td>
                        <td>
                            {{ $Peneliti->s1_pembimbing }}
                        </td>
                        <td>
                            {{ $Peneliti->s2_pembimbing }}
                        </td>
                        <td>
                            {{ $Peneliti->s3_pembimbing }}
                        </td>
                    </tr>
                </tbody>
            </table>

        </div>
    </div>

@endsection
