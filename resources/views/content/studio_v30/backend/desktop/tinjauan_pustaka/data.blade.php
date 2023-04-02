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
                                    State of the art (250) 
                                </td>  
                                <td class="text-left">  
                                    {{ $Penelitian->tinjauan_pustaka_state_of_the_art }}
                                </td>    
                                <td class="text-center"> 
                                    <?php
                                        $total_count = 0 ;
                                        $count = str_word_count($Penelitian->tinjauan_pustaka_state_of_the_art);
                                        $total_count += $count ;
                                    ?>
                                    {{ $count }} / 250
                                </td>  
                            </tr>   
                            <tr>
                                <td class="text-center"> 
                                    2.
                                </td>  
                                <td class="text-center"> 
                                    Road map 3 tahun ke belakang (250)
                                </td>  
                                <td class="text-left">  
                                    {{ $Penelitian->tinjauan_pustaka_sebelum }}
                                </td>    
                                <td class="text-center"> 
                                    <?php 
                                        $count = str_word_count($Penelitian->tinjauan_pustaka_sebelum);
                                        $total_count += $count ;
                                    ?>
                                    {{ $count }} / 250
                                </td>  
                            </tr>   
                            <tr>
                                <td class="text-center"> 
                                    3.
                                </td>  
                                <td class="text-center"> 
                                    Road map 3 tahun ke depan (250) 
                                </td>  
                                <td class="text-left">  
                                    {{ $Penelitian->tinjauan_pustaka_setelah }}
                                </td>    
                                <td class="text-center"> 
                                    <?php 
                                        $count = str_word_count($Penelitian->tinjauan_pustaka_setelah);
                                        $total_count += $count ;
                                    ?>
                                    {{ $count }} / 250
                                </td>  
                            </tr>   
                            <tr>
                                <td class="text-center"> 
                                    4.
                                </td>  
                                <td class="text-center"> 
                                    Tinjuan Pustaka 10 th terakhir (250) 
                                </td>  
                                <td class="text-left">  
                                    {{ $Penelitian->tinjauan_pustaka_umum }}
                                </td>    
                                <td class="text-center"> 
                                    <?php 
                                        $count = str_word_count($Penelitian->tinjauan_pustaka_umum);
                                        $total_count += $count ;
                                    ?>
                                    {{ $count }} / 100
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
