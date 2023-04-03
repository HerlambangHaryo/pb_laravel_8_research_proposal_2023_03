@extends('template.'.$template.'.a4_portrait')

@section('title', $panel_name)

@section('content')  

     
    <section class="container border-container" > 
        <div class=" "> 
            <table class="uppercase bold text-right border float-right">
                <tr>
                    <td>
                        461 / SISTEM INFORMASI
                    </td>
                </tr>
            </table> 
        </div>

        <br/>
        <br/>
        <br/>
        <br/>
        <br/> 

        <div class="uppercase bold text-center text-size-18pt lh-15">
            PROPOSAL
            <br/>
            RISET DASAR
        </div>

        <br/>
        <br/>
        <br/>

        <div class="text-center">
            <img width="189px"
                src="{{ asset('/public/storage/perguruan_tinggi/').'/'.$Penelitian->ketua->perguruan_tinggi->logo }}" alt="">
        </div>

        <br/>
        <br/>

        <div class="uppercase bold text-center text-size-14pt lh-15">
            {{ $Penelitian->judul }}
        </div>

        <br/>
        <br/>

        <div class="text-center bold">
            Diusulkan oleh:
        </div>

        <br/>

        <div class="">
            <table width="100%">
                <tr>
                    <td>
                        Ketua
                    </td> 
                    <td>
                        {{ $Penelitian->ketua->nama }}
                    </td>
                    <td>
                        {{ $Penelitian->ketua->nidn }}
                    </td>
                    <td>
                        {{ $Penelitian->ketua->perguruan_tinggi->kode }}
                    </td>
                </tr>
                <tr>
                    <td>
                        Anggota
                    </td> 
                    <td>
                        {{ $Penelitian->anggota_1->nama }}
                    </td>
                    <td>
                        {{ $Penelitian->anggota_1->nidn }}
                    </td>
                    <td>
                        {{ $Penelitian->anggota_1->perguruan_tinggi->kode }}
                    </td>
                </tr>
                <tr>
                    <td>
                         
                    </td> 
                    <td>
                        {{ $Penelitian->anggota_2->nama }}
                    </td>
                    <td>
                        {{ $Penelitian->anggota_2->nidn }}
                    </td>
                    <td>
                        {{ $Penelitian->anggota_2->perguruan_tinggi->kode }}
                    </td>
                </tr>
                <tr>
                    <td>
                         
                    </td> 
                    <td>
                        {{ $Penelitian->mahasiswa_1->nama }}
                    </td>
                    <td>
                        {{ $Penelitian->mahasiswa_1->nidn }}
                    </td>
                    <td>
                        {{ $Penelitian->mahasiswa_1->perguruan_tinggi->kode }}
                    </td>
                </tr>
                <tr>
                    <td>
                         
                    </td> 
                    <td>
                        {{ $Penelitian->mahasiswa_2->nama }}
                    </td>
                    <td>
                        {{ $Penelitian->mahasiswa_2->nidn }}
                    </td>
                    <td>
                        {{ $Penelitian->mahasiswa_2->perguruan_tinggi->kode }}
                    </td>
                </tr>
            </table>
        </div>

        <br/>
        <br/>
        <br/>

        <div class="uppercase bold text-center  text-size-12pt lh-15">
            Fakultas Ilmu Komputer
            <br/>
            {{ $Penelitian->ketua->perguruan_tinggi->nama }}
            <br/>
            {{ define_year($Penelitian->tanggal) }}
        </div>

        <div class="page_break_only_screen"></div>
        
        <div class="uppercase bold heading_bp" id="halaman_pengesahan">
            HALAMAN PENGESAHAN RISET DASAR
        </div>

        <div class="text-center">
            <img width="100%"
                src="{{ asset('/public/storage/penelitian/').'/'.$Penelitian->lembar_pengesahan }}" alt="">
        </div>

        <div class="page_break_only_screen"></div>

        <div class="uppercase bold heading_bp" id="daftar_isi">
            Daftar Isi
        </div>

        <br/>

        <ol class="toc-list" role="list color-black"> 
            <li>
                <a href="#halaman_pengesahan">
                    <span class="title">
                        Halaman Pengesahan Riset Dasar
                        <span class="leaders" aria-hidden="true"></span>
                    </span> 
                    <span data-href="#halaman_pengesahan" class="page">
                        <span class="visually-hidden">Page&nbsp;</span>
                        5
                    </span>
                </a> 
            </li> 
            <li>
                <a href="#daftar_isi">
                    <span class="title">
                        Daftar Isi
                        <span class="leaders" aria-hidden="true"></span>
                    </span> 
                    <span data-href="#daftar_isi" class="page">
                        <span class="visually-hidden">Page&nbsp;</span>
                        5
                    </span>
                </a> 
            </li>  
            <li>
                <a href="#daftar_tabel">
                    <span class="title">
                        Daftar Tabel
                        <span class="leaders" aria-hidden="true"></span>
                    </span> 
                    <span data-href="#daftar_tabel" class="page">
                        <span class="visually-hidden">Page&nbsp;</span>
                        5
                    </span>
                </a> 
            </li> 
            <li>
                <a href="#daftar_gambar">
                    <span class="title">
                        Daftar Gambar
                        <span class="leaders" aria-hidden="true"></span>
                    </span> 
                    <span data-href="#daftar_gambar" class="page">
                        <span class="visually-hidden">Page&nbsp;</span>
                        5
                    </span>
                </a> 
            </li> 
            <li>
                <a href="#ringkasan">
                    <span class="title">
                        Ringkasan 
                        <span class="leaders" aria-hidden="true"></span>
                    </span> 
                    <span data-href="#ringkasan" class="page">
                        <span class="visually-hidden">Page&nbsp;</span>
                        5
                    </span>
                </a> 
            </li> 
            <li>
                <a href="#latar_belakang">
                    <span class="title">
                        Latar Belakang 
                        <span class="leaders" aria-hidden="true"></span>
                    </span> 
                    <span data-href="#latar_belakang" class="page">
                        <span class="visually-hidden">Page&nbsp;</span>
                        5
                    </span>
                </a> 
            </li> 
            <li>
                <a href="#tinjauan_pustaka">
                    <span class="title">
                        Tinjauan Pustaka 
                        <span class="leaders" aria-hidden="true"></span>
                    </span> 
                    <span data-href="#tinjauan_pustaka" class="page">
                        <span class="visually-hidden">Page&nbsp;</span>
                        5
                    </span>
                </a> 
            </li> 
            <li>
                <a href="#metode_penelitian">
                    <span class="title">
                        Metode Penelitian 
                        <span class="leaders" aria-hidden="true"></span>
                    </span> 
                    <span data-href="#metode_penelitian" class="page">
                        <span class="visually-hidden">Page&nbsp;</span>
                        5
                    </span>
                </a> 
            </li> 
            <li>
                <a href="#jadwal_penelitian">
                    <span class="title">
                        Jadwal Penelitian 
                        <span class="leaders" aria-hidden="true"></span>
                    </span> 
                    <span data-href="#jadwal_penelitian" class="page">
                        <span class="visually-hidden">Page&nbsp;</span>
                        5
                    </span>
                </a> 
            </li> 
            <li>
                <a href="#daftar_pustaka">
                    <span class="title">
                        Daftar Pustaka 
                        <span class="leaders" aria-hidden="true"></span>
                    </span> 
                    <span data-href="#daftar_pustaka" class="page">
                        <span class="visually-hidden">Page&nbsp;</span>
                        5
                    </span>
                </a> 
            </li> 
            <li>
                <a href="#justifikasi_anggaran_penelitian">
                    <span class="title">
                        Lampiran 1. Justifikasi Anggaran Penelitian 
                        <span class="leaders" aria-hidden="true"></span>
                    </span> 
                    <span data-href="#justifikasi_anggaran_penelitian" class="page">
                        <span class="visually-hidden">Page&nbsp;</span>
                        5
                    </span>
                </a> 
            </li> 
            <li>
                <a href="#biodata_ketua_dan_anggota_peneliti">
                    <span class="title">
                        Lampiran 2. Biodata Ketua dan Anggota Tim Pengusul 
                        <span class="leaders" aria-hidden="true"></span>
                    </span> 
                    <span data-href="#biodata_ketua_dan_anggota_peneliti" class="page">
                        <span class="visually-hidden">Page&nbsp;</span>
                        5
                    </span>
                </a> 
            </li> 
            <li>
                <a href="#surat_ketua_dan_anggota_peneliti">
                    <span class="title">
                        Lampiran 3. Surat Ketua dan Anggota Peneliti 
                        <span class="leaders" aria-hidden="true"></span>
                    </span> 
                    <span data-href="#surat_ketua_dan_anggota_peneliti" class="page">
                        <span class="visually-hidden">Page&nbsp;</span>
                        5
                    </span>
                </a> 
            </li> 
            <li>
                <a href="#surat_pernyataan_kesanggupan_peneliti">
                    <span class="title">
                        Lampiran 4. Surat Pernyataan Kesanggupan Peneliti dalam
                        Pelaporan Keguatan Riset dan PJK Keuangan
                        (70% dan 100%) 
                        <span class="leaders" aria-hidden="true"></span>
                    </span> 
                    <span data-href="#surat_pernyataan_kesanggupan_peneliti" class="page">
                        <span class="visually-hidden">Page&nbsp;</span>
                        5
                    </span>
                </a> 
            </li> 
            <li>
                <a href="#screenshot_update_sister">
                    <span class="title">
                        Lampiran 5. Screenshot Update SISTER
                        <span class="leaders" aria-hidden="true"></span>
                    </span> 
                    <span data-href="#screenshot_update_sister" class="page">
                        <span class="visually-hidden">Page&nbsp;</span>
                        5
                    </span>
                </a> 
            </li> 
            <li>
                <a href="#screenshot_update_sinta">
                    <span class="title">
                        Lampiran 6. Screenshot Update SINTA
                        <span class="leaders" aria-hidden="true"></span>
                    </span> 
                    <span data-href="#screenshot_update_sinta" class="page">
                        <span class="visually-hidden">Page&nbsp;</span>
                        5
                    </span>
                </a> 
            </li> 
            <!--
            <li>
                <a href="#Final-Thoughts">
                    <span class="title">Final Thoughts<span class="leaders" aria-hidden="true"></span></span>
                    <span data-href="#Final-Thoughts" class="page"><span class="visually-hidden">Page&nbsp;</span>96</span>
                </a>
                <ol role="list">

                    <li>
                        <a href="#Final-Thoughts-Download-the-Extras">
                            <span class="title">Download the Extras<span class="leaders" aria-hidden="true"></span></span> <span
                                data-href="#Final-Thoughts-Download-the-Extras" class="page"><span
                                    class="visually-hidden">Page&nbsp;</span>96</span>
                        </a>
                    </li>

                    <li>
                        <a href="#Final-Thoughts-Support-the-Author">
                            <span class="title">Support the Author<span class="leaders" aria-hidden="true"></span></span> <span
                                data-href="#Final-Thoughts-Support-the-Author" class="page"><span
                                    class="visually-hidden">Page&nbsp;</span>96</span>
                        </a>
                    </li>

                    <li>
                        <a href="#Final-Thoughts-Help-and-Support">
                            <span class="title">Help and Support<span class="leaders" aria-hidden="true"></span></span> <span
                                data-href="#Final-Thoughts-Help-and-Support" class="page"><span
                                    class="visually-hidden">Page&nbsp;</span>97</span>
                        </a>
                    </li>

                    <li>
                        <a href="#Final-Thoughts-Follow-the-Author">
                            <span class="title">Follow the Author<span class="leaders" aria-hidden="true"></span></span> <span
                                data-href="#Final-Thoughts-Follow-the-Author" class="page"><span
                                    class="visually-hidden">Page&nbsp;</span>102</span>
                        </a>
                    </li>

                </ol>
            </li>
            -->
        </ol>



        <div class="page_break_only_screen"></div>
        
        <div class="uppercase bold heading_bp" id="daftar_gambar">
            Daftar Gambar
        </div>

        <br/>

        <ol class="toc-list" role="list color-black"> 
            <li>
                <a href="#halaman_pengesahan">
                    <span class="title">
                        Halaman Pengesahan Riset Dasar
                        <span class="leaders" aria-hidden="true"></span>
                    </span> 
                    <span data-href="#halaman_pengesahan" class="page">
                        <span class="visually-hidden">Page&nbsp;</span>
                        5
                    </span>
                </a> 
            </li> 
            <li>
                <a href="#daftar_isi">
                    <span class="title">
                        Daftar Isi
                        <span class="leaders" aria-hidden="true"></span>
                    </span> 
                    <span data-href="#daftar_isi" class="page">
                        <span class="visually-hidden">Page&nbsp;</span>
                        5
                    </span>
                </a> 
            </li> 
        </ol>

        <div class="page_break_only_screen"></div>

        <div class="uppercase bold heading_bp" id="daftar_tabel">
            Daftar Tabel
        </div>
        
        <br/>

        <ol class="toc-list" role="list color-black"> 
            <li>
                <a href="#halaman_pengesahan">
                    <span class="title">
                        Halaman Pengesahan Riset Dasar
                        <span class="leaders" aria-hidden="true"></span>
                    </span> 
                    <span data-href="#halaman_pengesahan" class="page">
                        <span class="visually-hidden">Page&nbsp;</span>
                        5
                    </span>
                </a> 
            </li> 
            <li>
                <a href="#daftar_isi">
                    <span class="title">
                        Daftar Isi
                        <span class="leaders" aria-hidden="true"></span>
                    </span> 
                    <span data-href="#daftar_isi" class="page">
                        <span class="visually-hidden">Page&nbsp;</span>
                        5
                    </span>
                </a> 
            </li> 
        </ol>

        <div class="page_break_only_screen"></div>

        <div class="uppercase bold heading_bp" id="ringkasan">
            Ringkasan
        </div>
        {!! define_paragraf($Penelitian->ringkasan_latar_belakang, 'ringkasan_latar_belakang', 83) !!}
        {!! define_paragraf($Penelitian->ringkasan_tujuan, 'ringkasan_tujuan', 83) !!}
        {!! define_paragraf($Penelitian->ringkasan_tahapan_metode, 'ringkasan_tahapan_metode', 83) !!}
        {!! define_paragraf($Penelitian->ringkasan_target_luaran, 'ringkasan_target_luaran', 83) !!}
        {!! define_paragraf($Penelitian->ringkasan_capaian_iku, 'ringkasan_capaian_iku', 83) !!}
        {!! define_paragraf($Penelitian->ringkasan_capaian_tkt, 'ringkasan_capaian_tkt', 83) !!}

        <div class="uppercase bold heading-1" id="latar_belakang">
            Latar Belakang
        </div>
        {!! define_paragraf($Penelitian->latar_belakang_umum, 'latar_belakang_umum', 83) !!}
        {!! define_paragraf($Penelitian->latar_belakang_permasalahan, 'latar_belakang_permasalahan', 83) !!}
        {!! define_paragraf($Penelitian->latar_belakang_tujuan, 'latar_belakang_tujuan', 83) !!}
        {!! define_paragraf($Penelitian->latar_belakang_urgensi, 'latar_belakang_urgensi', 83) !!}
        {!! define_paragraf($Penelitian->latar_belakang_terkait_dengan_skema, 'latar_belakang_terkait_dengan_skema', 83) !!}

        <div class="uppercase bold heading-1" id="tinjauan_pustaka">
            TINJAUAN PUSTAKA
        </div>
        {!! define_paragraf($Penelitian->tinjauan_pustaka_state_of_the_art, 'tinjauan_pustaka_state_of_the_art', 83) !!}
        {!! define_paragraf($Penelitian->tinjauan_pustaka_sebelum, 'tinjauan_pustaka_sebelum', 83) !!}
        {!! define_paragraf($Penelitian->tinjauan_pustaka_setelah, 'tinjauan_pustaka_setelah', 83) !!}
        {!! define_paragraf($Penelitian->tinjauan_pustaka_umum, 'tinjauan_pustaka_umum', 83) !!}

        <div class="uppercase bold heading-1" id="metode_penelitian">
            METODE Penelitian
        </div>
        {!! define_paragraf($Penelitian->metode_uraian, 'latar_belakang_umum', 83) !!}
        {!! define_paragraf($Penelitian->metode_gambar, 'latar_belakang_umum', 83) !!}
        {!! define_paragraf($Penelitian->metode_detail, 'latar_belakang_umum', 83) !!}
        {!! define_paragraf($Penelitian->metode_luaran, 'latar_belakang_umum', 83) !!}
        {!! define_paragraf($Penelitian->metode_capaian, 'latar_belakang_umum', 83) !!}
        {!! define_paragraf($Penelitian->metode_tugas_pengusul, 'latar_belakang_umum', 83) !!}

        <div class="uppercase bold heading-1" id="jadwal_penelitian">
            Jadwal Penelitian
        </div>

        <div class="page_break_only_screen"></div>

        <div class="uppercase bold heading_bp heading-1" id="daftar_pustaka">
            Daftar Pustaka
        </div>

        <div class="page_break_only_screen"></div>

        <div class="uppercase bold heading_bp" id="justifikasi_anggaran_penelitian">
            LAMPIRAN 1. JUSTIFIKASI ANGGARAN PENELITIAN
        </div>
 
        {!! define_tabel_anggaran($Penelitian->anggaran_penelitian) !!}

        <div class="page_break_only_screen"></div>

        <div class="uppercase bold heading_bp" id="biodata_ketua_dan_anggota_peneliti">
            LAMPIRAN 2. BIODATA KETUA DAN ANGGOTA TIM PENGUSUL
        </div> 
        <div class="">
            {!! define_bp($Penelitian) !!}
        </div> 

        <div class="uppercase bold heading_bp" id="surat_ketua_dan_anggota_peneliti">
            LAMPIRAN 4. SURAT KETUA DAN ANGGOTA PENELITI
        </div>  

        <div class="">
            {!! define_sp($Penelitian) !!}
        </div>

        <div class="uppercase bold heading_bp" id="surat_pernyataan_kesanggupan_peneliti">
            LAMPIRAN 5. SURAT PERNYATAAN KESANGGUPAN PENELITI DALAM PELAPORAN KEGIATAN RISET DAN PJK KEUANGAN (70% dan 100%)
        </div>
        
        <br/>

        <div class="">
            {!! define_spk($Penelitian) !!}
        </div>

        <div class="uppercase bold heading_bp" id="screenshot_update_sister">
            LAMPIRAN 7. SCREENSHOT UPDATE SISTER
        </div>

        <br/>

        <div class="text-center">
            <img width="100%"
                src="{{ asset('/public/storage/peneliti/').'/'.$Penelitian->ketua->screenshot_sister }}" alt="">
        </div>
        

        <div class="page_break_only_screen"></div>

        <div class="uppercase bold heading_bp" id="screenshot_update_sinta">
            LAMPIRAN 7. SCREENSHOT UPDATE SINTA
        </div>
        <br/>
        <div class="text-center">
            <img width="100%"
                src="{{ asset('/public/storage/peneliti/').'/'.$Penelitian->ketua->screenshot_sinta }}" alt="">
        </div>

        <br/>

    </section>
 
  
@endsection
