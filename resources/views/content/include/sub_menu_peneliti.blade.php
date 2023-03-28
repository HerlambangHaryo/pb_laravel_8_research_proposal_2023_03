
<div class="row mb-4">
    <div class="col-12 text-center">  
        <div class="btn-group"> 
            <a  
                href="{{ route('Peneliti.show', $Peneliti->id) }}"
                class="btn btn-sm btn-secondary 
                @if($content == 'Peneliti')
                    active
                @endif
                "> 
                Biodata
            </a>      
            <a  
                href="{{ route('Mata_kuliah.Peneliti', $Peneliti->id) }}"
                class="btn btn-sm btn-secondary 
                @if($content == 'Mata_kuliah')
                    active
                @endif 
                "> 
                Mata Kuliah
            </a> 
            <a  
                href="{{ route('Pengalaman_penelitian.Peneliti', $Peneliti->id) }}"
                class="btn btn-sm btn-secondary 
                @if($content == 'Pengalaman_penelitian')
                    active
                @endif 
                "> 
                Pengalaman Penelitian
            </a>      
            <a  
                href="{{ route('Pengalaman_pengabdian.Peneliti', $Peneliti->id) }}"
                class="btn btn-sm btn-secondary 
                @if($content == 'Pengalaman_pengabdian')
                    active
                @endif 
                ">  
                Pengalaman Pengabdian
            </a>     
            <a  
                href="{{ route('Publikasi_artikel.Peneliti', $Peneliti->id) }}"
                class="btn btn-sm btn-secondary 
                @if($content == 'Publikasi_artikel')
                    active
                @endif 
                ">  
                Publikasi Artikel
            </a>      
            <a  
                href="{{ route('Pemakalah_seminar.Peneliti', $Peneliti->id) }}"
                class="btn btn-sm btn-secondary 
                @if($content == 'Pemakalah_seminar')
                    active
                @endif 
                ">  
                Pemakalah Seminar
            </a>      
            <a  
                href="{{ route('Karya_buku.Peneliti', $Peneliti->id) }}"
                class="btn btn-sm btn-secondary 
                @if($content == 'Karya_buku')
                    active
                @endif 
                ">  
                Karya Buku
            </a>     
            <a  
                href="{{ route('Perolehan_hki.Peneliti', $Peneliti->id) }}"
                class="btn btn-sm btn-secondary 
                @if($content == 'Perolehan_hki')
                    active
                @endif 
                ">  
                Perolehan HKI
            </a>     
            <a  
                href="{{ route('Kebijakan_publik.Peneliti', $Peneliti->id) }}"
                class="btn btn-sm btn-secondary 
                @if($content == 'Kebijakan_publik')
                    active
                @endif 
                ">  
                Kebijakan Publik
            </a>    
            <a  
                href="{{ route('Penghargaan.Peneliti', $Peneliti->id) }}"
                class="btn btn-sm btn-secondary 
                @if($content == 'Penghargaan')
                    active
                @endif 
                ">  
                Penghargaan
            </a> 
        </div>
    </div>
</div>