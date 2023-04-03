@extends('template.'.$template.'.a4_portrait')

@section('title', $panel_name)

@section('content')  

     
    <section class="container border-container" >  
        <div class="uppercase bold heading-1" id="latar_belakang">
            Latar Belakang
        </div>
        {!! define_paragraf($Penelitian->latar_belakang_umum, 'latar_belakang_umum', 83) !!}
        {!! define_paragraf($Penelitian->latar_belakang_permasalahan, 'latar_belakang_permasalahan', 83) !!}
        {!! define_paragraf($Penelitian->latar_belakang_tujuan, 'latar_belakang_tujuan', 83) !!}
        {!! define_paragraf($Penelitian->latar_belakang_urgensi, 'latar_belakang_urgensi', 83) !!}
        {!! define_paragraf($Penelitian->latar_belakang_terkait_dengan_skema, 'latar_belakang_terkait_dengan_skema', 83) !!}
 

    </section>
 
  
@endsection
