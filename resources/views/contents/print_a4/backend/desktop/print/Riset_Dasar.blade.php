@extends('template.'.$template.'.a4_portrait')

@section('title', $panel_name)

@section('content')  

    
    <section class="container "  id="content"> 
        @php $clear_helper = 1; @endphp

        @include($pre_view.'subbab_review_cover')
        {!! define_page_break_screen() !!} 
        {!! define_page_break_print() !!}
        @include($pre_view.'subbab_review_halaman_pengesahan')
        {!! define_page_break_screen() !!}
        {!! define_page_break_print() !!}
        @include($pre_view.'subbab_review_daftar_isi')
        
        {!! define_page_break_screen() !!}
        {!! define_page_break_print() !!}
        @include($pre_view.'subbab_review_ringkasan') 

        {!! define_page_break_screen() !!}
        {!! define_page_break_print() !!}
        @include($pre_view.'subbab_review_latar_belakang') 

        {!! define_page_break_screen() !!}
        {!! define_page_break_print() !!}
        @include($pre_view.'subbab_review_tinjauan_pustaka') 

        {!! define_page_break_screen() !!}
        {!! define_page_break_print() !!}
        @include($pre_view.'subbab_review_metode_penelitian') 
 
        {!! define_page_break_screen() !!}
        {!! define_page_break_print() !!}
        @include($pre_view.'subbab_review_jadwal_penelitian') 
        
        {!! define_page_break_screen() !!}
        {!! define_page_break_print() !!}
        @include($pre_view.'subbab_review_daftar_pustaka') 
        
        {!! define_page_break_screen() !!}
        {!! define_page_break_print() !!}
        @php $counter_lampiran = 1; @endphp
        <div class="uppercase bold heading_bp" id="justifikasi_anggaran_penelitian">
            <a href="#daftar_isi" class="unset">
                LAMPIRAN {{ $counter_lampiran }}. JUSTIFIKASI ANGGARAN PENELITIAN
            </a>
        </div>
        @include($pre_view.'subbab_review_justifikasi_anggaran_penelitian') 
        
        {!! define_page_break_screen() !!}
        {!! define_page_break_print() !!}
        @php $counter_lampiran += 1; @endphp
        <div class="uppercase bold heading-1" id="biodata_ketua_dan_anggota_peneliti">
            <a href="#daftar_isi" class="unset">
                LAMPIRAN {{ $counter_lampiran }}. BIODATA KETUA DAN ANGGOTA TIM PENGUSUL
            </a>
        </div> 

        @include($pre_view.'subbab_review_biodata_ketua_dan_anggota_peneliti') 

        {!! define_page_break_screen() !!}
        {!! define_page_break_print() !!}
        @php $counter_lampiran += 1; @endphp
        <div class="uppercase bold heading-1" id="surat_ketua_dan_anggota_peneliti">
            <a href="#daftar_isi" class="unset">
                LAMPIRAN {{ $counter_lampiran }}. SURAT KETUA DAN ANGGOTA PENELITI
            </a>
        </div>  

        @include($pre_view.'subbab_review_surat_ketua_dan_anggota_peneliti') 

        {!! define_page_break_screen() !!}
        {!! define_page_break_print() !!}
        @php $counter_lampiran += 1; @endphp
        <div class="uppercase bold heading-1" id="surat_pernyataan_kesanggupan_peneliti">
            <a href="#daftar_isi" class="unset">
                LAMPIRAN {{ $counter_lampiran }}. SURAT PERNYATAAN KESANGGUPAN PENELITI DALAM PELAPORAN KEGIATAN RISET DAN PJK KEUANGAN (70% dan 100%)
            </a>
        </div>

        <br/>
        @include($pre_view.'subbab_review_surat_pernyataan_kesanggupan_peneliti') 

        {!! define_page_break_screen() !!}
        {!! define_page_break_print() !!}
        @php $counter_lampiran += 1; @endphp
        <div class="uppercase bold heading-1" id="screenshot_update_sister">
            <a href="#daftar_isi" class="unset">
                LAMPIRAN {{ $counter_lampiran }}. SCREENSHOT UPDATE SISTER
            </a>
        </div> 
        <br/> 
        @include($pre_view.'subbab_review_screenshot_update_sister') 

        {!! define_page_break_screen() !!}
        {!! define_page_break_print() !!}
        @php $counter_lampiran += 1; @endphp

        <div class="uppercase bold heading-1" id="screenshot_update_sinta"> 
            <a href="#daftar_isi" class="unset">
                LAMPIRAN {{ $counter_lampiran }}. SCREENSHOT UPDATE SINTA
            </a>
        </div> 
        <br/>
        @include($pre_view.'subbab_review_screenshot_update_sinta') 
   
    </section>
 
  
@endsection
