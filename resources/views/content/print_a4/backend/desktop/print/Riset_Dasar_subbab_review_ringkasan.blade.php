@extends('template.'.$template.'.a4_portrait')

@section('title', $panel_name)

@section('content')  
 
    <section class="container border-container" >  
        <div class="uppercase bold heading_bp" id="ringkasan">
            Ringkasan
        </div>
        {!! define_paragraf($Penelitian->ringkasan_latar_belakang, 'ringkasan_latar_belakang', 83) !!}
        {!! define_paragraf($Penelitian->ringkasan_tujuan, 'ringkasan_tujuan', 83) !!}
        {!! define_paragraf($Penelitian->ringkasan_tahapan_metode, 'ringkasan_tahapan_metode', 83) !!}
        {!! define_paragraf($Penelitian->ringkasan_target_luaran, 'ringkasan_target_luaran', 83) !!}
        {!! define_paragraf($Penelitian->ringkasan_capaian_iku, 'ringkasan_capaian_iku', 83) !!}
        {!! define_paragraf($Penelitian->ringkasan_capaian_tkt, 'ringkasan_capaian_tkt', 83) !!}
 
    </section>
  
@endsection
