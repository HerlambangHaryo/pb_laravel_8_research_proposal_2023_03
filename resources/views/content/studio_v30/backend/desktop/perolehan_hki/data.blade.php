@extends('template.'.$template.'.datatable')

@section('title', $panel_name)

@section('content')   
    <div id="datatable" class="mb-5">
        <div class="card">
            <div class="card-header">
                <div class="row">
                    <div class="col-6">
                        Data - {{ $content }} 
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
                                <x-html.th-content-width title="No." width="10%" />
                                <x-html.th-content title="Judul" />  
                                <x-html.th-content title="Jenis" /> 
                                <x-html.th-content title="Tahun" />   
                                <x-html.th-content title="Nomor" />  
                                <x-html.th-content-width title="Action." width="10%" /> 
                            </tr>
                        </thead>
                        <tbody>   

                            @forelse ($data as $row)
                                <tr>
                                    <td class="text-center"> 
                                        {{ $row->id }}
                                    </td>  
                                    <td class="text-start"> 
                                        {{ $row->judul }}
                                    </td>   
                                    <td class="text-start"> 
                                        {{ $row->jenis }}
                                    </td>   
                                    <td class="text-start"> 
                                        {{ $row->tahun }}
                                    </td>    
                                    <td class="text-start"> 
                                        {{ $row->nomor }}
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
