@extends('template.'.$template.'.a4_portrait')

@section('title', $panel_name)

@section('content')  
 
    <section class="container border-container" >  
        @include($view.$Review)  
    </section>
    
@endsection
