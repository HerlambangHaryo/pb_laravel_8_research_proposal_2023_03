@extends('template.'.$template.'.a4_portrait')

@section('title', $panel_name)

@section('content')  

    
    <section class="container "  id="content"> 
        @php $clear_helper = 1; @endphp
 
        @include($pre_view.'subbab_review_halaman_pengesahan')
        <div class="page_break_only_screen"></div>
        @include($pre_view.'subbab_review_daftar_isi')
        
        <div class="page_break_only_screen"></div>
        @include($pre_view.'subbab_review_ringkasan') 
 
   
    </section>
 
  
@endsection
