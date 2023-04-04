@extends('template.'.$template.'.datatable')

@section('title', $panel_name)

@section('content')    
    @include('content.include.data_menu_penelitian')
    @include('content.include.sub_menu_penelitian')

     
    <div id="datatable" class="mb-5">
        <div class="card">
            <div class="card-header">
                <div class="row mb-4">
                    <div class="col-6">
                        <h5>    
                            Data - {{ $panel_name }} 
                        </h5>   
                    </div>
                    <div class="col-6 text-end">   
                        <x-studio_v30.button-create content="{{ $content }}" />
                        <a href="{{ route('Print.Print_subbab_review', 
                                [
                                    'Print' => $Penelitian->id,
                                    'Review' => 'jadwal_penelitian'
                                ]
                                ) }}" 
                            class="btn btn-sm btn-secondary"
                            target="_blank">
                            <i class="fas fa-print"></i>
                            Print subbab review
                        </a> 
                    </div>
                </div>
            </div>
            <div class="card-body pb-4">      
                <div>
                    <table id="datatableDefault" class="table  ">
                        <thead class=" ">
                            <tr>               
                                <x-html.th-content-width title="Urutan" width="5%" />
                                <x-html.th-content title="Judul" />  
                                <x-html.th-content title="Bulan Pengerjaan" /> 
                                <x-html.th-content title="Indikator Capaian" />    
                                <x-html.th-content-width title="Action." width="10%" /> 
                            </tr>
                        </thead>
                        <tbody>   

                            @forelse ($Jadwal_penelitian as $row)
                                <tr>
                                    <td class="text-center"> 
                                        {{ $row->urutan }}
                                    </td>  
                                    <td class="text-start"> 
                                        {{ $row->kegiatan }}
                                    </td>   
                                    <td class="text-center"> 
                                        {{ $row->bulan }}
                                    </td>   
                                    <td class="text-start"> 
                                        {{ $row->indikator_capaian }}
                                    </td>     
                                    <td class="text-start"> 
                                        <x-studio_v30.menu-dropdown-data content="{{ $content }}" id="{{ $row->id }}" /> 
                                    </td>
                                </tr>
                                @empty 
                                    
                            @endforelse     
                        </tbody>
                    </table>   
                </div>
            </div>            
        </div>
    </div>
@endsection
