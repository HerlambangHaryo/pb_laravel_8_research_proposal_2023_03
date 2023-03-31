<?php  

    if(!function_exists('define_sp'))
    {
        function define_sp($Penelitian)
        {
            // ----------------------------------------------------------- Initialize 
                $isi = '';
            // ----------------------------------------------------------- Action    
                $isi .= define_KOP_surat('Ketua', $Penelitian->ketua->perguruan_tinggi);
                $isi .= define_surat_pengusul('Ketua', 
                            $Penelitian->ketua->nama, 
                            $Penelitian->ketua->nidn, 
                            'Program',  
                            'Pangkat',  
                            'Jabatan',  
                            $Penelitian->judul, 
                            $Penelitian->skema, 
                            $Penelitian->tahun, 
                            'Tanggal'    
                        );
                $isi .= define_tanda_tangan($Penelitian->ketua->nama,
                            $Penelitian->ketua->nidn,
                            $Penelitian->tanggal,
                            'Ketua'
                        );
  
                $isi .= define_KOP_surat('Anggota', $Penelitian->ketua->perguruan_tinggi);
                $isi .= define_surat_pengusul('Anggota', 
                            $Penelitian->anggota_1->nama, 
                            $Penelitian->anggota_1->nidn, 
                            'Program',  
                            'Pangkat',  
                            'Jabatan',  
                            $Penelitian->judul, 
                            $Penelitian->skema, 
                            $Penelitian->tahun, 
                            'Tanggal' 
                        );
                $isi .= define_tanda_tangan($Penelitian->anggota_1->nama,
                            $Penelitian->anggota_1->nidn,
                            $Penelitian->tanggal,
                            'Anggota'
                        );
                        
                $isi .= define_KOP_surat('Anggota', $Penelitian->ketua->perguruan_tinggi);
                $isi .= define_surat_pengusul('Anggota', 
                            $Penelitian->anggota_2->nama, 
                            $Penelitian->anggota_2->nidn, 
                            'Program',  
                            'Pangkat',  
                            'Jabatan',  
                            $Penelitian->judul, 
                            $Penelitian->skema, 
                            $Penelitian->tahun,  
                            'Tanggal' 
                        );
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

    if(!function_exists('define_surat_pengusul'))
    {
        function define_surat_pengusul($jabatan_pengusul, 
                $nama, 
                $nidn,
                $program_studi,
                $pangkat,
                $jabatan,
                $judul,
                $skema,
                $tahun,
                $tanggal
                )
        {
            // ----------------------------------------------------------- Initialize 
                $isi = '<br/>';
            // ----------------------------------------------------------- Action    /
                //SURAT PERNYATAAN KETUA
                $isi .= '<div class="text-center uppercase bold">';
                    $isi .= 'SURAT PERNYATAAN '.$jabatan_pengusul.' Peneliti';
                $isi .= '</div>';
                
                $isi .= '<br/>';
                
                $isi .= '<div class="">';
                    $isi .= '<table>';
                        # Nama
                            $isi .= '<tr>';
                                $isi .= '<td class="text-indent">';
                                    $isi .= 'Nama';
                                $isi .= '</td>';
                                $isi .= '<td>:</td>';
                                $isi .= '<td>';
                                    $isi .= $nama;
                                $isi .= '</td>';
                        # NIDN
                            $isi .= '<tr>';
                                $isi .= '<td class="text-indent">';
                                    $isi .= 'NIDN';
                                $isi .= '</td>';
                                $isi .= '<td>:</td>';
                                $isi .= '<td>';
                                    $isi .= $nidn;
                                $isi .= '</td>';
                            $isi .= '</tr>';
                        # Program Studi
                            $isi .= '<tr>';
                                $isi .= '<td class="text-indent">';
                                    $isi .= 'Program Studi';
                                $isi .= '</td>';
                                $isi .= '<td>:</td>';
                                $isi .= '<td>';
                                    $isi .= $program_studi;
                                $isi .= '</td>';
                            $isi .= '</tr>';
                        # Pangkat/Golongan
                            $isi .= '<tr>';
                                $isi .= '<td class="text-indent">';
                                    $isi .= 'Pangkat/Golongan';
                                $isi .= '</td>';
                                $isi .= '<td>:</td>';
                                $isi .= '<td>';
                                    $isi .= $jabatan;
                                $isi .= '</td>';
                            $isi .= '</tr>';
                        # Jabatan Fungsional
                            $isi .= '<tr>';
                                $isi .= '<td class="text-indent">';
                                    $isi .= 'Jabatan Fungsional';
                                $isi .= '</td>';
                                $isi .= '<td>:</td>';
                                $isi .= '<td>';
                                    $isi .= $jabatan;
                                $isi .= '</td>';
                            $isi .= '</tr>';

                    $isi .= '</table>';
                $isi .= '</div>';

                $isi .= '<br/>';

                $isi .= '<div class="text-justify text-indent">';
                    $isi .= 'Dengan ini menyatakan bahwa proposal penelitian saya dengan judul: ';

                        $isi .= '<span class="bold">';
                        $isi .= $judul;
                        $isi .= '</span>'; 

                    $isi .= ' yang diusulkan dalam skema Penelitian ';

                        $isi .= '<span class="bold">';
                        $isi .= $skema;
                        $isi .= '</span>'; 

                    $isi .= ' untuk tahun anggaran ';

                        $isi .= '<span class="bold">';
                            $isi .= $tahun;
                        $isi .= '</span>'; 

                    $isi .= ' bersifat original dan belum pernah dibiayai oleh Lembaga / sumber dana lain.
                    Bilamana dikemudian hari ditemukan ketidaksesuaian dengan pernyataan ini, maka saya
                    bersedia dituntut dan diproses sesuai ketentuan yang berlaku dan mengembalikan seluruh
                    biaya penelitian yang sudah diterima ke kas negara.';
                $isi .= '</div>';

                $isi .= '<div class="text-justify text-indent">';
                    $isi .= 'Demikian pernyataan ini dibuat sesungguhnya dan dengan sebenar-benarnya.';
                $isi .= '</div>';
            // ----------------------------------------------------------- Send
                $word = $isi;
                return $word;

            ///////////////////////////////////////////////////////////////
        }
    }
 
 