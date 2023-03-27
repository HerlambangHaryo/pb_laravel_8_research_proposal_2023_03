@extends('template.'.$template.'.datatable')

@section('title', $panel_name)

@section('content')   
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
                        <x-studio_v30.button-subcreate id="{{ $id }}" />
                        <x-studio_v30.button-create content="{{ $content }}" />
                    </div>
                </div>
            </div>
            <div class="card-body">      
                <div>
                    <table id="datatableDefault" class="table  ">
                        <thead class=" ">
                            <tr>               
                                <x-html.th-content-width title="No." width="5%" />
                                <x-html.th-content-width title="Tahun" width="5%" />  
                                <x-html.th-content title="Judul" />  
                                <x-html.th-content-width title="Sumber" width="10%" />  
                                <x-html.th-content-width title="Jumlah" width="10%" /> 
                                <x-html.th-content-width title="Action." width="10%" /> 
                            </tr>
                        </thead>
                        <tbody>   

                            @forelse ($data as $row)
                                <tr>
                                    <td class="text-center"> 
                                        {{ $row->id }}
                                    </td>  
                                    <td class="text-center"> 
                                        {{ $row->tahun }}
                                    </td>   
                                    <td class="text-start"> 
                                        {{ $row->judul }}
                                    </td>   
                                    <td class="text-center"> 
                                        {{ $row->sumber_pendanaan }}
                                    </td>   
                                    <td class="text-end"> 
                                        Rp.{{ number_format($row->jumlah_pendanaan,0,".",",") }}
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
