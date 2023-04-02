@extends('template.'.$template.'.datatable')

@section('title', $panel_name)

@section('content')    
    @include('content.include.data_menu_penelitian')
    @include('content.include.sub_menu_penelitian')
@endsection
