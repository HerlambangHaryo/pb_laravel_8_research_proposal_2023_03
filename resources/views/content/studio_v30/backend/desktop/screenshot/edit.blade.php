@extends('template.'.$template.'.form')

@section('title', $panel_name)

@section('content')    
    <form class="col-12" action="{{ route($content.'.update', $Latar_belakang->id ) }}"  
        method="POST"  > 
        @csrf   
        @method('PUT') 

        <div class="card mb-4">
            <x-studio_v30.general-form-card-header 
                    view="{{ $view_file }}"  
                    panel="{{ $panel_name }}"/>
            <div class="card-body pb-4">    
                <div class="row justify-content-md-center">     
                    <div class="col-11"> 
                         
                        <!-- Umum (100) -->
                            <div class="form-group row mb-3">
                                <label class="col-2 col-form-label">
                                    Umum (100)
                                </label>
                                <div class="col-8">
                                    <textarea 
                                        class="form-control" 
                                        name="latar_belakang_umum"  
                                        rows="10">{{ old('latar_belakang_umum', $Latar_belakang->latar_belakang_umum) }}</textarea>  
                                </div>
                            </div>  
                        <!-- Permasalahan (100) -->
                            <div class="form-group row mb-3">
                                <label class="col-2 col-form-label">
                                    Permasalahan (100)
                                </label>
                                <div class="col-8">
                                    <textarea 
                                        class="form-control" 
                                        name="latar_belakang_permasalahan"  
                                        rows="10">{{ old('latar_belakang_permasalahan', $Latar_belakang->latar_belakang_permasalahan) }}</textarea>  
                                </div>
                            </div>  
                        <!-- Tujuan (100) -->
                            <div class="form-group row mb-3">
                                <label class="col-2 col-form-label">
                                    Tujuan (100)
                                </label>
                                <div class="col-8">
                                    <textarea 
                                        class="form-control" 
                                        name="latar_belakang_tujuan"  
                                        rows="10">{{ old('latar_belakang_tujuan', $Latar_belakang->latar_belakang_tujuan) }}</textarea>  
                                </div>
                            </div>  
                        <!-- Urgensi (100) -->
                            <div class="form-group row mb-3">
                                <label class="col-2 col-form-label">
                                    Urgensi (100)
                                </label>
                                <div class="col-8">
                                    <textarea 
                                        class="form-control" 
                                        name="latar_belakang_urgensi"  
                                        rows="10">{{ old('latar_belakang_urgensi', $Latar_belakang->latar_belakang_urgensi) }}</textarea>  
                                </div>
                            </div>   
                        <!-- 5.	Terkait skema (100) -->
                            <div class="form-group row mb-3">
                                <label class="col-2 col-form-label">
                                    Terkait skema (100)
                                </label>
                                <div class="col-8">
                                    <textarea 
                                        class="form-control" 
                                        name="latar_belakang_terkait_dengan_skema"  
                                        rows="10">{{ old('latar_belakang_terkait_dengan_skema', $Latar_belakang->latar_belakang_terkait_dengan_skema) }}</textarea>  
                                </div>
                            </div>    
                    </div> 
                </div> 
            </div>            
        </div> 
  

        <x-studio_v30.button-submit />
    </form>
@endsection
