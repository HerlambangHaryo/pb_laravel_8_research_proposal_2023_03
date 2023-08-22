<div class="uppercase bold heading-1" id="daftar_isi">
    <a href="#daftar_isi" class="unset">
        Daftar Isi
    </a>
</div> 

<ol class="toc-list" role="list color-black"> 
    <li>
        <a href="#halaman_pengesahan" >
            <span class="title">
                Halaman Pengesahan Riset Dasar
                <span class="leaders" aria-hidden="true"></span>
            </span> 
            <span data-href="#halaman_pengesahan" class="page">
                <span class="visually-hidden">Page&nbsp;</span>
                {{ $Penelitian->nomor_halaman_halaman_pengesahan }}
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
                {{ $Penelitian->nomor_halaman_daftar_isi }}
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
                {{ $Penelitian->nomor_halaman_ringkasan }}
            </span>
        </a> 
    </li> 
    <li>
        <a href="#latar_belakang">
            <span class="title">
                Bab I. Latar Belakang 
                <span class="leaders" aria-hidden="true"></span>
            </span> 
            <span data-href="#latar_belakang" class="page">
                <span class="visually-hidden">Page&nbsp;</span>
                {{ $Penelitian->nomor_halaman_latar_belakang }}
            </span>
        </a> 
        
        <ol role="list"> 
            <li>
                <a href="#latar_belakang_umum" class="unset">
                    <span class="title">
                        1.1. Latar Belakang Masalah
                        <span class="leaders" aria-hidden="true"></span>
                    </span> 
                    <span data-href="#latar_belakang_umum" class="page">
                        <span class="visually-hidden">Page&nbsp;</span>
                        {{ $Penelitian->nomor_halaman_latar_belakang_masalah }}
                    </span>
                </a>
            </li>
            <li>
                <a href="#latar_belakang_rumusan" class="unset">
                    <span class="title">
                        1.2. Rumusan Masalah
                        <span class="leaders" aria-hidden="true"></span>
                    </span> 
                    <span data-href="#latar_belakang_rumusan" class="page">
                        <span class="visually-hidden">Page&nbsp;</span>
                        {{ $Penelitian->nomor_halaman_rumusan_masalah }}
                    </span>
                </a>
            </li>
            <li>
                <a href="#latar_belakang_tujuan" class="unset">
                    <span class="title">
                        1.3. Tujuan Penelitian
                        <span class="leaders" aria-hidden="true"></span>
                    </span> 
                    <span data-href="#latar_belakang_tujuan" class="page">
                        <span class="visually-hidden">Page&nbsp;</span>
                        {{ $Penelitian->nomor_halaman_tujuan_penelitian }}
                    </span>
                </a>
            </li>
            <li>
                <a href="#latar_belakang_target_luaran" class="unset">
                    <span class="title">
                        1.4. Target Luaran
                        <span class="leaders" aria-hidden="true"></span>
                    </span> 
                    <span data-href="#latar_belakang_target_luaran" class="page">
                        <span class="visually-hidden">Page&nbsp;</span>
                        {{ $Penelitian->nomor_halaman_target_luaran }}
                    </span>
                </a>
            </li>
 

        </ol>
    </li> 
    <li>
        <a href="#tinjauan_pustaka">
            <span class="title">
                BAB II. Tinjauan Pustaka 
                <span class="leaders" aria-hidden="true"></span>
            </span> 
            <span data-href="#tinjauan_pustaka" class="page">
                <span class="visually-hidden">Page&nbsp;</span>
                {{ $Penelitian->nomor_halaman_tinjauan_pustaka }}
            </span>
        </a> 
        <ol role="list"> 
            <li>
                <a href="#tinjauan_pustaka_penelitian_terdahulu" class="unset">
                    <span class="title">
                        2.1. Penelitian Terdahulu
                        <span class="leaders" aria-hidden="true"></span>
                    </span> 
                    <span data-href="#tinjauan_pustaka_penelitian_terdahulu" class="page">
                        <span class="visually-hidden">Page&nbsp;</span>
                        {{ $Penelitian->nomor_halaman_penelitian_terdahulu }}
                    </span>
                </a>
                <ol role="list">
                    @php
                        $counter_penelitian_terdahulu = 0; 
                    @endphp
                    @foreach($Penelitian->penelitian_terdahulu as $row)  
                        @php $counter_penelitian_terdahulu += 1;  @endphp
                        <li>
                            <a href="#penelitian_terdahulu_{{ str_replace(' ', '_', $row->subjek )}}" class="unset">
                                <span class="title">
                                    2.1.{{ $loop->iteration }}. {{ $row->subjek }}
                                    <span class="leaders" aria-hidden="true"></span>
                                </span> 
                                <span data-href="#penelitian_terdahulu_{{ str_replace(' ', '_', $row->subjek )}}" class="page">
                                    <span class="visually-hidden">Page&nbsp;</span>
                                    {{ $row->nomor_halaman }}
                                </span>
                            </a>
                        </li>
                    @endforeach
                </ol>
            </li>
            <li>
                <a href="#tinjauan_pustaka_roadmap_penelitian" class="unset">
                    <span class="title">
                        2.2. Roadmap Penelitian
                        <span class="leaders" aria-hidden="true"></span>
                    </span> 
                    <span data-href="#tinjauan_pustaka_roadmap_penelitian" class="page">
                        <span class="visually-hidden">Page&nbsp;</span>
                        {{ $Penelitian->nomor_halaman_roadmap_penelitian }}
                    </span>
                </a>
            </li>
            <li>
                <a href="#tinjauan_pustaka_dasar_teori" class="unset">
                    <span class="title">
                        2.3. Dasar Teori
                        <span class="leaders" aria-hidden="true"></span>
                    </span> 
                    <span data-href="#tinjauan_pustaka_dasar_teori" class="page">
                        <span class="visually-hidden">Page&nbsp;</span>
                        {{ $Penelitian->nomor_halaman_dasar_teori }}
                    </span>
                </a>
                <ol role="list">
                    @php
                        $counter_dasar_teori = 0; 
                    @endphp
                    @foreach($Penelitian->dasar_teori as $row)  
                        @php $counter_dasar_teori += 1;  @endphp
                        <li>
                            <a href="#dasar_teori_{{ str_replace(' ', '_', $row->teori )}}" class="unset">
                                <span class="title">
                                    2.3.{{ $loop->iteration }}. {{ $row->teori }}
                                    <span class="leaders" aria-hidden="true"></span>
                                </span> 
                                <span data-href="#dasar_teori_{{ str_replace(' ', '_', $row->teori )}}" class="page">
                                    <span class="visually-hidden">Page&nbsp;</span>
                                    {{ $row->nomor_halaman }}
                                </span>
                            </a>
                        </li>
                    @endforeach
                </ol>
            </li>
        </ol>
    </li> 
    <li>
        <a href="#metode_penelitian" class="unset">
            <span class="title">
                BAB III. Metode Penelitian 
                <span class="leaders" aria-hidden="true"></span>
            </span> 
            <span data-href="#metode_penelitian" class="page">
                <span class="visually-hidden">Page&nbsp;</span>
                {{ $Penelitian->nomor_halaman_metode_penelitian }}
            </span>
        </a> 

        @php
            $counter_metode = 0; 
        @endphp

        <ol role="list">
            @foreach($Penelitian->jadwal_penelitian as $row) 
            
                @php $counter_metode += 1;  @endphp
                <li>
                    <a href="#metode_penelitian_{{ str_replace(' ', '_', $row->kegiatan )}}" class="unset">
                        <span class="title">
                            3.{{ $loop->iteration }}. {{ $row->kegiatan }}
                            <span class="leaders" aria-hidden="true"></span>
                        </span> 
                        <span data-href="#metode_penelitian_{{ str_replace(' ', '_', $row->kegiatan )}}" class="page">
                            <span class="visually-hidden">Page&nbsp;</span>
                            {{ $row->nomor_halaman }}
                        </span>
                    </a>
                </li>
            @endforeach
                @php $counter_metode += 1;  @endphp
                <li>
                    <a href="#metode_penelitian_Pembagian_Tugas_Tim_Pengusul" class="unset">
                        <span class="title">
                            3.{{ $counter_metode }}. Pembagian Tugas Tim Pengusul 
                            <span class="leaders" aria-hidden="true"></span>
                        </span> 
                        <span data-href="#metode_penelitian_Pembagian_Tugas_Tim_Pengusul" class="page">
                            <span class="visually-hidden">Page&nbsp;</span>
                            {{ $Penelitian->nomor_halaman_pembagian_tugas_tim_pengusul }}
                        </span>
                    </a>
                </li>
        </ol>
    </li> 
    <li>
        <a href="#jadwal_penelitian" class="unset">
            <span class="title">
                BAB IV. Jadwal Penelitian 
                <span class="leaders" aria-hidden="true"></span>
            </span> 
            <span data-href="#jadwal_penelitian" class="page">
                <span class="visually-hidden">Page&nbsp;</span>
                {{ $Penelitian->nomor_halaman_jadwal_penelitian }}
            </span>
        </a> 
    </li> 
    <li>
        <a href="#daftar_pustaka" class="unset">
            <span class="title">
                Daftar Pustaka 
                <span class="leaders" aria-hidden="true"></span>
            </span> 
            <span data-href="#daftar_pustaka" class="page">
                <span class="visually-hidden">Page&nbsp;</span>
                {{ $Penelitian->nomor_halaman_daftar_pustaka }}
            </span>
        </a> 
    </li> 
    <li>
        @php $counter_lampiran = 1; @endphp
        <a href="#justifikasi_anggaran_penelitian" class="unset">
            <span class="title">
                Lampiran {{ $counter_lampiran }}. Justifikasi Anggaran Penelitian 
                <span class="leaders" aria-hidden="true"></span>
            </span> 
            <span data-href="#justifikasi_anggaran_penelitian" class="page">
                <span class="visually-hidden">Page&nbsp;</span>
                {{ $Penelitian->nomor_halaman_lampiran_1 }}
            </span>
        </a> 
    </li> 
    <li>
        @php $counter_lampiran += 1; @endphp
        <a href="#biodata_ketua_dan_anggota_peneliti" class="unset">
            <span class="title">
                Lampiran {{ $counter_lampiran }}. Biodata Ketua dan Anggota Tim Pengusul 
                <span class="leaders" aria-hidden="true"></span>
            </span> 
            <span data-href="#biodata_ketua_dan_anggota_peneliti" class="page">
                <span class="visually-hidden">Page&nbsp;</span>
                {{ $Penelitian->nomor_halaman_lampiran_2 }}
            </span>
        </a> 
    </li> 
    <li>
        @php $counter_lampiran += 1; @endphp
        <a href="#surat_ketua_dan_anggota_peneliti" class="unset">
            <span class="title">
                Lampiran {{ $counter_lampiran }}. Surat Ketua dan Anggota Peneliti 
                <span class="leaders" aria-hidden="true"></span>
            </span> 
            <span data-href="#surat_ketua_dan_anggota_peneliti" class="page">
                <span class="visually-hidden">Page&nbsp;</span>
                {{ $Penelitian->nomor_halaman_lampiran_3 }}
            </span>
        </a> 
    </li> 
    <li>
        @php $counter_lampiran += 1; @endphp
        <a href="#surat_pernyataan_kesanggupan_peneliti" class="unset">
            <span class="title">
                Lampiran {{ $counter_lampiran }}. Surat Pernyataan Kesanggupan Peneliti dalam
                Pelaporan Kegiatan Riset dan PJK Keuangan
                (70% dan 100%) 
                <span class="leaders" aria-hidden="true"></span>
            </span> 
            <span data-href="#surat_pernyataan_kesanggupan_peneliti" class="page">
                <span class="visually-hidden">Page&nbsp;</span>
                {{ $Penelitian->nomor_halaman_lampiran_4 }}
            </span>
        </a> 
    </li> 
    <li>
        @php $counter_lampiran += 1; @endphp
        <a href="#screenshot_update_sister" class="unset">
            <span class="title">
                Lampiran {{ $counter_lampiran }}. Screenshot Update SISTER
                <span class="leaders" aria-hidden="true"></span>
            </span> 
            <span data-href="#screenshot_update_sister" class="page">
                <span class="visually-hidden">Page&nbsp;</span>
                {{ $Penelitian->nomor_halaman_lampiran_5 }}
            </span>
        </a> 
    </li> 
    <li>
        @php $counter_lampiran += 1; @endphp
        <a href="#screenshot_update_sinta"  class="unset">
            <span class="title">
                Lampiran {{ $counter_lampiran }}. Screenshot Update SINTA
                <span class="leaders" aria-hidden="true"></span>
            </span> 
            <span data-href="#screenshot_update_sinta" class="page">
                <span class="visually-hidden">Page&nbsp;</span>
                {{ $Penelitian->nomor_halaman_lampiran_6 }}
            </span>
        </a> 
    </li>  
</ol>