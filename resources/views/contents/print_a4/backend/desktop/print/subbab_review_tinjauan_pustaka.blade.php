<div class="uppercase bold heading-1" id="tinjauan_pustaka"> 
    <a href="#daftar_isi" class="unset">
        BAB II. TINJAUAN PUSTAKA
    </a>
</div>
<div class="@if($clear_helper == 1) clear_helper @endif">
    <table class="border">
        <tr>
            <td>
            Tinjauan pustaka tidak lebih dari 1000 kata dengan mengemukakan state of the art dan peta jalan
(road map) dalam bidang yang diteliti. Bagan dan road map (min 3 th sebelum dan sesudah)
dibuat dalam bentuk JPG/PNG yang kemudian disisipkan dalam isian ini. Sumber
pustaka/referensi primer yang relevan dan dengan mengutamakan hasil penelitian pada jurnal
ilmiah dan/atau paten yang terkini. Disarankan penggunaan sumber pustaka 10 tahun terakhir.
            </td>
        </tr>
    </table>
</div>

<div class="text-justify text-indent text-paragraf">
    Bab ini membahas tentang tiga subbab utama dalam penelitian, yaitu penelitian terdahulu, roadmap penelitian, dan dasar teori. 
    Detail mengenai bab ini dibahas pada masing masing subbabnya.
</div>

<div class="heading-2 bold" id="tinjauan_pustaka_penelitian_terdahulu">
    <a href="#daftar_isi" class="unset">
        2.1. Penelitian Terdahulu
    </a>
</div>
{!! define_paragraf($Penelitian->tinjauan_pustaka_sebelum, 'tinjauan_pustaka_sebelum', $clear_helper, 250) !!}

@foreach($Penelitian->penelitian_terdahulu as $row) 
    <div class="heading-3 " id="penelitian_terdahulu_{{ str_replace(' ', '_', $row->subjek )}}">
        <a href="#daftar_isi" class="unset">
            2.1.{{ $loop->iteration }} {{ $row->subjek }}
        </a>
    </div>
    {!! define_paragraf($row->penjelasan, $row->subjek, $clear_helper, 250) !!}
@endforeach


<div class="heading-2 bold" id="tinjauan_pustaka_terdahulu">
    <a href="#daftar_isi" class="unset">
        2.2. Roadmap Penelitian
    </a>
</div>
{!! define_paragraf($Penelitian->tinjauan_pustaka_state_of_the_art, 'tinjauan_pustaka_state_of_the_art', $clear_helper, 250) !!}


{!! define_paragraf($Penelitian->tinjauan_pustaka_setelah, 'tinjauan_pustaka_setelah', $clear_helper, 250) !!}
<div class="text-center">
    <img width="450px"
        src="{{ asset('/public/storage/tinjauan_pustaka/').'/'.$Penelitian->tinjauan_pustaka_roadmap }}" alt="">
</div>
<div class="text-center caption-gambar">
    Gambar Roadmap Penelitian
</div>


<div class="heading-2 bold" id="tinjauan_pustaka_dasar_teori">
    <a href="#daftar_isi" class="unset">
        2.3. Dasar Teori
    </a>
</div>

@foreach($Penelitian->dasar_teori as $row) 
    <div class="heading-3 " id="dasar_teori_{{ str_replace(' ', '_', $row->teori )}}">
        <a href="#daftar_isi" class="unset">
            2.3.{{ $loop->iteration }} {{ $row->teori }}
        </a>
    </div>
    {!! define_paragraf($row->penjelasan, $row->subjek, $clear_helper, 250) !!}
@endforeach 