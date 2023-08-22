@extends('template.'.$template.'.a4_portrait')

@section('title', $panel_name)

@section('content')  

    
    <section class="container "  id="content"> 
        @php $clear_helper = 1; @endphp 
        
        @include($view.'_subbab_review_latar_belakang') 

        <div class="page_break_only_screen"></div>
        @include($view.'_subbab_review_tinjauan_pustaka') 

        <div class="page_break_only_screen"></div>
        @include($view.'_subbab_review_metode_penelitian') 
 
        <div class="page_break_only_screen"></div>
        @include($view.'_subbab_review_jadwal_penelitian') 
        
        <div class="page_break_only_screen"></div>
        @include($view.'_subbab_review_daftar_pustaka') 
        
        <div class="page_break_only_screen"></div>
        @php $counter_lampiran = 1; @endphp
        @include($view.'_subbab_review_justifikasi_anggaran_penelitian') 
        
        <div class="page_break_only_screen"></div>
        @php $counter_lampiran += 1; @endphp
        @include($view.'_subbab_review_biodata_ketua_dan_anggota_peneliti') 

        <div class="page_break_only_screen"></div>
        @php $counter_lampiran += 1; @endphp
        @include($view.'_subbab_review_surat_ketua_dan_anggota_peneliti') 

        <div class="page_break_only_screen"></div>
        @php $counter_lampiran += 1; @endphp
        @include($view.'_subbab_review_surat_pernyataan_kesanggupan_peneliti') 

        <div class="page_break_only_screen"></div>
        @php $counter_lampiran += 1; @endphp
        @include($view.'_subbab_review_screenshot_update_sister') 

        <div class="page_break_only_screen"></div>
        @php $counter_lampiran += 1; @endphp
        @include($view.'_subbab_review_screenshot_update_sinta') 
   
    </section>
 
  
@endsection
