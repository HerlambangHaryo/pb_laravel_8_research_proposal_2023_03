<?php
    $content = 'Penulis_publikasi_artikel';
    $panel_name = ucwords(str_replace("_"," ", $content));
?>
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
                </div>
            </div>
        </div>
        <div class="card-body pb-4">      
            <div>
                <table id="datatableDefault" class="table  ">
                    <thead class=" ">
                        <tr>               
                            <x-html.th-content-width title="No." width="10%" />
                            <x-html.th-content title="Penulis" />   
                            <x-html.th-content-width title="Action." width="10%" /> 
                        </tr>
                    </thead>
                    <tbody>   

                        @forelse ($data2 as $row)
                            <tr>
                                <td class="text-center"> 
                                    {{ $loop->iteration }}
                                </td>  
                                <td class="text-start"> 
                                    {{ $row->peneliti->nama }}
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