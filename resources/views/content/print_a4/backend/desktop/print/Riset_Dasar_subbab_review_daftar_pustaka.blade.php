<div class="uppercase bold heading_bp heading-1" id="daftar_pustaka">
    Daftar Pustaka
</div>

<br/>

<div class="">  
    @foreach($Penelitian->publikasi_artikel()->get() as $row) 
        <div class="text-indent-reverse lh-15">{{ $row->daftar_pustaka  }}</div>
    @endforeach 
</div>