@extends('template.'.$template.'.a4_portrait')

@section('title', $panel_name)

@section('content')  

     
    <section class="container  " > 
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
        
        <div class="uppercase bold heading_bp">
            HALAMAN PENGESAHAN RISET DASAR
        </div>

        <div class="page_break_only_screen"></div>

        <div class="uppercase bold heading_bp">
            Daftar Isi
        </div>

        <div class="page_break_only_screen"></div>
        
        <div class="uppercase bold heading_bp">
            Daftar Gambar
        </div>

        <div class="page_break_only_screen"></div>

        <div class="uppercase bold heading_bp">
            Daftar Tabel
        </div>

        <div class="page_break_only_screen"></div>

        <div class="uppercase bold heading_bp">
            Ringkasan
        </div>
        <div class="uppercase bold">
            Latar Belakang
        </div>
        <div class="uppercase bold">
            TINJAUAN PUSTAKA
        </div>
        <div class="uppercase bold">
            METODE
        </div>
        <div class="uppercase bold">
            Jadwal
        </div>

        <div class="page_break_only_screen"></div>

        <div class="uppercase bold heading_bp">
            Daftar Pustaka
        </div>

        <div class="page_break_only_screen"></div>

        <div class="uppercase bold heading_bp">
            LAMPIRAN 1. JUSTIFIKASI ANGGARAN PENELITIAN
        </div>

        <div class="page_break_only_screen"></div>

        <div class="uppercase bold heading_bp">
            LAMPIRAN 2. BIODATA KETUA DAN ANGGOTA TIM PENGUSUL
        </div> 
        <div class="">
            {!! define_bp($Penelitian) !!}
        </div> 

        <div class="uppercase bold heading_bp">
            LAMPIRAN 4. SURAT KETUA DAN ANGGOTA PENELITI
        </div>  

        <div class="">
            {!! define_sp($Penelitian) !!}
        </div>

        <div class="uppercase bold heading_bp">
            LAMPIRAN 5. SURAT PERNYATAAN KESANGGUPAN PENELITI DALAM PELAPORAN KEGIATAN RISET DAN PJK KEUANGAN (70% dan 100%)
        </div>
        
        <br/>

        <div class="">
            {!! define_spk($Penelitian) !!}
        </div>

        <div class="uppercase bold heading_bp">
            LAMPIRAN 7. SCREENSHOT UPDATE SISTER
        </div>

        <br/>

        <div class="text-center">
            <img width="100%"
                src="{{ asset('/public/storage/peneliti/').'/'.$Penelitian->ketua->screenshot_sister }}" alt="">
        </div>
        

        <div class="page_break_only_screen"></div>

        <div class="uppercase bold heading_bp">
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
