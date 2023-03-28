
<div id="datatable" class="mb-5">
    <div class="card">
        <x-studio_v30.general-form-card-header 
                view="{{ $view_file }}"  
                panel="{{ $panel_name }}"/>
        <div class="card-body pb-4">      
            <div>
                <table id="datatableDefaultx" class="table  ">
                    <thead class=" ">
                        <tr>               
                            <x-html.th-content-width title="No." width="10%" />
                            <x-html.th-content title="Nama" />  
                            <x-html.th-content title="Jabatan" />  
                            <x-html.th-content title="NIDN" />  
                            <x-html.th-content title="Email" />   
                        </tr>
                    </thead>
                    <tbody>   

                            <tr>
                                <td class="text-center"> 
                                    {{ $Peneliti->id }}
                                </td>  
                                <td class="text-start"> 
                                    {{ $Peneliti->nama }}
                                </td>  
                                <td class="text-center"> 
                                    {{ $Peneliti->jabatan_fungsional }}
                                </td>  
                                <td class="text-center"> 
                                    {{ $Peneliti->nidn }}
                                </td>  
                                <td class="text-center"> 
                                    {{ $Peneliti->email }}
                                </td>   
                            </tr>   
                    </tbody>
                </table>   
            </div>
        </div>            
    </div>
</div>