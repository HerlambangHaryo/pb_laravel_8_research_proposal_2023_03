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
                                    'Review' => 'justifikasi_anggaran_penelitian'
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
                    <table id="datatableDefaultx" class="table  ">
                        <thead class=" ">
                            <tr>               
                                <x-html.th-content-width title="No." width="5%" /> 
                                <x-html.th-content-width title="Kategori" width="15%" />
                                <x-html.th-content title="Kegiatan" />   
                                <x-html.th-content title="Justifikasi" />   
                                <x-html.th-content-width title="Satuan" width="10%" />
                                <x-html.th-content-width title="Harga" width="10%" />
                                <x-html.th-content-width title="Total" width="15%" /> 
                                <x-html.th-content-width title="Action." width="10%" />
                            </tr>
                        </thead>
                        <tbody>    
                            
                            <?php
                                $total_harga = 0;
                            ?>
                            @forelse ($Anggaran_penelitian as $row)
                                <tr>
                                    <td class="text-center"> 
                                        {{ $loop->iteration  }}. 
                                    </td>  
                                    <td class="text-center"> 
                                        {{ $row->kategori  }}
                                    </td>  
                                    <td class="text-left">  
                                        {{ $row->kegiatan  }}
                                    </td>    
                                    <td class="text-center">  
                                        {{ $row->justifikasi_anggaran  }}
                                    </td>  
                                    <td class="text-center">  
                                        {{ $row->kuantitas  }}
                                    </td>  
                                    <td class="text-center">   
                                        Rp.{{ number_format($row->harga,0,",",".") }}
                                    </td>  
                                    <td class="text-center"> 
                                        <?php
                                            if($row->kategori == 'Honor')
                                            {
                                                $sub_harga = $row->kuantitas * $row->harga * 4;
                                            }
                                            else
                                            {
                                                $sub_harga = $row->kuantitas * $row->harga; 
                                            }

                                            $total_harga += $sub_harga;
                                        ?>
                                        Rp.{{ number_format($sub_harga,0,",",".") }}
                                    </td>  
                                    <td class="text-start"> 
                                        <x-studio_v30.menu-dropdown-data content="{{ $content }}" id="{{ $row->id }}" /> 
                                    </td>
                                </tr>   
                                @empty 
                                    
                            @endforelse    
                            
                            
                        </tbody> 
                        <tfoot>
                            <tr>
                                <td></td>
                                <td></td> 
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td class="text-center">  
                                    <h4>
                                        Rp.{{ number_format($total_harga,0,",",".") }}
                                    </h4>
                                </td>
                                <td></td>
                            </tr>
                        </tfoot>
                    </table>   
                </div>
            </div>            
        </div>
    </div>
@endsection
