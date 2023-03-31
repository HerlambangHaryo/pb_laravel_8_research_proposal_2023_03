<?php  

    if(!function_exists('define_spk'))
    {
        function define_spk($Penelitian)
        {
            // ----------------------------------------------------------- Initialize 
                $isi = '';
            // ----------------------------------------------------------- Action  
                $isi .= define_KOP_surat('Ketua', $Penelitian->ketua->perguruan_tinggi);
                $isi .= define_surat_pernyataan_kesanggupan('Ketua', 
                            $Penelitian->ketua->nama, 
                            $Penelitian->ketua->nidn, 
                            'Program',  
                            'tanggal_kontrak',  
                            'nomor_kontrak',  
                            $Penelitian->judul,  
                            'tahun_usulan',
                            'tahun_pelaksanaan',
                            'waktu_pelaksanaan',
                            'dana_penelitian'
                        ); 
                $isi .= define_tanda_tangan($Penelitian->ketua->nama,
                            $Penelitian->ketua->nidn,
                            $Penelitian->tanggal,
                            'Ketua'
                        );

                $isi .= define_KOP_surat('Anggota', $Penelitian->ketua->perguruan_tinggi);
                $isi .= define_surat_pernyataan_kesanggupan('Anggota', 
                            $Penelitian->anggota_1->nama, 
                            $Penelitian->anggota_1->nidn, 
                            'Program',  
                            'tanggal_kontrak',  
                            'nomor_kontrak',  
                            $Penelitian->judul,  
                            'tahun_usulan',
                            'tahun_pelaksanaan',
                            'waktu_pelaksanaan',
                            'dana_penelitian'
                        );
                $isi .= define_tanda_tangan($Penelitian->anggota_1->nama,
                            $Penelitian->anggota_2->nidn,
                            $Penelitian->tanggal,
                            'Anggota'
                        );
                        
                $isi .= define_KOP_surat('Anggota', $Penelitian->ketua->perguruan_tinggi);
                $isi .= define_surat_pernyataan_kesanggupan('Anggota', 
                            $Penelitian->anggota_2->nama, 
                            $Penelitian->anggota_2->nidn, 
                            'Program',  
                            'tanggal_kontrak',  
                            'nomor_kontrak',  
                            $Penelitian->judul,  
                            'tahun_usulan',
                            'tahun_pelaksanaan',
                            'waktu_pelaksanaan',
                            'dana_penelitian'
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

    if(!function_exists('define_surat_pernyataan_kesanggupan'))
    {
        function define_surat_pernyataan_kesanggupan($jabatan_pengusul, 
                $nama, 
                $nidn,
                $program_studi,
                $tanggal_kontrak,
                $nomor_kontrak,
                $judul,
                $tahun_usulan,
                $tahun_pelaksanaan,
                $waktu_pelaksanaan,
                $dana_penelitian
                )
        {
            // ----------------------------------------------------------- Initialize 
                $isi = '<br/>';
            // ----------------------------------------------------------- Action    /
                //SURAT PERNYATAAN KETUA
                $isi .= '<div class="text-center uppercase bold">';
                    $isi .= 'SURAT PERNYATAAN KESANGGUPAN PELAKSANAAN DAN<br/>PENYUSUNAN LAPORAN PENELITIAN';
                $isi .= '</div>';
                
                $isi .= '<br/>';

                $isi .= '<div class="text-indent">';
                    $isi .= 'Yang bertanda di bawah ini:';
                $isi .= '</div>';

                $isi .= '<div class="">';
                    $isi .= '<table class="lh-single">';
                        # Nama
                            $isi .= '<tr>';
                                $isi .= '<td class="text-indent">';
                                    $isi .= 'Nama';
                                $isi .= '</td>';
                                $isi .= '<td>:</td>';
                                $isi .= '<td>';
                                    $isi .= $nama;
                                $isi .= '</td>'; 
                            $isi .= '</tr>';
                        # NPT/NIDN
                            $isi .= '<tr>';
                                $isi .= '<td class="text-indent">';
                                    $isi .= 'NPT/NIDN';
                                $isi .= '</td>';
                                $isi .= '<td>:</td>';
                                $isi .= '<td>';
                                    $isi .= $nidn;
                                $isi .= '</td>'; 
                            $isi .= '</tr>';
                        # Prodi/Fakultas
                            $isi .= '<tr>';
                                $isi .= '<td class="text-indent">';
                                    $isi .= 'Prodi/Fakultas';
                                $isi .= '</td>';
                                $isi .= '<td>:</td>';
                                $isi .= '<td>';
                                    $isi .= $program_studi;
                                $isi .= '</td>'; 
                            $isi .= '</tr>';

                    $isi .= '</table>';
                $isi .= '</div>';

                $isi .= '<br/>';
                
                $isi .= '<div class="text-indent">';
                    $isi .= 'Sehubungan dengan kontrak penelitian:';
                $isi .= '</div>';

                
                $isi .= '<div class="">';
                    $isi .= '<table class="lh-single">';
                        # Tanggal Kontrak 
                            $isi .= '<tr>';
                                $isi .= '<td class="text-indent" width="40%">';
                                    $isi .= 'Tanggal Kontrak ';
                                $isi .= '</td>';
                                $isi .= '<td>:</td>';
                                $isi .= '<td>';
                                    $isi .= $tanggal_kontrak;
                                $isi .= '</td>'; 
                            $isi .= '</tr>';
                        # Nomor Kontrak 
                            $isi .= '<tr>';
                                $isi .= '<td class="text-indent">';
                                    $isi .= 'Nomor Kontrak ';
                                $isi .= '</td>';
                                $isi .= '<td>:</td>';
                                $isi .= '<td>';
                                    $isi .= $nomor_kontrak;
                                $isi .= '</td>'; 
                            $isi .= '</tr>';
                        # Judul Penelitian
                            $isi .= '<tr>';
                                $isi .= '<td class="text-indent">';
                                    $isi .= 'Judul Penelitian';
                                $isi .= '</td>';
                                $isi .= '<td>:</td>';
                                $isi .= '<td>';
                                    $isi .= $judul;
                                $isi .= '</td>'; 
                            $isi .= '</tr>';
                        # Tahun Usulan 
                            $isi .= '<tr>';
                                $isi .= '<td class="text-indent">';
                                    $isi .= 'Tahun Usulan';
                                $isi .= '</td>';
                                $isi .= '<td>:</td>';
                                $isi .= '<td>';
                                    $isi .= $tahun_usulan;
                                $isi .= '</td>'; 
                            $isi .= '</tr>';
                        # Tahun Pelaksanaan
                            $isi .= '<tr>';
                                $isi .= '<td class="text-indent">';
                                    $isi .= 'Tahun Pelaksanaan';
                                $isi .= '</td>';
                                $isi .= '<td>:</td>';
                                $isi .= '<td>';
                                    $isi .= $tahun_pelaksanaan;
                                $isi .= '</td>'; 
                            $isi .= '</tr>';
                        # Jangka Waktu Pelaksanaan
                            $isi .= '<tr>';
                                $isi .= '<td class="text-indent">';
                                    $isi .= 'Jangka Waktu Pelaksanaan';
                                $isi .= '</td>';
                                $isi .= '<td>:</td>';
                                $isi .= '<td>';
                                    $isi .= $waktu_pelaksanaan;
                                $isi .= '</td>'; 
                            $isi .= '</tr>';
                        # Dana Penelitian
                            $isi .= '<tr>';
                                $isi .= '<td class="text-indent">';
                                    $isi .= 'Dana Penelitian';
                                $isi .= '</td>';
                                $isi .= '<td>:</td>';
                                $isi .= '<td>';
                                    $isi .= $dana_penelitian;
                                $isi .= '</td>'; 
                            $isi .= '</tr>';

                    $isi .= '</table>';
                $isi .= '</div>';

                $isi .= '<br/>';

                $isi .= '<div class="text-justify text-indent">';
                    $isi .= 'Dengan ini menyatakan bahwa Saya bertanggungjawab penuh untuk menyelesaikan
                    Penelitian serta menyerahkan dan mengunggah laporan kegiatan (70% dan 100%), laporan
                    keuangan (70% dan 100%) dan luaran yang telah ditentukan pada setiap skema dan waktunya
                    sebagaimana diatur dalam Kontrak Penelitian tersebut di atas.';
                $isi .= '</div>';

                $isi .= '<div class="text-justify text-indent">';
                    $isi .= 'Apabila sampai dengan masa penyelesaian pekerjaan sebagaimana diatur dalam Kontrak
                    Penelitian tersebut di atas saya lalai/cidera janji/ dan/atau terjadi pemutusan Kontrak
                    Penelitian, saya bersedia untuk mengembalikan/menyetorkan kembali uang ke kas negara
                    sebesar nilai sisa pekerjaan yang belum ada prestasinya.';
                $isi .= '</div>';

                $isi .= '<div class="text-justify text-indent">';
                    $isi .= 'Demikian surat pernyataan ini dibuat dengan sebenarnya.';
                $isi .= '</div>';
 
            // ----------------------------------------------------------- Send
                $word = $isi;
                return $word;

            ///////////////////////////////////////////////////////////////
        }
    }
 
 