<div class=" "> 
    <table class="uppercase bold text-right border float-right">
        <tr>
            <td>
                461 / SISTEM INFORMASI
            </td>
        </tr>
    </table> 
</div>

<br/>
<br/>
<br/>
<br/>
<br/> 

<div class="uppercase bold text-center text-size-18pt lh-15">
    PROPOSAL
    <br/>
    RISET DASAR
</div>

<br/>
<br/>
<br/>

<div class="text-center">
    <img width="189px"
        src="{{ asset('/public/storage/perguruan_tinggi/').'/'.$Penelitian->ketua->perguruan_tinggi->logo }}" alt="">
</div>

<br/>
<br/>

<div class="uppercase bold text-center text-size-14pt lh-15">
    {{ $Penelitian->judul }}
</div>

<br/>
<br/>

<div class="text-center bold">
    Diusulkan oleh:
</div>

<br/>

<div class="">
    <table width="100%">
        <tr>
            <td>
                Ketua
            </td> 
            <td>
                {{ $Penelitian->ketua->nama }}
            </td>
            <td>
                {{ $Penelitian->ketua->nidn }}
            </td>
            <td>
                {{ $Penelitian->ketua->perguruan_tinggi->kode }}
            </td>
        </tr>
        <tr>
            <td>
                Anggota
            </td> 
            <td>
                {{ $Penelitian->anggota_1->nama }}
            </td>
            <td>
                {{ $Penelitian->anggota_1->nidn }}
            </td>
            <td>
                {{ $Penelitian->anggota_1->perguruan_tinggi->kode }}
            </td>
        </tr>
        <tr>
            <td>
                    
            </td> 
            <td>
                {{ $Penelitian->anggota_2->nama }}
            </td>
            <td>
                {{ $Penelitian->anggota_2->nidn }}
            </td>
            <td>
                {{ $Penelitian->anggota_2->perguruan_tinggi->kode }}
            </td>
        </tr>
        <tr>
            <td>
                    
            </td> 
            <td>
                {{ $Penelitian->mahasiswa_1->nama }}
            </td>
            <td>
                {{ $Penelitian->mahasiswa_1->npm }}
            </td>
            <td>
                {{ $Penelitian->mahasiswa_1->perguruan_tinggi->kode }}
            </td>
        </tr>
        <tr>
            <td>
                    
            </td> 
            <td>
                {{ $Penelitian->mahasiswa_2->nama }}
            </td>
            <td>
                {{ $Penelitian->mahasiswa_2->npm }}
            </td>
            <td>
                {{ $Penelitian->mahasiswa_2->perguruan_tinggi->kode }}
            </td>
        </tr>
    </table>
</div>

<br/>
<br/>
<br/>

<div class="uppercase bold text-center  text-size-12pt lh-15">
    Fakultas Ilmu Komputer
    <br/>
    {{ $Penelitian->ketua->perguruan_tinggi->nama }}
    <br/>
    {{ define_year($Penelitian->tanggal) }}
</div>