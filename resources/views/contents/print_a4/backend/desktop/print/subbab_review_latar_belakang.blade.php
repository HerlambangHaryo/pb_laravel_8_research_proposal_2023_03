<div class="uppercase bold heading-1" id="latar_belakang">
    <a href="#daftar_isi" class="unset">
        BAB I. Latar Belakang
    </a>
</div> 
<div class="@if($clear_helper == 1) clear_helper @endif">
    <table class="border">
        <tr>
            <td>
                Latar belakang penelitian tidak lebih dari 500 kata yang berisi latar belakang dan permasalahan yang akan diteliti, tujuan khusus, dan urgensi penelitian. Pada bagian ini perlu dijelaskan uraian tentang spesifikasi khusus terkait dengan skema.
            </td>
        </tr>
    </table>
</div>

<div class="text-justify text-indent text-paragraf">
    Bab ini membahas pada aspek yang mendasari sebuah penelitian, termasuk latar belakang masalah, rumusan masalah, tujuan penelitian, dan target luaran. 
    Detail mengenai bab ini dibahas pada masing masing subbabnya.
</div>

<div class="heading-2 bold" id="latar_belakang_umum">
    <a href="#daftar_isi" class="unset">
        1.1. Latar Belakang Masalah
    </a>
</div>
{!! define_paragraf($Penelitian->latar_belakang_umum, 'latar_belakang_umum', $clear_helper, 83) !!}

<div class="heading-2 bold" id="latar_belakang_rumusan">
    <a href="#daftar_isi" class="unset">
        1.2. Rumusan Masalah
    </a>
</div>
{!! define_paragraf($Penelitian->latar_belakang_permasalahan, 'latar_belakang_permasalahan', $clear_helper, 83) !!}

<div class="heading-2 bold" id="latar_belakang_tujuan"> 
    <a href="#daftar_isi" class="unset">
        1.3. Tujuan Penelitian
    </a>
</div>
{!! define_paragraf($Penelitian->latar_belakang_tujuan, 'latar_belakang_tujuan', $clear_helper, 83) !!}

{!! define_paragraf($Penelitian->latar_belakang_urgensi, 'latar_belakang_urgensi', $clear_helper, 83) !!}

<div class="heading-2 bold" id="latar_belakang_target_luaran">
    <a href="#daftar_isi" class="unset">
        1.4. Target Luaran
    </a>
</div>
{!! define_paragraf($Penelitian->latar_belakang_terkait_dengan_skema, 'latar_belakang_terkait_dengan_skema', $clear_helper, 83) !!}

