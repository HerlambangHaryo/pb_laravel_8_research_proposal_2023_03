
<div class="uppercase bold heading-1" id="metode_penelitian">
    METODE Penelitian
</div>
<div class="">
    <table class="border">
        <tr>
            <td>
            Metode atau cara untuk mencapai tujuan yang telah ditetapkan ditulis tidak melebihi 600 kata. Bagian ini dilengkapi dengan diagram alir penelitian yang menggambarkan apa yang sudah dilaksanakan dan yang akan dikerjakan selama waktu yang diusulkan. Format diagram alir dapat berupa file JPG/PNG. Bagan penelitian harus dibuat secara utuh dengan penahapan yang jelas, mulai dari awal bagaimana proses dan luarannya, dan indikator capaian yang ditargetkan. Di bagian ini harus juga mengisi tugas masing-masing anggota pengusul sesuai tahapan penelitian yang diusulkan.
            </td>
        </tr>
    </table>
</div>
{!! define_paragraf($Penelitian->metode_uraian, 'metode_uraian', 100) !!} 

<div class="text-center">
    <img width="400px"
        src="{{ asset('/public/storage/metode_penelitian/').'/'.$Penelitian->metode_gambar }}" alt="">
</div>

{!! define_paragraf($Penelitian->metode_detail, 'metode_detail', 100) !!} 
{!! define_paragraf($Penelitian->metode_luaran, 'metode_luaran', 100) !!}
{!! define_paragraf($Penelitian->metode_capaian, 'metode_capaian', 100) !!}
{!! define_paragraf($Penelitian->metode_tugas_pengusul, 'metode_tugas_pengusul', 100) !!}
