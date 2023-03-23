@extends('template.'.$template.'.form')

@section('title', $panel_name)

@section('content')     

    <div id="datatable" class="mb-5">
        <div class="card">
            <div class="card-header">
                <div class="row">
                    <div class="col-6">
                        Biodata {{ $content }} 
                    </div>
                    <div class="col-6 text-end">   
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
                                <x-html.th-content title="Jabatan" />  
                                <x-html.th-content title="NIDN" />  
                                <x-html.th-content title="Email" />   
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
                                        {{ $row->jabatan_fungsional }}
                                    </td>  
                                    <td class="text-center"> 
                                        {{ $row->nidn }}
                                    </td>  
                                    <td class="text-center"> 
                                        {{ $row->email }}
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
      
    <div class="row mb-4">
        <div class="col-12 text-center">  
            <div class="btn-group"> 
                <a  
                    href="{{ route('Pengalaman_penelitian.Peneliti', $Peneliti->id) }}"
                    class="btn btn-sm btn-secondary"> 
                    Pengalaman Penelitian
                </a>      
                <a  
                    href="{{ route('Pengalaman_pengabdian.Peneliti', $Peneliti->id) }}"
                    class="btn btn-sm btn-secondary"> 
                    Pengalaman Pengabdian
                </a>     
                <a  
                    href="{{ route('Publikasi_artikel.Peneliti', $Peneliti->id) }}"
                    class="btn btn-sm btn-secondary"> 
                    Publikasi Artikel
                </a>      
                <a  
                    href="{{ route('Pemakalah_seminar.Peneliti', $Peneliti->id) }}"
                    class="btn btn-sm btn-secondary"> 
                    Pemakalah Seminar
                </a>      
                <a  
                    href="{{ route('Karya_buku.Peneliti', $Peneliti->id) }}"
                    class="btn btn-sm btn-secondary"> 
                    Karya Buku
                </a>     
                <a  
                    href="{{ route('Perolehan_hki.Peneliti', $Peneliti->id) }}"
                    class="btn btn-sm btn-secondary"> 
                    Perolehan HKI
                </a>     
                <a  
                    href="{{ route('Kebijakan_publik.Peneliti', $Peneliti->id) }}"
                    class="btn btn-sm btn-secondary"> 
                    Kebijakan Publik
                </a>   
            </div>
        </div>
    </div>
    
  
@endsection
