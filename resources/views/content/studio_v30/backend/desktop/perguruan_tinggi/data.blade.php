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
                                <x-html.th-content title="Nama" />  
                                <x-html.th-content title="Alamat" />  
                                <x-html.th-content title="Kel" />  
                                <x-html.th-content title="Kec" />  
                                <x-html.th-content title="Kota" />  
                                <x-html.th-content title="Prov" />  
                                <x-html.th-content title="Kodepos" />  
                                <x-html.th-content title="telepon" />  
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
                                        {{ $row->nama }}
                                    </td>  
                                    <td class="text-center"> 
                                        {{ $row->alamat }}
                                    </td>  
                                    <td class="text-center"> 
                                        {{ $row->kelurahan }}
                                    </td>  
                                    <td class="text-center"> 
                                        {{ $row->kecamatan }}
                                    </td>  
                                    <td class="text-center"> 
                                        {{ $row->kota }}
                                    </td>  
                                    <td class="text-center"> 
                                        {{ $row->provinsi }}
                                    </td>  
                                    <td class="text-center"> 
                                        {{ $row->kodepos }}
                                    </td>  
                                    <td class="text-center"> 
                                        {{ $row->telepon }}
                                    </td>  
                                    <td class="text-center">  
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