@extends('template.'.$template.'.datatable')

@section('title', $panel_name)

@section('content')    
    @include('content.include.data_menu_penelitian')
    @include('content.include.sub_menu_penelitian')
    
    <div class="row mb-4 justify-content-md-center">
        <div class="col-6">
            <div class="card border-0 text-white overflow-hidden"  >
                <!-- card-img --> 
                <img width="100%"
                src="{{ asset('/public/storage/penelitian/').'/'.$Penelitian->lembar_pengesahan }}" alt="">
        
                <!-- card-img-overlay -->
                <div class="card-img-overlay d-flex flex-column bg-gray-900 bg-opacity-70 rounded">
                    <!-- top content -->
                    <div class="flex-fill">
                        <div class="d-flex align-items-center"> 
                            <div class="dropdown ms-auto">
                                <a href="#" class="text-white" data-bs-toggle="dropdown"><i class="fa fa-ellipsis-h"></i></a>
                                <div class="dropdown-menu dropdown-menu-right"> 
                                    <a class="dropdown-item d-flex align-items-center" 
                                        href="{{ route('Penelitian.edit', $Penelitian->id) }}">
                                        Edit 
                                        <i class="far fa-edit fa-fw ms-auto text-dark text-opacity-50"></i>
                                    </a>
                                    <a class="dropdown-item d-flex align-items-center" 
                                        target="_blank"
                                        href="{{ route('Print.Print_subbab_review', 
                                        [
                                            'Print' => $Penelitian->id,
                                            'Review' => 'halaman_pengesahan'
                                        ]
                                        ) }}">
                                        Print subbab review
                                        <i class="fas fa-print fa-fw ms-auto text-dark text-opacity-50"></i>
                                    </a> 
                                </div>
                            </div>
                        </div>
                    </div>
                     
                </div>
            </div>
        </div>
    </div>



@endsection
