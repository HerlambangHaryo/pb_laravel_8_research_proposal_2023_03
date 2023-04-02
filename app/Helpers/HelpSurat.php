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
 
                    $isi .= '<table class="" width="100%">'; 
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
                                $isi .= '<span = "underline">'; 
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
        function define_paragraf($text)
        {
            // ----------------------------------------------------------- Initialize 
                $isi = '<br/>';
            // ----------------------------------------------------------- Action
                $isi .= '<div class="text-juxtify text-indent">';  
                    $isi .= $text;  
                $isi .= '</div>'; 

            // ----------------------------------------------------------- Send
                $word = $isi;
                return $word;

            ///////////////////////////////////////////////////////////////
        }
    }
 