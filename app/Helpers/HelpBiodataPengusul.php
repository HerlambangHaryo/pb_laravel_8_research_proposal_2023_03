<?php  
use App\Models\Pengalaman_penelitian;
use App\Models\Pengalaman_pengabdian;
use App\Models\Penulis_publikasi_artikel;
use App\Models\Publikasi_artikel;
use App\Models\Pemakalah_seminar;
use App\Models\Karya_buku;
use App\Models\Perolehan_hki;
use App\Models\Kebijakan_publik;
use App\Models\Penghargaan;

    if(!function_exists('define_bp'))
    {
        function define_bp($Penelitian)
        {
            // ----------------------------------------------------------- Initialize 
                $isi = '';
            // ----------------------------------------------------------- Action   
                $isi .= define_prebiodata_bp( 'Ketua' );        
                $isi .= define_biodata_bp( $Penelitian->ketua );         
                $isi .= define_pengalaman_penelitian_bp( $Penelitian->ketua->id );    
                $isi .= define_pengalaman_pengabdian_bp( $Penelitian->ketua->id );     
                $isi .= define_publikasi_artikel_bp( $Penelitian->ketua->id );     
                $isi .= define_pemakalah_seminar_bp( $Penelitian->ketua->id );    
                $isi .= define_karya_buku_bp( $Penelitian->ketua->id );  
                $isi .= define_perolehan_hki_bp( $Penelitian->ketua->id );  
                $isi .= define_kebijakan_publik_bp( $Penelitian->ketua->id );  
                $isi .= define_penghargaan_bp( $Penelitian->ketua->id );
                $isi .= define_pernyataan_bp( $Penelitian->judul ); 
                $isi .= define_tanda_tangan($Penelitian->ketua->nama,
                            $Penelitian->ketua->nidn,
                            $Penelitian->tanggal,
                            'Ketua'
                        );

                       
                $isi .= define_prebiodata_bp( 'Anggota 1' ); 
                $isi .= define_biodata_bp( $Penelitian->anggota_1 );         
                $isi .= define_pengalaman_penelitian_bp( $Penelitian->anggota_1->id );    
                $isi .= define_pengalaman_pengabdian_bp( $Penelitian->anggota_1->id );     
                $isi .= define_publikasi_artikel_bp( $Penelitian->anggota_1->id );     
                $isi .= define_pemakalah_seminar_bp( $Penelitian->anggota_1->id );    
                $isi .= define_karya_buku_bp( $Penelitian->anggota_1->id );  
                $isi .= define_perolehan_hki_bp( $Penelitian->anggota_1->id );  
                $isi .= define_kebijakan_publik_bp( $Penelitian->anggota_1->id );  
                $isi .= define_penghargaan_bp( $Penelitian->anggota_1->id );
                $isi .= define_pernyataan_bp( $Penelitian->judul ); 
                $isi .= define_tanda_tangan($Penelitian->anggota_1->nama,
                            $Penelitian->anggota_1->nidn,
                            $Penelitian->tanggal,
                            'Anggota'
                        );

                        
                $isi .= define_prebiodata_bp( 'Anggota 2' ); 
                $isi .= define_biodata_bp( $Penelitian->anggota_2 );        
                $isi .= define_pengalaman_penelitian_bp( $Penelitian->anggota_2->id );    
                $isi .= define_pengalaman_pengabdian_bp( $Penelitian->anggota_2->id );     
                $isi .= define_publikasi_artikel_bp( $Penelitian->anggota_2->id );     
                $isi .= define_pemakalah_seminar_bp( $Penelitian->anggota_2->id );    
                $isi .= define_karya_buku_bp( $Penelitian->anggota_2->id );  
                $isi .= define_perolehan_hki_bp( $Penelitian->anggota_2->id );  
                $isi .= define_kebijakan_publik_bp( $Penelitian->anggota_2->id );  
                $isi .= define_penghargaan_bp( $Penelitian->anggota_2->id );
                $isi .= define_pernyataan_bp( $Penelitian->judul ); 
                $isi .= define_tanda_tangan($Penelitian->anggota_2->nama,
                            $Penelitian->anggota_2->nidn,
                            $Penelitian->tanggal,
                            'Anggota'
                        );
            // ----------------------------------------------------------- Send
                $word = $isi;
                return $word;

            ///////////////////////////////////////////////////////////////
        }
    }
    
    if(!function_exists('define_prebiodata_bp'))
    {
        function define_prebiodata_bp( $Peneliti )
        {
            // ----------------------------------------------------------- Initialize
                $isi = '';  
            // ----------------------------------------------------------- Action

                $isi .= '<div class=" bold ';

                if($Peneliti != 'Ketua')
                {
                    $isi .= 'heading_bp';
                }

                $isi .= ' ">';

                if($Peneliti == 'Ketua')
                {
                    $isi .= '<br/>';
                }

                    $isi .= 'Biodata '.$Peneliti;
                $isi .= '</div>'; 

            // ----------------------------------------------------------- Send
                $word = $isi;
                return $word;

            ///////////////////////////////////////////////////////////////
        }
    }
    
    if(!function_exists('define_biodata_bp'))
    {
        function define_biodata_bp( $Peneliti )
        {
            // ----------------------------------------------------------- Initialize
                $isi = '';  
            // ----------------------------------------------------------- Action

                $isi .= '<ol type="A" start="1" class="bold">';
                    $isi .= '<li>Identitas Diri</li>'; 
                $isi .= '</ol>';

                $isi .= '<div class="">';
                    $isi .= '<table width="100%" class="border">';  
                    
                        $isi .= '<tbody>'; 
                            $isi .= '<tr>';
                                $isi .= '<td width="37%">';
                                    $isi .= 'Nama Lengkap';
                                $isi .= '</td>'; 
                                $isi .= '<td>';
                                    $isi .= $Peneliti->nama;
                                $isi .= '</td>';
                            $isi .= '</tr>';
                            $isi .= '<tr>';
                                $isi .= '<td>';
                                    $isi .= 'Jenis Kelamin';
                                $isi .= '</td>'; 
                                $isi .= '<td>';
                                    $isi .= $Peneliti->jenis_kelamin;
                                $isi .= '</td>';
                            $isi .= '</tr>';
                            $isi .= '<tr>';
                                $isi .= '<td>';
                                    $isi .= 'Jabatan Fungsional';
                                $isi .= '</td>'; 
                                $isi .= '<td>';
                                    $isi .= $Peneliti->jabatan_fungsional;
                                $isi .= '</td>';
                            $isi .= '</tr>';
                            $isi .= '<tr>';
                                $isi .= '<td>';
                                    $isi .= 'NIP/NIK/Identitas lainnya';
                                $isi .= '</td>'; 
                                $isi .= '<td>';
                                    $isi .= $Peneliti->nip_nik_lainnya;
                                $isi .= '</td>';
                            $isi .= '</tr>';
                            $isi .= '<tr>';
                                $isi .= '<td>';
                                    $isi .= 'NIDN';
                                $isi .= '</td>'; 
                                $isi .= '<td>';
                                    $isi .= $Peneliti->nidn;
                                $isi .= '</td>';
                            $isi .= '</tr>';
                            $isi .= '<tr>';
                                $isi .= '<td>';
                                    $isi .= 'ID Sinta / Google Scholar';
                                $isi .= '<br/>';
                                    $isi .= 'URL ';
                                $isi .= '</td>'; 
                                $isi .= '<td>';
                                    $isi .= $Peneliti->id_sinta_google_scholar;
                                    if(!is_null($Peneliti->url))
                                    {
                                        $isi .= '<br/>';
                                        $isi .= '<a href="$isi .= $Peneliti->url;" target="_blank">';
                                            $isi .= 'URL Google Scholar';
                                            $isi .= '<i class="fas fa-external-link-square-alt"></i>';
                                            $isi .= '</a>'; 
                                    }
                                $isi .= '</td>';
                            $isi .= '</tr>'; 
                            $isi .= '<tr>';
                                $isi .= '<td>';
                                    $isi .= 'ID Scopus';
                                $isi .= '</td>'; 
                                $isi .= '<td>';
                                    $isi .= $Peneliti->id_scopus;
                                $isi .= '</td>';
                            $isi .= '</tr>';
                            $isi .= '<tr>';
                                $isi .= '<td>';
                                    $isi .= 'ID Orchid';
                                $isi .= '</td>'; 
                                $isi .= '<td>';
                                    $isi .= $Peneliti->id_orchid;
                                $isi .= '</td>';
                            $isi .= '</tr>';
                            $isi .= '<tr>';
                                $isi .= '<td>';
                                    $isi .= 'Tempat dan Tanggal Lahir';
                                $isi .= '</td>'; 
                                $isi .= '<td>';
                                    $isi .= $Peneliti->tempat_lahir;
                                    $isi .= ', ';
                                    $isi .= define_date($Peneliti->tanggal_lahir);
                                $isi .= '</td>';
                            $isi .= '</tr>';
                            $isi .= '<tr>';
                                $isi .= '<td>';
                                    $isi .= 'E-mail';
                                $isi .= '</td>'; 
                                $isi .= '<td>';
                                    $isi .= $Peneliti->email;
                                $isi .= '</td>';
                            $isi .= '</tr>';
                            $isi .= '<tr>';
                                $isi .= '<td>';
                                    $isi .= 'Nomor Telepon/ HP';
                                $isi .= '</td>'; 
                                $isi .= '<td>';
                                    $isi .= $Peneliti->telepon;
                                $isi .= '</td>';
                            $isi .= '</tr>';
                            $isi .= '<tr>';
                                $isi .= '<td>';
                                    $isi .= 'Alamat Kantor';
                                $isi .= '</td>'; 
                                $isi .= '<td>';
                                    $isi .= $Peneliti->perguruan_tinggi->alamat;
                                    $isi .= ',  Kel. ';
                                    $isi .= $Peneliti->perguruan_tinggi->kelurahan;
                                    $isi .= ',  Kec. ';
                                    $isi .= $Peneliti->perguruan_tinggi->kecamatan;
                                    $isi .= ',  Kota ';
                                    $isi .= $Peneliti->perguruan_tinggi->kota;
                                    $isi .= ', ';
                                    $isi .= $Peneliti->perguruan_tinggi->provinsi; 
                                    $isi .= ' ';
                                    $isi .= $Peneliti->perguruan_tinggi->kodepos;
                                $isi .= '</td>';
                            $isi .= '</tr>';
                            $isi .= '<tr>';
                                $isi .= '<td>';
                                    $isi .= 'Nomor Telepon / Faks';
                                $isi .= '</td>'; 
                                $isi .= '<td>';
                                    $isi .= $Peneliti->perguruan_tinggi->telepon;  
                                    $isi .= ' / ';
                                    $isi .= $Peneliti->perguruan_tinggi->fax;
                                $isi .= '</td>';
                            $isi .= '</tr>';
                            $isi .= '<tr>';
                                $isi .= '<td>';
                                    $isi .= 'Lulusan yang Telah Dihasilkan';
                                $isi .= '</td>'; 
                                $isi .= '<td>';
                                    $isi .= 'S-1 = ';
                                    $isi .= $Peneliti->lulusan_s1; 
                                    $isi .= ' Orang';
                                    if(!is_null($Peneliti->lulusan_s2))
                                    {
                                        $isi .= '<br/>'; 
                                        $isi .= 'S-2 = ';
                                        $isi .= $Peneliti->lulusan_s2; 
                                        $isi .= ' Orang';
                                    }
                                    if(!is_null($Peneliti->lulusan_s3))
                                    {
                                        $isi .= '<br/>';
                                        $isi .= 'S-3 = ';
                                        $isi .= $Peneliti->lulusan_s3; 
                                        $isi .= ' Orang';
                                    }
                                $isi .= '</td>';
                            $isi .= '</tr>';
                            $isi .= '<tr>';
                                $isi .= '<td>';
                                    $isi .= 'Mata Kuliah yang Diampu';
                                $isi .= '</td>'; 
                                $isi .= '<td>';   
                                    $isi .= '<ol>';   
                                    foreach($Peneliti->mata_kuliah as $row) 
                                    { 
                                        $isi .= '<li>';
                                        $isi .= $row->judul;
                                        $isi .= '</li>';
                                    }
                                    $isi .= '</ol>';  
                                    
                                $isi .= '</td>';
                            $isi .= '</tr>';
                            $isi .= '</tbody>'; 
                    $isi .= '</table>';
                $isi .= '</div>';

                $isi .= '<br/>';

                $isi .= '<ol type="A" start="2" class="bold">';
                    $isi .= '<li>Riwayat Pendidikan</li>'; 
                $isi .= '</ol>'; 

                $isi .= '<div class="">';
                    $isi .= '<table width="100%" class="border">';  
                        $isi .= '<tbody>';
                            $isi .= '<tr>'; 
                                $isi .= '<td width="20%">'; 
                                $isi .= '</td>'; 
                                $isi .= '<td class="text-center">';
                                    $isi .= 'S-1';
                                $isi .= '</td>';
                                $isi .= '<td class="text-center">';
                                    $isi .= 'S-2';
                                $isi .= '</td>';
                                $isi .= '<td class="text-center">';
                                    $isi .= 'S-3';
                                $isi .= '</td>';
                            $isi .= '</tr>'; 
                            $isi .= '<tr>'; 
                                $isi .= '<td>'; 
                                $isi .= 'Nama Perguruan Tinggi';
                                $isi .= '</td>';
                                $isi .= '<td class="text-center">';
                                    $isi .= $Peneliti->s1_perguruan_tinggi ;
                                $isi .= '</td>';
                                $isi .= '<td class="text-center">';
                                    $isi .= $Peneliti->s2_perguruan_tinggi ;
                                $isi .= '</td>';
                                $isi .= '<td class="text-center">';
                                    $isi .= $Peneliti->s3_perguruan_tinggi ;
                                $isi .= '</td>';
                            $isi .= '</tr>'; 
                            $isi .= '<tr>'; 
                                $isi .= '<td>'; 
                                $isi .= 'Bidang Ilmu';
                                $isi .= '</td>';
                                $isi .= '<td class="text-center">';
                                    $isi .= $Peneliti->s1_bidang_ilmu ;
                                $isi .= '</td>';
                                $isi .= '<td class="text-center">';
                                    $isi .= $Peneliti->s2_bidang_ilmu ;
                                $isi .= '</td>';
                                $isi .= '<td class="text-center">';
                                    $isi .= $Peneliti->s3_bidang_ilmu ;
                                $isi .= '</td>';
                            $isi .= '</tr>'; 
                            $isi .= '<tr>'; 
                                $isi .= '<td>'; 
                                $isi .= 'Tahun Masuk - Lulus';
                                $isi .= '</td>';
                                $isi .= '<td class="text-center">';
                                    $isi .= $Peneliti->s1_tahun_masuk ; 
                                    $isi .= ' - ';  
                                    $isi .= $Peneliti->s1_tahun_lulus ;
                                $isi .= '</td>';
                                $isi .= '<td class="text-center">';
                                    $isi .= $Peneliti->s2_tahun_masuk ;
                                    $isi .= ' - ';  
                                    $isi .= $Peneliti->s2_tahun_lulus ;
                                $isi .= '</td>';
                                $isi .= '<td class="text-center">';
                                    $isi .= $Peneliti->s3_tahun_masuk ;
                                    $isi .= ' - ';  
                                    $isi .= $Peneliti->s3_tahun_lulus ;
                                $isi .= '</td>';
                            $isi .= '</tr>'; 
                            $isi .= '<tr>'; 
                                $isi .= '<td>'; 
                                $isi .= 'Judul Skripsi / Tesis / Disertasi';
                                $isi .= '</td>';
                                $isi .= '<td class="text-center">';
                                    $isi .= $Peneliti->s1_judul  ; 
                                $isi .= '</td>';
                                $isi .= '<td class="text-center">';
                                    $isi .= $Peneliti->s2_judul  ; 
                                $isi .= '</td>';
                                $isi .= '<td class="text-center">';
                                    $isi .= $Peneliti->s3_judul  ; 
                                $isi .= '</td>';
                            $isi .= '</tr>'; 
                            $isi .= '<tr>'; 
                                $isi .= '<td>'; 
                                $isi .= 'Nama Pembimbing / Promotor';
                                $isi .= '</td>';
                                $isi .= '<td class="text-center">';
                                    $isi .= $Peneliti->s1_pembimbing ; 
                                $isi .= '</td>';
                                $isi .= '<td class="text-center">';
                                    $isi .= $Peneliti->s2_pembimbing ; 
                                $isi .= '</td>';
                                $isi .= '<td class="text-center">';
                                    $isi .= $Peneliti->s3_pembimbing ; 
                                $isi .= '</td>';
                            $isi .= '</tr>'; 
                        $isi .= '</tbody>'; 

                    $isi .= '</table>';
                $isi .= '</div>';
            // ----------------------------------------------------------- Send
                $word = $isi;
                return $word;

            ///////////////////////////////////////////////////////////////
        }
    }
    
    if(!function_exists('define_pengalaman_penelitian_bp'))
    {
        function define_pengalaman_penelitian_bp( $id )
        {
            // ----------------------------------------------------------- Initialize 
                $data = Pengalaman_penelitian::where('id_peneliti', '=', $id) 
                            ->whereRaw('tahun >= YEAR(DATE_SUB(CURDATE(), INTERVAL 5 YEAR))')
                            ->orderBy('tahun', 'desc')
                            ->orderBy('judul')
                            ->get();

                $isi = '<br/>';
            // ----------------------------------------------------------- Action
                $isi .= '<ol type="A" start="3" class="bold">';
                    $isi .= '<li>Pengalaman Penelitian dalam 5 Tahun Terakhir (Bukan Skripsi, Tesis, atau Disertasi)</li>'; 
                $isi .= '</ol>';  

                $isi .= '<div class="">';
                    $isi .= '<table width="100%" class="border">'; 
                        $isi .= '<thead class="text-center">'; 
                            $isi .= '<tr>';
                                $isi .= '<th rowspan="2" width="5%">No.</th>';
                                $isi .= '<th rowspan="2" width="10%">Tahun</th>';
                                $isi .= '<th rowspan="2">Judul Penelitian</th>';
                                $isi .= '<th colspan="2">Pendanaan</th>';
                            $isi .= '</tr>'; 
                            $isi .= '<tr>';
                                $isi .= '<th width="15%">Sumber*</th>';
                                $isi .= '<th width="15%">Jumlah (Juta Rp)</th>'; 
                            $isi .= '</tr>'; 
                        $isi .= '</thead>'; 
                        $isi .= '<tbody>'; 
                        
                        $counter = 0;
                        if(count($data) != 0 )
                        { 
                            foreach($data as $row)
                            {
                                $counter += 1;
                                    $isi .= '<tr>';
                                        $isi .= '<td class="text-center">';
                                            $isi .= $counter.'.';
                                        $isi .= '</td>';

                                        $isi .= '<td class="text-center">';
                                            $isi .= $row->tahun;
                                        $isi .= '</td>';

                                        $isi .= '<td class=" ">';
                                            $isi .= $row->judul;
                                        $isi .= '</td>';

                                        $isi .= '<td class="text-center">';
                                            $isi .= $row->sumber_pendanaan;
                                        $isi .= '</td>';

                                        $isi .= '<td class="text-right">';
                                            if($row->jumlah_pendanaan != '')
                                            {
                                                $isi .= 'Rp.'.number_format($row->jumlah_pendanaan,0,",",".");
                                            } 
                                        $isi .= '</td>'; 
                                    $isi .= '</tr>';
                            }
                        }
                        else
                        {
                            
                            $isi .= '<tr class="text-center">';
                                $isi .= '<td>'; 
                                    $isi .= '-';
                                $isi .= '</td>';

                                $isi .= '<td>';
                                    $isi .= '-';
                                $isi .= '</td>';

                                $isi .= '<td>';
                                    $isi .= '-';
                                $isi .= '</td>';

                                $isi .= '<td>';
                                    $isi .= '-';
                                $isi .= '</td>'; 
                            $isi .= '</tr>';
                        }
                        $isi .= '</tbody>'; 

                    $isi .= '</table>';
                $isi .= '</div>';
            // ----------------------------------------------------------- Send
                $word = $isi;
                return $word;

            ///////////////////////////////////////////////////////////////
        }
    }
    
    if(!function_exists('define_pengalaman_pengabdian_bp'))
    {
        function define_pengalaman_pengabdian_bp( $id )
        {
            // ----------------------------------------------------------- Initialize 
                $data = Pengalaman_pengabdian::where('id_peneliti', '=', $id) 
                            ->whereRaw('tahun >= YEAR(DATE_SUB(CURDATE(), INTERVAL 5 YEAR))')
                            ->orderBy('tahun', 'desc')
                            ->orderBy('judul')
                            ->get();

                $isi = '<br/>';
            // ----------------------------------------------------------- Action
                $isi .= '<ol type="A" start="4" class="bold">';
                    $isi .= '<li>Pengalaman Pengabdian kepada Masyarakat dalam 5 Tahun Terakhir</li>'; 
                $isi .= '</ol>';   

                $isi .= '<div class="">';
                    $isi .= '<table width="100%" class="border">'; 
                        $isi .= '<thead class="text-center">'; 
                            $isi .= '<tr>';
                                $isi .= '<th rowspan="2" width="5%">No.</th>';
                                $isi .= '<th rowspan="2" width="10%">Tahun</th>';
                                $isi .= '<th rowspan="2">Judul Pengabdian Kepada Masyarakat</th>';
                                $isi .= '<th colspan="2">Pendanaan</th>';
                            $isi .= '</tr>'; 
                            $isi .= '<tr>';
                                $isi .= '<th width="15%">Sumber*</th>';
                                $isi .= '<th width="15%">Jumlah (Juta Rp)</th>'; 
                            $isi .= '</tr>'; 
                        $isi .= '</thead>'; 
                        $isi .= '<tbody>'; 
                        
                        $counter = 0;
                        if(count($data) != 0 )
                        { 
                            foreach($data as $row)
                            {
                                $counter += 1;
                                    $isi .= '<tr>';
                                        $isi .= '<td class="text-center">';
                                            $isi .= $counter.'.';
                                        $isi .= '</td>';

                                        $isi .= '<td class="text-center">';
                                            $isi .= $row->tahun;
                                        $isi .= '</td>';

                                        $isi .= '<td class=" ">';
                                            $isi .= $row->judul;
                                        $isi .= '</td>';

                                        $isi .= '<td class="text-center">';
                                            $isi .= $row->sumber_pendanaan;
                                        $isi .= '</td>';

                                        $isi .= '<td class="text-right">';
                                            if($row->jumlah_pendanaan != '')
                                            {
                                                $isi .= 'Rp.'.number_format($row->jumlah_pendanaan,0,",",".");
                                            } 
                                        $isi .= '</td>'; 
                                    $isi .= '</tr>';
                            }
                        }
                        else
                        {
                            
                            $isi .= '<tr class="text-center">';
                                $isi .= '<td>'; 
                                    $isi .= '-';
                                $isi .= '</td>';

                                $isi .= '<td>';
                                    $isi .= '-';
                                $isi .= '</td>';

                                $isi .= '<td>';
                                    $isi .= '-';
                                $isi .= '</td>';

                                $isi .= '<td>';
                                    $isi .= '-';
                                $isi .= '</td>'; 
                            $isi .= '</tr>';
                        }
                        $isi .= '</tbody>'; 

                    $isi .= '</table>';
                $isi .= '</div>';
            // ----------------------------------------------------------- Send
                $word = $isi;
                return $word;

            ///////////////////////////////////////////////////////////////
        }
    }
    
    if(!function_exists('define_publikasi_artikel_bp'))
    {
        function define_publikasi_artikel_bp( $id )
        {
            // ----------------------------------------------------------- Initialize 
            $pre_data       = Penulis_publikasi_artikel::select('id_publikasi_artikel')
                                ->where('id_peneliti', '=', $id);

            $data           = Publikasi_artikel::whereIn('id', $pre_data)
                                ->orderBy('tahun', 'desc')
                                ->orderBy('judul')
                                ->whereRaw('tahun >= YEAR(DATE_SUB(CURDATE(), INTERVAL 5 YEAR))')
                                ->get();

                $isi = '<br/>';
            // ----------------------------------------------------------- Action
                $isi .= '<ol type="A" start="5" class="bold">';
                    $isi .= '<li>Publikasi Artikel Ilmiah dalam Jurnal 5 Tahun Terakhir</li>'; 
                $isi .= '</ol>';   
 
                $isi .= '<div class="">';
                    $isi .= '<table width="100%" class="border">'; 
                        $isi .= '<thead class="text-center">'; 
                            $isi .= '<tr>';
                                $isi .= '<th width="5%">No.</th>';
                                $isi .= '<th>Judul Artikel Ilmiah</th>';
                                $isi .= '<th>Nama Jurnal</th>';
                                $isi .= '<th width="90px">Volume / Nomor / Tahun / Link URL</th>'; 
                            $isi .= '</tr>'; 
                        $isi .= '</thead>'; 
                        $isi .= '<tbody>'; 
                        
                        $counter = 0;
                        if(count($data) != 0 )
                        { 
                            foreach($data as $row)
                            {
                                $counter += 1;
                                    $isi .= '<tr>';
                                        $isi .= '<td class="text-center">';
                                            $isi .= $counter.'.';
                                        $isi .= '</td>';

                                        $isi .= '<td class="">';
                                            $isi .= $row->judul;
                                        $isi .= '</td>';

                                        $isi .= '<td class=" ">';
                                            $isi .= $row->jurnal;
                                        $isi .= '</td>';

                                        $isi .= '<td class="">';
                                            $isi .= 'Vol: '.$row->volume;
                                            $isi .= '<br/>';
                                            $isi .= 'No: '.$row->nomor;
                                            $isi .= '<br/>';
                                            $isi .= 'Th: '.$row->tahun;
                                            $isi .= '<br/>';
                                            $isi .= 'Link:';
                                            if(!is_null($row->url))
                                            {
                                                $isi .= '<a href="'.$row->url.'" target="_blank">';
                                                    $isi .= 'Publikasi_'.$counter;
                                                    $isi .= '<i class="fas fa-external-link-square-alt"></i>';
                                                $isi .= '</a>'; 
                                            }
                                        $isi .= '</td>';

                                    $isi .= '</tr>';
                            }
                        }
                        else
                        {
                            
                            $isi .= '<tr class="text-center">';
                                $isi .= '<td>'; 
                                    $isi .= '-';
                                $isi .= '</td>';

                                $isi .= '<td>';
                                    $isi .= '-';
                                $isi .= '</td>';

                                $isi .= '<td>';
                                    $isi .= '-';
                                $isi .= '</td>';

                                $isi .= '<td>';
                                    $isi .= '-';
                                $isi .= '</td>'; 
                            $isi .= '</tr>';
                        }
                        $isi .= '</tbody>'; 

                    $isi .= '</table>';
                $isi .= '</div>';
            // ----------------------------------------------------------- Send
                $word = $isi;
                return $word;

            ///////////////////////////////////////////////////////////////
        }
    }
    
    if(!function_exists('define_pemakalah_seminar_bp'))
    {
        function define_pemakalah_seminar_bp( $id )
        {
            // ----------------------------------------------------------- Initialize 
                $data = Pemakalah_seminar::where('id_peneliti', '=', $id) 
                            ->whereRaw('tanggal >= YEAR(DATE_SUB(CURDATE(), INTERVAL 5 YEAR))')
                            ->get();

                $isi = '<br/>';
            // ----------------------------------------------------------- Action
                $isi .= '<ol type="A" start="6" class="bold">';
                    $isi .= '<li>Pemakalah Seminar Ilmiah (Oral Presentation) dalam 5 Tahun Terakhir</li>'; 
                $isi .= '</ol>';    

                $isi .= '<div class="">';
                    $isi .= '<table width="100%" class="border">'; 
                        $isi .= '<thead class="text-center">'; 
                            $isi .= '<tr>';
                                $isi .= '<th width="5%">No.</th>';
                                $isi .= '<th>Nama Pertemuan Ilmiah / Seminar</th>';
                                $isi .= '<th>Nama Artikel Ilmiah</th>';
                                $isi .= '<th>Waktu dan Tempat</th>'; 
                            $isi .= '</tr>'; 
                        $isi .= '</thead>'; 
                        $isi .= '<tbody>'; 
                        
                        $counter = 0;
                        if(count($data) != 0 )
                        { 
                            foreach($data as $row)
                            {
                                $counter += 1;
                                    $isi .= '<tr>';
                                        $isi .= '<td class="text-center">';
                                            $isi .= $counter.'.';
                                        $isi .= '</td>';

                                        $isi .= '<td class="">';
                                            $isi .= $row->judul;
                                        $isi .= '</td>';

                                        $isi .= '<td class="text-center">';
                                            $isi .= $row->seminar;
                                        $isi .= '</td>';

                                        $isi .= '<td class="">';
                                            $isi .= $row->tanggal;
                                            $isi .= ', '; 
                                            $isi .= $row->tempat;
                                        $isi .= '</td>';

                                    $isi .= '</tr>';
                            }
                        }
                        else
                        {
                            
                            $isi .= '<tr class="text-center">';
                                $isi .= '<td>'; 
                                    $isi .= '-';
                                $isi .= '</td>';

                                $isi .= '<td>';
                                    $isi .= '-';
                                $isi .= '</td>';

                                $isi .= '<td>';
                                    $isi .= '-';
                                $isi .= '</td>';

                                $isi .= '<td>';
                                    $isi .= '-';
                                $isi .= '</td>'; 
                            $isi .= '</tr>';
                        }
                        $isi .= '</tbody>'; 

                    $isi .= '</table>';
                $isi .= '</div>';
            // ----------------------------------------------------------- Send
                $word = $isi;
                return $word;

            ///////////////////////////////////////////////////////////////
        }
    }
    
    if(!function_exists('define_karya_buku_bp'))
    {
        function define_karya_buku_bp( $id )
        {
            // ----------------------------------------------------------- Initialize 
                $data = Karya_buku::where('id_peneliti', '=', $id) 
                            ->whereRaw('tahun >= YEAR(DATE_SUB(CURDATE(), INTERVAL 10 YEAR))')
                            ->get();

                $isi = '<br/>';
            // ----------------------------------------------------------- Action
                $isi .= '<ol type="A" start="7" class="bold">';
                    $isi .= '<li>Karya Buku dalam 5 Tahun Terakhir</li>'; 
                $isi .= '</ol>';     

                $isi .= '<div class="">';
                    $isi .= '<table width="100%" class="border">'; 
                        $isi .= '<thead class="text-center">'; 
                            $isi .= '<tr>';
                                $isi .= '<th width="5%">No.</th>';
                                $isi .= '<th>Judul / Tema HKI</th>';
                                $isi .= '<th width="10%">Tahun</th>';
                                $isi .= '<th>Jenis</th>';
                                $isi .= '<th>Nomor P/ID</th>';
                            $isi .= '</tr>'; 
                        $isi .= '</thead>'; 
                        $isi .= '<tbody>'; 
                           
                        $counter = 0;
                        if(count($data) != 0 )
                        { 
                            foreach($data as $row)
                            {
                                $counter += 1;
                                    $isi .= '<tr>';
                                        $isi .= '<td class="text-center">';
                                            $isi .= $counter.'.';
                                        $isi .= '</td>';

                                        $isi .= '<td class="">';
                                            $isi .= $row->judul;
                                        $isi .= '</td>';

                                        $isi .= '<td class="text-center">';
                                            $isi .= $row->tahun;
                                        $isi .= '</td>';

                                        $isi .= '<td class="">';
                                            $isi .= $row->jenis;
                                        $isi .= '</td>';

                                        $isi .= '<td class="">';
                                            $isi .= $row->nomor;
                                        $isi .= '</td>';

                                    $isi .= '</tr>';
                            }
                        }
                        else
                        {
                            
                            $isi .= '<tr class="text-center">';
                                $isi .= '<td>'; 
                                    $isi .= '-';
                                $isi .= '</td>';

                                $isi .= '<td>';
                                    $isi .= '-';
                                $isi .= '</td>';

                                $isi .= '<td>';
                                    $isi .= '-';
                                $isi .= '</td>';

                                $isi .= '<td>';
                                    $isi .= '-';
                                $isi .= '</td>';

                                $isi .= '<td>';
                                    $isi .= '-';
                                $isi .= '</td>';
                            $isi .= '</tr>';
                        }
                        $isi .= '</tbody>'; 

                    $isi .= '</table>';
                $isi .= '</div>';
            // ----------------------------------------------------------- Send
                $word = $isi;
                return $word;

            ///////////////////////////////////////////////////////////////
        }
    }
    
    if(!function_exists('define_perolehan_hki_bp'))
    {
        function define_perolehan_hki_bp( $id )
        {
            // ----------------------------------------------------------- Initialize 
                $data = Perolehan_hki::where('id_peneliti', '=', $id) 
                            ->whereRaw('tahun >= YEAR(DATE_SUB(CURDATE(), INTERVAL 10 YEAR))')
                            ->get();

                $isi = '<br/>';
            // ----------------------------------------------------------- Action
                $isi .= '<ol type="A" start="8" class="bold">';
                    $isi .= '<li>Perolehan HKI dalam 5-10 Tahun Terakhir</li>'; 
                $isi .= '</ol>';     

                $isi .= '<div class="">';
                    $isi .= '<table width="100%" class="border">'; 
                        $isi .= '<thead class="text-center">'; 
                            $isi .= '<tr>';
                                $isi .= '<th width="5%">No.</th>';
                                $isi .= '<th>Judul / Tema HKI</th>';
                                $isi .= '<th width="10%">Tahun</th>';
                                $isi .= '<th>Jenis</th>';
                                $isi .= '<th>Nomor P/ID</th>';
                            $isi .= '</tr>'; 
                        $isi .= '</thead>'; 
                        $isi .= '<tbody>'; 
                           
                        $counter = 0;
                        if(count($data) != 0 )
                        { 
                            foreach($data as $row)
                            {
                                $counter += 1;
                                    $isi .= '<tr>';
                                        $isi .= '<td class="text-center">';
                                            $isi .= $counter.'.';
                                        $isi .= '</td>';

                                        $isi .= '<td class="">';
                                            $isi .= $row->judul;
                                        $isi .= '</td>';

                                        $isi .= '<td class="text-center">';
                                            $isi .= $row->tahun;
                                        $isi .= '</td>';

                                        $isi .= '<td class="">';
                                            $isi .= $row->jenis;
                                        $isi .= '</td>';

                                        $isi .= '<td class="">';
                                            $isi .= $row->nomor;
                                        $isi .= '</td>';

                                    $isi .= '</tr>';
                            }
                        }
                        else
                        {
                            
                            $isi .= '<tr class="text-center">';
                                $isi .= '<td>'; 
                                    $isi .= '-';
                                $isi .= '</td>';

                                $isi .= '<td>';
                                    $isi .= '-';
                                $isi .= '</td>';

                                $isi .= '<td>';
                                    $isi .= '-';
                                $isi .= '</td>';

                                $isi .= '<td>';
                                    $isi .= '-';
                                $isi .= '</td>';

                                $isi .= '<td>';
                                    $isi .= '-';
                                $isi .= '</td>';
                            $isi .= '</tr>';
                        }
                        $isi .= '</tbody>'; 

                    $isi .= '</table>';
                $isi .= '</div>';
            // ----------------------------------------------------------- Send
                $word = $isi;
                return $word;

            ///////////////////////////////////////////////////////////////
        }
    }
    
    if(!function_exists('define_kebijakan_publik_bp'))
    {
        function define_kebijakan_publik_bp( $id )
        {
            // ----------------------------------------------------------- Initialize 
                $data = Kebijakan_publik::where('id_peneliti', '=', $id) 
                            ->whereRaw('tahun >= YEAR(DATE_SUB(CURDATE(), INTERVAL 5 YEAR))')
                            ->get();

                $isi = '<br/>';
            // ----------------------------------------------------------- Action
                $isi .= '<ol type="A" start="9" class="bold">';
                    $isi .= '<li>Pengalaman Merumuskan Kebijakan Publik / Rekayasa Sosial Lainnya dalam 5 Tahun Terakhir</li>'; 
                $isi .= '</ol>';      

                $isi .= '<div class="">';
                    $isi .= '<table width="100%" class="border">'; 
                        $isi .= '<thead class="text-center">'; 
                            $isi .= '<tr>';
                                $isi .= '<th width="5%">No.</th>';
                                $isi .= '<th>Judul / Tema / Jenis Rekayasa Sosial Lainnya yang Telah Diterapkan</th>';
                                $isi .= '<th width="10%">Tahun</th>';
                                $isi .= '<th>Tempat Penerapan</th>';
                                $isi .= '<th>Respon Masyarakat</th>';
                            $isi .= '</tr>'; 
                        $isi .= '</thead>'; 
                        $isi .= '<tbody>'; 
                           
                        $counter = 0;
                        if(count($data) != 0 )
                        { 
                            foreach($data as $row)
                            {
                                $counter += 1;
                                    $isi .= '<tr>';
                                        $isi .= '<td class="text-center">';
                                            $isi .= $counter.'.';
                                        $isi .= '</td>';

                                        $isi .= '<td class="">';
                                            $isi .= $row->judul;
                                        $isi .= '</td>';

                                        $isi .= '<td class="text-center">';
                                            $isi .= $row->tahun;
                                        $isi .= '</td>';

                                        $isi .= '<td class="">';
                                            $isi .= $row->tempat;
                                        $isi .= '</td>';

                                        $isi .= '<td class="">';
                                            $isi .= $row->respon;
                                        $isi .= '</td>';

                                    $isi .= '</tr>';
                            }
                        }
                        else
                        {
                            
                            $isi .= '<tr class="text-center">';
                                $isi .= '<td>'; 
                                    $isi .= '-';
                                $isi .= '</td>';

                                $isi .= '<td>';
                                    $isi .= '-';
                                $isi .= '</td>';

                                $isi .= '<td>';
                                    $isi .= '-';
                                $isi .= '</td>';

                                $isi .= '<td>';
                                    $isi .= '-';
                                $isi .= '</td>';

                                $isi .= '<td>';
                                    $isi .= '-';
                                $isi .= '</td>';
                            $isi .= '</tr>';
                        }
                        $isi .= '</tbody>'; 

                    $isi .= '</table>';
                $isi .= '</div>';
            // ----------------------------------------------------------- Send
                $word = $isi;
                return $word;

            ///////////////////////////////////////////////////////////////
        }
    }

    if(!function_exists('define_penghargaan_bp'))
    {
        function define_penghargaan_bp( $id )
        {
            // ----------------------------------------------------------- Initialize 
                $data = Penghargaan::where('id_peneliti', '=', $id) 
                            ->whereRaw('tahun >= YEAR(DATE_SUB(CURDATE(), INTERVAL 10 YEAR))')
                            ->get();

                $isi = '<br/>';
            // ----------------------------------------------------------- Action
                $isi .= '<ol type="A" start="10" class="bold">';
                    $isi .= '<li>Penghargaan dalam 10 Tahun Terakhir (dari pemerintah, asosiasi atau institusi lainnya)</li>'; 
                $isi .= '</ol>';       

                $isi .= '<div class="">';
                    $isi .= '<table width="100%" class="border">'; 
                        $isi .= '<thead class="text-center">'; 
                            $isi .= '<tr>';
                                $isi .= '<th width="5%">No.</th>';
                                $isi .= '<th>Jenis Penghargaan</th>';
                                $isi .= '<th>Institusi Pemberi Penghargaan</th>';
                                $isi .= '<th width="10%">Tahun</th>';
                            $isi .= '</tr>'; 
                        $isi .= '</thead>'; 
                        $isi .= '<tbody>'; 
                           
                        $counter = 0;
                        if(count($data) != 0 )
                        { 
                            foreach($data as $row)
                            {
                                $counter += 1;
                                    $isi .= '<tr>';
                                        $isi .= '<td class="text-center">';
                                            $isi .= $counter.'.';
                                        $isi .= '</td>';

                                        $isi .= '<td class="">';
                                            $isi .= $row->jenis;
                                        $isi .= '</td>';

                                        $isi .= '<td class="">';
                                            $isi .= $row->instansi;
                                        $isi .= '</td>';

                                        $isi .= '<td class="text-center">';
                                            $isi .= $row->tahun;
                                        $isi .= '</td>';
                                    $isi .= '</tr>';
                            }
                        }
                        else
                        {
                            
                            $isi .= '<tr class="text-center">';
                                $isi .= '<td>'; 
                                    $isi .= '-';
                                $isi .= '</td>';

                                $isi .= '<td>';
                                    $isi .= '-';
                                $isi .= '</td>';

                                $isi .= '<td>';
                                    $isi .= '-';
                                $isi .= '</td>';

                                $isi .= '<td>';
                                    $isi .= '-';
                                $isi .= '</td>';
                            $isi .= '</tr>';
                        }
                        $isi .= '</tbody>'; 

                    $isi .= '</table>';
                $isi .= '</div>';
            // ----------------------------------------------------------- Send
                $word = $isi;
                return $word;

            ///////////////////////////////////////////////////////////////
        }
    }

    if(!function_exists('define_pernyataan_bp'))
    {
        function define_pernyataan_bp( $judul )
        {
            // ----------------------------------------------------------- Initialize 
                $isi = '<br/>';
            // ----------------------------------------------------------- Action
            
                $isi .= '<div class="text-justify text-indent">';
                    $isi .= 'Semua data yang saya isikan dan tercantum dalam biodata ini 
                    adalah benar dan dapat dipertanggungjawabkan secara hukum. 
                    Apabila di kemudian hari ternyata dijumpai
                    ketidaksesuaian dengan kenyataan, saya sanggup menerima sanksi.';
                $isi .= '</div>';
            
                $isi .= '<div class="text-justify text-indent">';
                    $isi .= 'Demikian biodata ini saya buat dengan sebenarnya untuk memenuhi salah satu
                    persyaratan dalam pengajuan ';
                    
                    $isi .= '<span class="bold">';
                        $isi .= $judul.'.';
                    $isi .= '</span>'; 
                $isi .= '</div>';
            // ----------------------------------------------------------- Send
                $word = $isi;
                return $word;

            ///////////////////////////////////////////////////////////////
        }
    }
 
 