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
                            Data - {{ $panel_name }} - (500)
                        </h5>   
                    </div>
                    <div class="col-6 text-end">   
                        <a href="{{ route($content.'.edit', $Penelitian->id) }}" 
                            class="btn btn-secondary"
                            target="_blank">
                            <i class="far fa-edit"></i> 
                            Edit
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
                                <x-html.th-content-width title="Sub" width="15%" />
                                <x-html.th-content title="Paragraf" />   
                                <x-html.th-content-width title="Count" width="10%" /> 
                            </tr>
                        </thead>
                        <tbody>    
                            
                            <tr>
                                <td class="text-center"> 
                                    1.
                                </td>  
                                <td class="text-center"> 
                                    Latar belakang  
                                </td>  
                                <td class="text-left">  
                                    {{ $Penelitian->ringkasan_latar_belakang }}
                                </td>    
                                <td class="text-center"> 
                                    <?php
                                        $total_count = 0 ;
                                        $count = str_word_count($Penelitian->ringkasan_latar_belakang);
                                        $total_count += $count ;
                                    ?>
                                    {{ $count }} / 83
                                </td>  
                            </tr>   
                            <tr>
                                <td class="text-center"> 
                                    2.
                                </td>  
                                <td class="text-center"> 
                                    Tujuan
                                </td>  
                                <td class="text-left">  
                                    {{ $Penelitian->ringkasan_tujuan }}
                                </td>    
                                <td class="text-center"> 
                                    <?php 
                                        $count = str_word_count($Penelitian->ringkasan_tujuan);
                                        $total_count += $count ;
                                    ?>
                                    {{ $count }} / 83
                                </td>  
                            </tr>   
                            <tr>
                                <td class="text-center"> 
                                    3.
                                </td>  
                                <td class="text-center"> 
                                    Tahapan Metode 
                                </td>  
                                <td class="text-left">  
                                    {{ $Penelitian->ringkasan_tahapan_metode }}
                                </td>    
                                <td class="text-center"> 
                                    <?php 
                                        $count = str_word_count($Penelitian->ringkasan_tahapan_metode);
                                        $total_count += $count ;
                                    ?>
                                    {{ $count }} / 83
                                </td>  
                            </tr>   
                            <tr>
                                <td class="text-center"> 
                                    4.
                                </td>  
                                <td class="text-center"> 
                                    Target Luaran 
                                </td>  
                                <td class="text-left">  
                                    {{ $Penelitian->ringkasan_target_luaran }}
                                </td>    
                                <td class="text-center"> 
                                    <?php 
                                        $count = str_word_count($Penelitian->ringkasan_target_luaran);
                                        $total_count += $count ;
                                    ?>
                                    {{ $count }} / 83
                                </td>  
                            </tr>   
                            <tr>
                                <td class="text-center"> 
                                    5.
                                </td>  
                                <td class="text-center"> 
                                    Capaian IKU 
                                </td>  
                                <td class="text-left">  
                                    {{ $Penelitian->ringkasan_capaian_iku }}
                                </td>    
                                <td class="text-center"> 
                                    <?php 
                                        $count = str_word_count($Penelitian->ringkasan_capaian_iku);
                                        $total_count += $count ;
                                    ?>
                                    {{ $count }} / 83
                                </td>  
                            </tr>   
                            <tr>
                                <td class="text-center"> 
                                    6.
                                </td>  
                                <td class="text-center"> 
                                    Capaian TKT  
                                </td>  
                                <td class="text-left">  
                                    {{ $Penelitian->ringkasan_capaian_tkt }}
                                </td>    
                                <td class="text-center"> 
                                    <?php 
                                        $count = str_word_count($Penelitian->ringkasan_capaian_tkt);
                                        $total_count += $count ;
                                    ?>
                                    {{ $count }} / 83
                                </td>  
                            </tr>   
                        </tbody>
                        <tfoot>
                            <tr>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td class="text-center">  
                                    <h4>
                                        {{ $total_count }}
                                    </h4>
                                </td>
                            </tr>
                        </tfoot>
                    </table>   
                </div>
            </div>            
        </div>
    </div>
@endsection
