<?php 

    if(!function_exists('define_KOP_surat'))
    {
        function define_KOP_surat($jabatan_pengusul, $Perguruan_tinggi)
        {
            // ----------------------------------------------------------- Initialize 
                $isi = '';
            // ----------------------------------------------------------- Action
                $isi .= '<div class=" ';

                if($jabatan_pengusul != 'Ketua')
                {
                    $isi .= 'heading_bp'; 
                }
                
                $isi .= '">'; 

                    $route =  asset('/public/storage/perguruan_tinggi/').'/'.$Perguruan_tinggi->logo;

                    $isi .= '<table class="text-center border-bottom-ridge-4 text-size-10pt lh-15 vertical-align-middle" width="100%">'; 
                        $isi .= '<tr class="vertical-align-middle">';
                            $isi .= '<td rowspan="2" class="vertical-align-middle">'; 
                                $isi .= '<img width="94.5px" src="'.$route.'" alt="">';
                            $isi .= '</td>'; 
                            $isi .= '<td class="vertical-align-middle">'; 
                                $isi .= '<div class="uppercase bold lh-15">'; 
                                    $isi .= 'KEMENTRIAN PENDIDIKAN DAN KEBUDAYAAN';
                                        $isi .= '<br/>';   
                                    $isi .= 'LEMBAGA PENELITIAN DAN PENGABDIAN MASYARAKAT';
                                    $isi .= '<br/>';   
                                    $isi .= $Perguruan_tinggi->nama;
                                $isi .= '</div>';  
                                $isi .= '<div class="">'; 
                                    $isi .= $Perguruan_tinggi->alamat;
                                    $isi .= ', ';
                                    $isi .= $Perguruan_tinggi->kota;
                                    $isi .= ' Telp/Fax ';
                                    $isi .= $Perguruan_tinggi->telepon;
                                $isi .= '</div>';  
                            $isi .= '</td>'; 
                        $isi .= '</tr>'; 

                    $isi .= '</table>'; 
                $isi .= '</div>';

            // ----------------------------------------------------------- Send
                $word = $isi;
                return $word;

            ///////////////////////////////////////////////////////////////
        }
    }

    if(!function_exists('define_tanda_tangan'))
    {
        function define_tanda_tangan($nama, $nidn, $tanggal, $jabatan_pengusul)
        {
            // ----------------------------------------------------------- Initialize 
                $isi = '<br/>';
            // ----------------------------------------------------------- Action
                $isi .= '<div class="  ">'; 
 
                    $isi .= '<table class="text-center" width="100%">'; 
                        $isi .= '<tr>';
                            $isi .= '<td width="50%">';  
                            $isi .= '</td>';  
                            $isi .= '<td width="50%">'; 
                                $isi .= 'Surabaya, '; 
                                $isi .= define_date($tanggal); 
                                $isi .= '<br/>'; 
                                $isi .= 'Yang Menyatakan,'; 
                                $isi .= '<br/>'; 
                                $isi .= $jabatan_pengusul.' Peneliti,'; 
                                $isi .= '<br/>'; 
                                $isi .= '<br/>'; 
                                $isi .= '<br/>'; 
                                $isi .= '<br/>';  
                                $isi .= '<span class = "underline">'; 
                                    $isi .= $nama; 
                                $isi .= '</span>'; 
                                $isi .= '<br/>'; 
                                $isi .= 'NIDN. '; 
                                $isi .= $nidn; 
                            $isi .= '</td>';  
                        $isi .= '</tr>';  

                    $isi .= '</table>'; 
                $isi .= '</div>';

                $isi .= '<div class="page_break_only_screen"></div>'; 

            // ----------------------------------------------------------- Send
                $word = $isi;
                return $word;

            ///////////////////////////////////////////////////////////////
        }
    }

    if(!function_exists('define_paragraf'))
    {
        function define_paragraf($text, $helper, $maks)
        {
            // ----------------------------------------------------------- Initialize 
                $isi = '<br/>';
                $count = str_word_count($text);
            // ----------------------------------------------------------- Action 
                $isi .= '<span class="paragraf-helper">';    
                    $isi .= $helper . ' (' . $count .' / '. $maks.')'; 
                $isi .= '</span>'; 
            
                $isi .= '<div class="text-justify text-indent">';  
                    $isi .= $text;  
                $isi .= '</div>'; 

            // ----------------------------------------------------------- Send
                $word = $isi;
                return $word;

            ///////////////////////////////////////////////////////////////
        }
    }

    if(!function_exists('define_metode_penelitian'))
    {
        function define_metode_penelitian($Penelitian)
        {
            // ----------------------------------------------------------- Initialize 
                $isi = '<br/>'; 
            // ----------------------------------------------------------- Action  
            
                $isi .= '<div class="bold text-center mb-6px" id="table_jadwal_penelitian">'; 
                    $isi .= 'Tabel 1. Jadwal Penelitian';
                $isi .= '</div>';

                $isi .= '<div class="">';
                
                    $isi .= '<table class="text-size-10pt lh-15 vertical-align-middle border" 
                                width="100%">';   
                        $isi .= '<tr class="text-center">';
                            $isi .= '<td class="" rowspan="2">No.</td>';  
                            $isi .= '<td class="" rowspan="2">Nama Kegiatan</td>'; 
                            $isi .= '<td class="" colspan="12">Bulan</td>'; 
                            $isi .= '<td class="" rowspan="2">Indikator Capaian</td>'; 
                        $isi .= '</tr>';    
                        $isi .= '<tr class="text-center">';
                            $isi .= '<td class="">1</td>';  
                            $isi .= '<td class="">2</td>';  
                            $isi .= '<td class="">3</td>';  
                            $isi .= '<td class="">4</td>';  
                            $isi .= '<td class="">5</td>';  
                            $isi .= '<td class="">6</td>';  
                            $isi .= '<td class="">7</td>';  
                            $isi .= '<td class="">8</td>';  
                            $isi .= '<td class="">9</td>';  
                            $isi .= '<td class="">10</td>';  
                            $isi .= '<td class="">11</td>';  
                            $isi .= '<td class="">12</td>';   
                        $isi .= '</tr>'; 

                        $counter = 0;

                        foreach ($Penelitian as $row) 
                        {   
                            $isi .= '<tr class="">';
                                $isi .= '<td class="text-center">';  
                                    $counter += 1;
                                    $isi .= $counter.'.';
                                $isi .= '</td>';   
                                $isi .= '<td class="">'; 
                                    $isi .= $row->kegiatan;
                                $isi .= '</td>';   
                                
                                $isi .= '<td class="';
                                    if(str_contains($row->bulan, '1;'))
                                    {
                                        $isi .= ' biru-jadwal-penelitian ';  
                                    }    
                                $isi .= '"></td>';  
                                $isi .= '<td class="';
                                    if(str_contains($row->bulan, '2;'))
                                    {
                                        $isi .= ' biru-jadwal-penelitian ';  
                                    }    
                                $isi .= '"></td>';  
                                $isi .= '<td class="';
                                    if(str_contains($row->bulan, '3;'))
                                    {
                                        $isi .= ' biru-jadwal-penelitian ';  
                                    }    
                                $isi .= '"></td>';  
                                $isi .= '<td class="';
                                    if(str_contains($row->bulan, '4;'))
                                    {
                                        $isi .= ' biru-jadwal-penelitian ';  
                                    }    
                                $isi .= '"></td>';  
                                $isi .= '<td class="';
                                    if(str_contains($row->bulan, '5;'))
                                    {
                                        $isi .= ' biru-jadwal-penelitian ';  
                                    }    
                                $isi .= '"></td>';  
                                $isi .= '<td class="';
                                    if(str_contains($row->bulan, '6;'))
                                    {
                                        $isi .= ' biru-jadwal-penelitian ';  
                                    }    
                                $isi .= '"></td>';  
                                $isi .= '<td class="';
                                    if(str_contains($row->bulan, '7;'))
                                    {
                                        $isi .= ' biru-jadwal-penelitian ';  
                                    }    
                                $isi .= '"></td>';  
                                $isi .= '<td class="';
                                    if(str_contains($row->bulan, '8;'))
                                    {
                                        $isi .= ' biru-jadwal-penelitian ';  
                                    }    
                                $isi .= '"></td>';  
                                $isi .= '<td class="';
                                    if(str_contains($row->bulan, '9;'))
                                    {
                                        $isi .= ' biru-jadwal-penelitian ';  
                                    }    
                                $isi .= '"></td>';  
                                $isi .= '<td class="';
                                    if(str_contains($row->bulan, '10;'))
                                    {
                                        $isi .= ' biru-jadwal-penelitian ';  
                                    }    
                                $isi .= '"></td>';  
                                $isi .= '<td class="';
                                    if(str_contains($row->bulan, '11;'))
                                    {
                                        $isi .= ' biru-jadwal-penelitian ';  
                                    }    
                                $isi .= '"></td>';  
                                $isi .= '<td class="';
                                    if(str_contains($row->bulan, '12;'))
                                    {
                                        $isi .= ' biru-jadwal-penelitian ';  
                                    }    
                                $isi .= '"></td>';  
                                $isi .= '<td class="">'; 
                                    $isi .= $row->indikator_capaian;
                                $isi .= '</td>';   
                            $isi .= '</tr>';    
                        }
                    $isi .= '</table>';  
                $isi .= '</div>'; 

            // ----------------------------------------------------------- Send
                $word = $isi;
                return $word;

            ///////////////////////////////////////////////////////////////
        }
    }

    if(!function_exists('define_jadwal_penelitian'))
    {
        function define_jadwal_penelitian($Penelitian)
        {
            // ----------------------------------------------------------- Initialize 
                $isi = '<br/>'; 
            // ----------------------------------------------------------- Action  
            
                $isi .= '<div class="bold text-center mb-6px" id="table_jadwal_penelitian">'; 
                    $isi .= 'Tabel 1. Jadwal Penelitian';
                $isi .= '</div>';

                $isi .= '<div class="">';
                
                    $isi .= '<table class="text-size-10pt lh-15 vertical-align-middle border" 
                                width="100%">';   
                        $isi .= '<tr class="text-center">';
                            $isi .= '<td class="" rowspan="2">No.</td>';  
                            $isi .= '<td class="" rowspan="2">Nama Kegiatan</td>'; 
                            $isi .= '<td class="" colspan="12">Bulan</td>'; 
                            $isi .= '<td class="" rowspan="2">Indikator Capaian</td>'; 
                        $isi .= '</tr>';    
                        $isi .= '<tr class="text-center">';
                            $isi .= '<td class="">1</td>';  
                            $isi .= '<td class="">2</td>';  
                            $isi .= '<td class="">3</td>';  
                            $isi .= '<td class="">4</td>';  
                            $isi .= '<td class="">5</td>';  
                            $isi .= '<td class="">6</td>';  
                            $isi .= '<td class="">7</td>';  
                            $isi .= '<td class="">8</td>';  
                            $isi .= '<td class="">9</td>';  
                            $isi .= '<td class="">10</td>';  
                            $isi .= '<td class="">11</td>';  
                            $isi .= '<td class="">12</td>';   
                        $isi .= '</tr>'; 

                        $counter = 0;

                        foreach ($Penelitian as $row) 
                        {   
                            $isi .= '<tr class="">';
                                $isi .= '<td class="text-center">';  
                                    $counter += 1;
                                    $isi .= $counter.'.';
                                $isi .= '</td>';   
                                $isi .= '<td class="">'; 
                                    $isi .= $row->kegiatan;
                                $isi .= '</td>';   
                                
                                $isi .= '<td class="';
                                    if(str_contains($row->bulan, '1;'))
                                    {
                                        $isi .= ' biru-jadwal-penelitian ';  
                                    }    
                                $isi .= '"></td>';  
                                $isi .= '<td class="';
                                    if(str_contains($row->bulan, '2;'))
                                    {
                                        $isi .= ' biru-jadwal-penelitian ';  
                                    }    
                                $isi .= '"></td>';  
                                $isi .= '<td class="';
                                    if(str_contains($row->bulan, '3;'))
                                    {
                                        $isi .= ' biru-jadwal-penelitian ';  
                                    }    
                                $isi .= '"></td>';  
                                $isi .= '<td class="';
                                    if(str_contains($row->bulan, '4;'))
                                    {
                                        $isi .= ' biru-jadwal-penelitian ';  
                                    }    
                                $isi .= '"></td>';  
                                $isi .= '<td class="';
                                    if(str_contains($row->bulan, '5;'))
                                    {
                                        $isi .= ' biru-jadwal-penelitian ';  
                                    }    
                                $isi .= '"></td>';  
                                $isi .= '<td class="';
                                    if(str_contains($row->bulan, '6;'))
                                    {
                                        $isi .= ' biru-jadwal-penelitian ';  
                                    }    
                                $isi .= '"></td>';  
                                $isi .= '<td class="';
                                    if(str_contains($row->bulan, '7;'))
                                    {
                                        $isi .= ' biru-jadwal-penelitian ';  
                                    }    
                                $isi .= '"></td>';  
                                $isi .= '<td class="';
                                    if(str_contains($row->bulan, '8;'))
                                    {
                                        $isi .= ' biru-jadwal-penelitian ';  
                                    }    
                                $isi .= '"></td>';  
                                $isi .= '<td class="';
                                    if(str_contains($row->bulan, '9;'))
                                    {
                                        $isi .= ' biru-jadwal-penelitian ';  
                                    }    
                                $isi .= '"></td>';  
                                $isi .= '<td class="';
                                    if(str_contains($row->bulan, '10;'))
                                    {
                                        $isi .= ' biru-jadwal-penelitian ';  
                                    }    
                                $isi .= '"></td>';  
                                $isi .= '<td class="';
                                    if(str_contains($row->bulan, '11;'))
                                    {
                                        $isi .= ' biru-jadwal-penelitian ';  
                                    }    
                                $isi .= '"></td>';  
                                $isi .= '<td class="';
                                    if(str_contains($row->bulan, '12;'))
                                    {
                                        $isi .= ' biru-jadwal-penelitian ';  
                                    }    
                                $isi .= '"></td>';  
                                $isi .= '<td class="">'; 
                                    $isi .= $row->indikator_capaian;
                                $isi .= '</td>';   
                            $isi .= '</tr>';    
                        }
                    $isi .= '</table>';  
                $isi .= '</div>'; 

            // ----------------------------------------------------------- Send
                $word = $isi;
                return $word;

            ///////////////////////////////////////////////////////////////
        }
    }
 