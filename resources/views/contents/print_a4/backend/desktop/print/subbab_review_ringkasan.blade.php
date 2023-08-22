<div class="uppercase bold heading-1" id="ringkasan"> 
    <a href="#daftar_isi" class="unset">
        Ringkasan
    </a>
</div> 

<div class="@if($clear_helper == 1) clear_helper @endif">
    <table class="border">
        <tr>
            <td>
                Ringkasan penelitian tidak lebih dari 500 kata yang berisi latar belakang penelitian, tujuan dan tahapan metode penelitian, luaran yang ditargetkan, serta uraian TKT penelitian yang diusulkan.
            </td>
        </tr>
    </table>
</div>
{!! define_paragraf($Penelitian->ringkasan_latar_belakang, 'ringkasan_latar_belakang', $clear_helper, 83) !!}
{!! define_paragraf($Penelitian->ringkasan_tujuan, 'ringkasan_tujuan', $clear_helper, 83) !!}
{!! define_paragraf($Penelitian->ringkasan_tahapan_metode, 'ringkasan_tahapan_metode', $clear_helper, 83) !!}
{!! define_paragraf($Penelitian->ringkasan_target_luaran, 'ringkasan_target_luaran', $clear_helper, 83) !!}
{!! define_paragraf($Penelitian->ringkasan_capaian_iku, 'ringkasan_capaian_iku', $clear_helper, 83) !!}
{!! define_paragraf($Penelitian->ringkasan_capaian_tkt, 'ringkasan_capaian_tkt', $clear_helper, 83) !!}

<br/>

<div class=""> 
    {{ $Penelitian->kata_kunci_1 }}; 
    @if($Penelitian->kata_kunci_2 != '')
        {{ $Penelitian->kata_kunci_2 }};  
    @endif 
    @if($Penelitian->kata_kunci_3 != '')
        {{ $Penelitian->kata_kunci_3 }};  
    @endif 
    @if($Penelitian->kata_kunci_4 != '')
        {{ $Penelitian->kata_kunci_4 }};  
    @endif 
    @if($Penelitian->kata_kunci_5 != '')
        {{ $Penelitian->kata_kunci_5 }};  
    @endif 
</div>
