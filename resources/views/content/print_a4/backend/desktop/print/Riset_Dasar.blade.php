@extends('template.'.$template.'.a4_portrait')

@section('title', $panel_name)

@section('content')  

    
    <section class="container "  id="content"> 
        
        @include($view.'_subbab_review_cover')
        <div class="page_break_only_screen"></div>
        @include($view.'_subbab_review_halaman_pengesahan')
        <div class="page_break_only_screen"></div>
        @include($view.'_subbab_review_daftar_isi')
        <div class="page_break_only_screen"></div>
        @include($view.'_subbab_review_daftar_gambar') 
        <div class="page_break_only_screen"></div>
        @include($view.'_subbab_review_daftar_tabel') 
        <div class="page_break_only_screen"></div>
        @include($view.'_subbab_review_ringkasan') 

        @include($view.'_subbab_review_latar_belakang') 

        @include($view.'_subbab_review_tinjauan_pustaka') 

        @include($view.'_subbab_review_metode_penelitian') 
 
        @include($view.'_subbab_review_jadwal_penelitian') 
        <div class="page_break_only_screen"></div>
        @include($view.'_subbab_review_daftar_pustaka') 
        <div class="page_break_only_screen"></div>
        @include($view.'_subbab_review_justifikasi_anggaran_penelitian') 
        <div class="page_break_only_screen"></div>
        @include($view.'_subbab_review_biodata_ketua_dan_anggota_peneliti') 
        <div class="page_break_only_screen"></div>
        @include($view.'_subbab_review_surat_ketua_dan_anggota_peneliti') 
        <div class="page_break_only_screen"></div>
        @include($view.'_subbab_review_surat_pernyataan_kesanggupan_peneliti') 
        <div class="page_break_only_screen"></div>
        @include($view.'_subbab_review_screenshot_update_sister') 
        <div class="page_break_only_screen"></div>
        @include($view.'_subbab_review_screenshot_update_sinta') 
   
    </section>
 
  
@endsection
