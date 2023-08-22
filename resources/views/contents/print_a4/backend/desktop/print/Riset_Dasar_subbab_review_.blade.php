@extends('template.'.$template.'.a4_portrait')

@section('title', $panel_name)

@section('content')  
 
    <section class="container " >  
        @php $clear_helper = 0; @endphp
        @include($pre_view.'subbab_review_'.$Review)  
    </section>
    
@endsection
