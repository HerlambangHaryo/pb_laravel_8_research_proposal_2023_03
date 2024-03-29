
<div class="row mb-4">
    <div class="col-12 text-center">  
        <div class="btn-group"> 
            <a  
                href="{{ route('Penelitian.show', $Penelitian->id) }}"
                class="btn btn-sm btn-secondary 
                @if($content == 'Penelitian')
                    active
                @endif
                "> 
                General
            </a>  
            <a  
                href="{{ route('Halaman_pengesahan.Penelitian', $Penelitian->id) }}"
                class="btn btn-sm btn-secondary 
                @if($content == 'Halaman_pengesahan')
                    active
                @endif
                "> 
                Halaman Pengesahan
            </a>    
            <a  
                href="{{ route('Ringkasan.Penelitian', $Penelitian->id) }}"
                class="btn btn-sm btn-secondary 
                @if($content == 'Ringkasan')
                    active
                @endif
                "> 
                Ringkasan
            </a>      
            <a  
                href="{{ route('Latar_belakang.Penelitian', $Penelitian->id) }}"
                class="btn btn-sm btn-secondary 
                @if($content == 'Latar_belakang')
                    active
                @endif 
                "> 
                Latar Belakang
            </a> 
            <a  
                href="{{ route('Tinjauan_pustaka.Penelitian', $Penelitian->id) }}"
                class="btn btn-sm btn-secondary 
                @if($content == 'Tinjauan_pustaka')
                    active
                @endif 
                "> 
                Tinjauan Pustaka
            </a>      
            <a  
                href="{{ route('Penelitian_terdahulu.Penelitian', $Penelitian->id) }}"
                class="btn btn-sm btn-secondary 
                @if($content == 'Penelitian_terdahulu')
                    active
                @endif 
                "> 
                Penelitian Terdahulu
            </a>     
            <a  
                href="{{ route('Dasar_teori.Penelitian', $Penelitian->id) }}"
                class="btn btn-sm btn-secondary 
                @if($content == 'Dasar_teori')
                    active
                @endif 
                "> 
                Dasar Teori
            </a>     
            <a  
                href="{{ route('Metode_penelitian.Penelitian', $Penelitian->id) }}"
                class="btn btn-sm btn-secondary 
                @if($content == 'Metode_penelitian')
                    active
                @endif 
                ">  
                Metode Penelitian
            </a>     
            <a  
                href="{{ route('Jadwal_penelitian.Penelitian', $Penelitian->id) }}"
                class="btn btn-sm btn-secondary 
                @if($content == 'Jadwal_penelitian')
                    active
                @endif 
                ">  
                Jadwal Penelitian
            </a>       
            <a  
                href="{{ route('Anggaran_penelitian.Penelitian', $Penelitian->id) }}"
                class="btn btn-sm btn-secondary 
                @if($content == 'Anggaran_penelitian')
                    active
                @endif 
                ">  
                Anggaran Penelitian
            </a>     
            <a  
                href="{{ route('Daftar_pustaka.Penelitian', $Penelitian->id) }}"
                class="btn btn-sm btn-secondary 
                @if($content == 'Daftar_pustaka')
                    active
                @endif 
                ">  
                Daftar Pustaka
            </a>  
            <a  
                href="{{ route('Screenshot.Penelitian', $Penelitian->id) }}"
                class="btn btn-sm btn-secondary 
                @if($content == 'Screenshot')
                    active
                @endif
                "> 
                Screenshot
            </a>     
        </div>
    </div>
</div>