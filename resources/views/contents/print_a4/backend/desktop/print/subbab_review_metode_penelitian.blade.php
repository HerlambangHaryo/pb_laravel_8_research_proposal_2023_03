
<div class="uppercase bold heading-1" id="metode_penelitian"> 
    <a href="#daftar_isi" class="unset">
        Bab III. Metode Penelitian
    </a>
</div>
<div class="@if($clear_helper == 1) clear_helper @endif">
    <table class="border">
        <tr>
            <td>
                Metode atau cara untuk mencapai tujuan yang telah ditetapkan ditulis tidak melebihi 600 kata. Bagian ini dilengkapi dengan diagram alir penelitian yang menggambarkan apa yang sudah dilaksanakan dan yang akan dikerjakan selama waktu yang diusulkan. Format diagram alir dapat berupa file JPG/PNG. Bagan penelitian harus dibuat secara utuh dengan penahapan yang jelas, mulai dari awal bagaimana proses dan luarannya, dan indikator capaian yang ditargetkan. Di bagian ini harus juga mengisi tugas masing-masing anggota pengusul sesuai tahapan penelitian yang diusulkan.
            </td>
        </tr>
    </table>
</div>
 

{!! define_paragraf($Penelitian->metode_uraian, 'metode_uraian', $clear_helper, 100) !!} 

<div class="text-center">
    <img width="500px"
        src="{{ asset('/public/storage/metode_penelitian/').'/'.$Penelitian->metode_gambar }}" alt="">
</div>
<div class="text-center caption-gambar">
    Gambar Metode Penelitian
</div>
{!! define_paragraf($Penelitian->metode_detail, 'metode_detail', $clear_helper, 100) !!} 

<!-- {!! define_paragraf($Penelitian->metode_luaran, 'metode_luaran', $clear_helper, 100) !!}
{!! define_paragraf($Penelitian->metode_capaian, 'metode_capaian', $clear_helper, 100) !!}
{!! define_paragraf($Penelitian->metode_tugas_pengusul, 'metode_tugas_pengusul', $clear_helper, 100) !!} -->

@php $counter_metode = 0; @endphp
@foreach($Penelitian->jadwal_penelitian as $row)    
    @php $counter_metode += 1; @endphp
    <div class="heading-2 bold" id="metode_penelitian_{{ str_replace(' ', '_', $row->kegiatan )}}">
        <a href="#daftar_isi" class="unset">
            3.{{ $counter_metode }}. {{ $row->kegiatan }}
        </a>
    </div> 
 
    {!! define_paragraf($row->penjelasan, $row->kegiatan, $clear_helper, 100) !!}

@endforeach
    @php $counter_metode += 1; @endphp

    <div class="heading-2 bold" id="metode_penelitian_{{ str_replace(' ', '_', 'Pembagian Tugas Tim Pengusul' )}}">
        <a href="#daftar_isi" class="unset">
            3.{{ $counter_metode }}. Pembagian Tugas Tim Pengusul
        </a>
    </div>  

    {!! define_paragraf($Penelitian->paragraf_uraian_tugas, 'paragraf_uraian_tugas', $clear_helper, 100) !!}

    {!! define_tabel_uraian_tugas($Penelitian) !!}