@extends('template.'.$template.'.form')

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
                    </div>
                </div>
            </div>
            <div class="card-body pb-4">      
                <div>
                    <table id="datatableDefault" class="table  ">
                        <thead class=" ">
                            <tr>               
                                <x-html.th-content-width title="No." width="10%" />
                                <x-html.th-content title="Judul" />  
                                <x-html.th-content title="Jurnal" />   
                                <x-html.th-content-width title="Tahun" width="5%" /> 
                                <x-html.th-content-width title="Volume" width="5%" /> 
                                <x-html.th-content-width title="Nomor" width="5%" /> 
                                <x-html.th-content-width title="Link" width="12%" /> 
                            </tr>
                        </thead>
                        <tbody>    
                            <tr>
                                <td class="text-center"> 
                                    {{ $Publikasi_artikel->id }}
                                </td>  
                                <td class="text-start"> 
                                    {{ $Publikasi_artikel->judul }}
                                </td>   
                                <td class="text-start"> 
                                    {{ $Publikasi_artikel->jurnal }}
                                </td>   
                                <td class="text-start"> 
                                    {{ $Publikasi_artikel->tahun }}
                                </td>    
                                <td class="text-start"> 
                                    {{ $Publikasi_artikel->volume }}
                                </td>   
                                <td class="text-start"> 
                                    {{ $Publikasi_artikel->nomor }}
                                </td>  
                                <td class="text-center"> 
                                    @if(!is_null($Publikasi_artikel->url))
                                        <a href="{{ $Publikasi_artikel->url }}" target="_blank">
                                            Publikasi_{{ $Publikasi_artikel->id }}
                                            <i class="fas fa-external-link-square-alt"></i>
                                        </a>  
                                    @endif
                                </td>   
                            </tr> 
                        </tbody>
                    </table>   
                </div>
            </div>            
        </div>
    </div>

    
    @include('content.studio_v30.backend.desktop.penulis_publikasi_artikel.data')
     
@endsection
