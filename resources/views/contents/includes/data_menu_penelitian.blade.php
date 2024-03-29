
<div id="datatable" class="mb-5">
    <div class="card">
        <div class="card-header">
            <div class="row">
                <div class="col-6">
                    <h5>    
                        Data - {{ $panel_name }} 
                    </h5>   
                </div>
                <div class="col-6 text-end">   
                    <a href="{{ route('Print.show', $Penelitian->id) }}" 
                        class="btn btn-primary"
                        target="_blank">
                        <i class="fas fa-print"></i>
                        Print
                    </a> 
                    <a href="{{ route('Print.Print_set_page_number', 
                                [
                                    'Print' => $Penelitian->id,
                                    'Review' => 'non_page_number'
                                ]
                                ) }}"  
                        class="btn btn-primary"
                        target="_blank">
                        <i class="fas fa-print"></i>
                        Non-Pn
                    </a> 
                    
                    <a href="{{ route('Print.Print_set_page_number', 
                                [
                                    'Print' => $Penelitian->id,
                                    'Review' => 'page_number'
                                ]
                                ) }}"  
                        class="btn btn-primary"
                        target="_blank">
                        <i class="fas fa-print"></i>
                        Page Number
                    </a> 
                </div>
            </div>
            <div class="row mb-4"> 
                Kata Kunci :  
                    {{ $Penelitian->kata_kunci_1 }}, 
                    {{ $Penelitian->kata_kunci_2 }}, 
                    {{ $Penelitian->kata_kunci_3 }}, 
                    {{ $Penelitian->kata_kunci_4 }}, 
                    {{ $Penelitian->kata_kunci_5 }} 
            </div>
        </div>
        <div class="card-body pb-4">      
            <div>
                <table id="datatableDefault" class="table  ">
                    <thead class=" ">
                        <tr>               
                            <x-html.th-content-width title="No." width="5%" />
                            <x-html.th-content title="Judul" />  
                            <x-html.th-content-width title="Tahun" width="5%" />
                            <x-html.th-content-width title="Skema" width="5%" />
                            <x-html.th-content-width title="Pengusul" width="25%" /> 
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
                                <td class="text-center"> 
                                    {{ define_year($row->tanggal_usulan) }} 
                                </td>  
                                <td class="text-center"> 
                                    {{ $row->skema }}
                                </td>  
                                <td class="text-start">  
                                    <b>
                                        {{ $row->ketua->nama }} 
                                    </b>
                                    <br/>
                                    {{ $row->anggota_1->nama }}
                                    <br/>
                                    {{ $row->anggota_2->nama }}
                                </td>   
                                <td class="text-center">  
                                    <x-studio_v30.menu-dropdown-data content="Penelitian" id="{{ $row->id }}" /> 
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