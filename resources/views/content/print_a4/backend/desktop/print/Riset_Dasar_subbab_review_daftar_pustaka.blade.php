<div class="uppercase bold heading_bp heading-1" id="daftar_pustaka">
    Daftar Pustaka
</div>

<div class=""> 
    <ol>
    @foreach($Penelitian->publikasi_artikel()->get() as $row) 
        <li>{{ $row->daftar_pustaka  }}</li>
    @endforeach
    </ol>
</div>