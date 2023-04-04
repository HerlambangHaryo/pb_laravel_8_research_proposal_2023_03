@extends('template.'.$template.'.datatable')

@section('title', $panel_name)

@section('content')    
    @include('content.include.data_menu_penelitian')
    @include('content.include.sub_menu_penelitian')
    
    <div class="row mb-4 justify-content-md-center">
        <div class="col-6">
            <div id="datatable" class="mb-5">
                <div class="card"> 
                    <div class="card-body pb-4">      
                        <div>
                            <table id="datatableDefaultx" class="table  ">
                                <thead class=" ">
                                    <tr>               
                                        <x-html.th-content-width title="No." width="5%" /> 
                                        <x-html.th-content title="Sub" />    
                                        <x-html.th-content title="Print" />    
                                    </tr>
                                </thead>
                                <tbody>     
                                    <tr>
                                        <td class="text-center"> 
                                            1.
                                        </td>  
                                        <td class="text-left"> 
                                            Cover  
                                        </td>  
                                        <td class="text-center">  
                                            <a href="{{ route('Print.Print_subbab_review', 
                                                    [
                                                        'Print' => $Penelitian->id,
                                                        'Review' => 'cover'
                                                    ]
                                                    ) }}" 
                                                class="btn btn-sm btn-secondary"
                                                target="_blank">
                                                <i class="fas fa-print"></i>
                                                Print subbab review
                                            </a> 
                                        </td>     
                                    </tr>     
                                    <tr>
                                        <td class="text-center"> 
                                            2.
                                        </td>  
                                        <td class="text-left"> 
                                            Daftar Isi  
                                        </td>  
                                        <td class="text-center">  
                                            <a href="{{ route('Print.Print_subbab_review', 
                                                    [
                                                        'Print' => $Penelitian->id,
                                                        'Review' => 'daftar_isi'
                                                    ]
                                                    ) }}" 
                                                class="btn btn-sm btn-secondary"
                                                target="_blank">
                                                <i class="fas fa-print"></i>
                                                Print subbab review
                                            </a> 
                                        </td>     
                                    </tr>    
                                    <tr>
                                        <td class="text-center"> 
                                            3.
                                        </td>  
                                        <td class="text-left"> 
                                            Daftar Gambar  
                                        </td>  
                                        <td class="text-center">  
                                            <a href="{{ route('Print.Print_subbab_review', 
                                                    [
                                                        'Print' => $Penelitian->id,
                                                        'Review' => 'daftar_gambar'
                                                    ]
                                                    ) }}" 
                                                class="btn btn-sm btn-secondary"
                                                target="_blank">
                                                <i class="fas fa-print"></i>
                                                Print subbab review
                                            </a> 
                                        </td>     
                                    </tr>    
                                    <tr>
                                        <td class="text-center"> 
                                            4.
                                        </td>  
                                        <td class="text-left"> 
                                            Daftar Tabel  
                                        </td>  
                                        <td class="text-center">  
                                            <a href="{{ route('Print.Print_subbab_review', 
                                                    [
                                                        'Print' => $Penelitian->id,
                                                        'Review' => 'daftar_tabel'
                                                    ]
                                                    ) }}" 
                                                class="btn btn-sm btn-secondary"
                                                target="_blank">
                                                <i class="fas fa-print"></i>
                                                Print subbab review
                                            </a> 
                                        </td>     
                                    </tr>     
                                    <tr>
                                        <td class="text-center"> 
                                            4.
                                        </td>  
                                        <td class="text-left"> 
                                            Justifikasi Anggaran Penelitian  
                                        </td>  
                                        <td class="text-center">  
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
                                        </td>     
                                    </tr>    
                                    <tr>
                                        <td class="text-center"> 
                                            4.
                                        </td>  
                                        <td class="text-left"> 
                                            Biodata Ketua dan Anggota Peneliti  
                                        </td>  
                                        <td class="text-center">  
                                            <a href="{{ route('Print.Print_subbab_review', 
                                                    [
                                                        'Print' => $Penelitian->id,
                                                        'Review' => 'biodata_ketua_dan_anggota_peneliti'
                                                    ]
                                                    ) }}" 
                                                class="btn btn-sm btn-secondary"
                                                target="_blank">
                                                <i class="fas fa-print"></i>
                                                Print subbab review
                                            </a> 
                                        </td>     
                                    </tr>    
                                    <tr>
                                        <td class="text-center"> 
                                            4.
                                        </td>  
                                        <td class="text-left"> 
                                            Surat Ketua dan Anggota Peneliti  
                                        </td>  
                                        <td class="text-center">  
                                            <a href="{{ route('Print.Print_subbab_review', 
                                                    [
                                                        'Print' => $Penelitian->id,
                                                        'Review' => 'surat_ketua_dan_anggota_peneliti'
                                                    ]
                                                    ) }}" 
                                                class="btn btn-sm btn-secondary"
                                                target="_blank">
                                                <i class="fas fa-print"></i>
                                                Print subbab review
                                            </a> 
                                        </td>     
                                    </tr>    
                                    <tr>
                                        <td class="text-center"> 
                                            4.
                                        </td>  
                                        <td class="text-left"> 
                                            Surat Pernyataan Kesanggupan Peneliti  
                                        </td>  
                                        <td class="text-center">  
                                            <a href="{{ route('Print.Print_subbab_review', 
                                                    [
                                                        'Print' => $Penelitian->id,
                                                        'Review' => 'surat_pernyataan_kesanggupan_peneliti'
                                                    ]
                                                    ) }}" 
                                                class="btn btn-sm btn-secondary"
                                                target="_blank">
                                                <i class="fas fa-print"></i>
                                                Print subbab review
                                            </a> 
                                        </td>     
                                    </tr>    
                                    <tr>
                                        <td class="text-center"> 
                                            4.
                                        </td>  
                                        <td class="text-left"> 
                                            Screenshot Update Sister 
                                        </td>  
                                        <td class="text-center">  
                                            <a href="{{ route('Print.Print_subbab_review', 
                                                    [
                                                        'Print' => $Penelitian->id,
                                                        'Review' => 'screenshot_update_sister'
                                                    ]
                                                    ) }}" 
                                                class="btn btn-sm btn-secondary"
                                                target="_blank">
                                                <i class="fas fa-print"></i>
                                                Print subbab review
                                            </a> 
                                        </td>     
                                    </tr>    
                                    <tr>
                                        <td class="text-center"> 
                                            4.
                                        </td>  
                                        <td class="text-left"> 
                                            Screenshot Update Sinta 
                                        </td>  
                                        <td class="text-center">  
                                            <a href="{{ route('Print.Print_subbab_review', 
                                                    [
                                                        'Print' => $Penelitian->id,
                                                        'Review' => 'screenshot_update_sinta'
                                                    ]
                                                    ) }}" 
                                                class="btn btn-sm btn-secondary"
                                                target="_blank">
                                                <i class="fas fa-print"></i>
                                                Print subbab review
                                            </a> 
                                        </td>     
                                    </tr>  
                                </tbody> 
                            </table>   
                        </div>
                    </div>            
                </div>
            </div>

        </div>

    </div>
@endsection
