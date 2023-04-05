<div class="uppercase bold heading_bp" id="ringkasan">
    Ringkasan
</div>

<div class="">
    <table class="border">
        <tr>
            <td>
                Ringkasan penelitian tidak lebih dari 500 kata yang berisi latar belakang penelitian, tujuan dan tahapan metode penelitian, luaran yang ditargetkan, serta uraian TKT penelitian yang diusulkan.
            </td>
        </tr>
    </table>
</div>
{!! define_paragraf($Penelitian->ringkasan_latar_belakang, 'ringkasan_latar_belakang', 83) !!}
{!! define_paragraf($Penelitian->ringkasan_tujuan, 'ringkasan_tujuan', 83) !!}
{!! define_paragraf($Penelitian->ringkasan_tahapan_metode, 'ringkasan_tahapan_metode', 83) !!}
{!! define_paragraf($Penelitian->ringkasan_target_luaran, 'ringkasan_target_luaran', 83) !!}
{!! define_paragraf($Penelitian->ringkasan_capaian_iku, 'ringkasan_capaian_iku', 83) !!}
{!! define_paragraf($Penelitian->ringkasan_capaian_tkt, 'ringkasan_capaian_tkt', 83) !!}

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
