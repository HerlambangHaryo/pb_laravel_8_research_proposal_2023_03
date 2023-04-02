<?php 

    if(!function_exists('define_tabel_anggaran'))
    {
        function define_tabel_anggaran($Penelitian)
        {
            // ----------------------------------------------------------- Initialize 
                $isi = '<br/>';
            // ----------------------------------------------------------- Action
                $isi .= '<div class=" ">';   
                    $isi .= '<table class="text-size-10pt lh-15 vertical-align-middle border" 
                            width="100%">';  
                        $isi .= define_table_honor($Penelitian); 
                        $isi .= define_table_non_honor($Penelitian, 2, 'Peralatan Penunjang'); 
                        $isi .= define_table_non_honor($Penelitian, 3, 'Bahan Habis Pakai'); 
                        $isi .= define_table_non_honor($Penelitian, 4, 'Perjalanan'); 
                        $isi .= define_table_non_honor($Penelitian, 5, 'Lain-lain'); 
                        $isi .= define_table_anggaran_total($Penelitian); 
                    $isi .= '</table>'; 
                $isi .= '</div>';

            // ----------------------------------------------------------- Send
                $word = $isi;
                return $word;

            ///////////////////////////////////////////////////////////////
        }
    }
  
    if(!function_exists('define_table_honor'))
    {
        function define_table_honor($Penelitian)
        {
            // ----------------------------------------------------------- Initialize 
                $isi = '';
            // ----------------------------------------------------------- Action 
                $isi .= '<tr class="" style="background-color:#E2EFDA">';
                    $isi .= '<td class="bold" colspan="5">1. HONOR</td>'; 
                $isi .= '</tr>';  

                $isi .= '<tr class="">';
                    $isi .= '<td class="text-center" rowspan="2">Honor</td>'; 
                    $isi .= '<td class="text-center" rowspan="2">Honor/Jam<br/>(Rp.)</td>'; 
                    $isi .= '<td class="text-center">Waktu<br/>(Jam/Minggu)</td>'; 
                    $isi .= '<td class="text-center">Minggu</td>'; 
                    $isi .= '<td class="text-center">Honor Pertahun</td>'; 
                $isi .= '</tr>'; 
                $isi .= '<tr class="">';
                    $isi .= '<td class="text-center">Tahun I</td>';  
                    $isi .= '<td class="text-center">Tahun I</td>'; 
                    $isi .= '<td class="text-center">Tahun I</td>'; 
                $isi .= '</tr>'; 

                $total_harga = 0;

                foreach($Penelitian as $row)
                {
                    if($row->kategori == 'Honor')
                    { 
                        $isi .= '<tr class="">';
                            $isi .= '<td class="">'; 
                                $isi .= $row->kegiatan;
                            $isi .= '</td>'; 
                            $isi .= '<td class="text-right">';  
                                $isi .= 'Rp.'.number_format($row->harga,0,",",".");
                            $isi .= '</td>'; 
                            $isi .= '<td class="text-center">';  
                            $isi .=  $row->kuantitas;
                            $isi .= '</td>'; 
                            $isi .= '<td class="text-right">'; 
                            $isi .= 'Rp.'.number_format(($row->harga * $row->kuantitas),0,",",".");
                            $isi .= '</td>'; 
                            $isi .= '<td class="text-right">'; 
                            $isi .= 'Rp.'.number_format(($row->harga * $row->kuantitas * 4),0,",",".");
                                $total_harga += ($row->harga * $row->kuantitas * 4);
                            $isi .= '</td>'; 
                        $isi .= '</tr>'; 
                    }
                }

                $isi .= '<tr class="">';
                    $isi .= '<td class="italic" colspan="4"><i>SUB TOTAL (Rp.)</i></td>';   
                    $isi .= '<td class="text-right bold italic">';  
                        $isi .= '<i>Rp.'.number_format($total_harga,0,",",".").'</i>';
                    $isi .= '</td>'; 
                $isi .= '</tr>'; 

            // ----------------------------------------------------------- Send
                $word = $isi;
                return $word;

            ///////////////////////////////////////////////////////////////
        }
    }
  
    if(!function_exists('define_table_non_honor'))
    {
        function define_table_non_honor($Penelitian, $nomor, $kategori)
        {
            // ----------------------------------------------------------- Initialize 
                $isi = '';
            // ----------------------------------------------------------- Action 
                $isi .= '<tr class="" style="background-color:#E2EFDA">';
                    $isi .= '<td class="bold uppercase" colspan="5">'.$nomor.'. '.$kategori.'</td>'; 
                $isi .= '</tr>';  

                $isi .= '<tr class="">';
                    $isi .= '<td class="text-center" rowspan="2">Honor</td>'; 
                    $isi .= '<td class="text-center" rowspan="2">Justifikasi<br/>Pemakaian</td>'; 
                    $isi .= '<td class="text-center">Kuantitas</td>'; 
                    $isi .= '<td class="text-center" rowspan="2">Harga Satuan<br/>(Rp.)</td>'; 
                    $isi .= '<td class="text-center">Harga per Tahun</td>'; 
                $isi .= '</tr>'; 
                $isi .= '<tr class="">';
                    $isi .= '<td class="text-center">Tahun I</td>';   
                    $isi .= '<td class="text-center">Tahun I</td>'; 
                $isi .= '</tr>'; 

                $total_harga = 0;

                foreach($Penelitian as $row)
                {
                    if($row->kategori == $kategori)
                    { 
                        $isi .= '<tr class="">';
                            $isi .= '<td class="">'; 
                                $isi .= $row->kegiatan;
                            $isi .= '</td>'; 
                            $isi .= '<td class="text-center">';  
                                $isi .= $row->justifikasi_anggaran;
                            $isi .= '</td>'; 
                            $isi .= '<td class="text-center">';  
                            $isi .=  $row->kuantitas;
                            $isi .= '</td>'; 
                            $isi .= '<td class="text-right">'; 
                            $isi .= 'Rp.'.number_format(($row->harga),0,",",".");
                            $isi .= '</td>'; 
                            $isi .= '<td class="text-right">'; 
                            $isi .= 'Rp.'.number_format(($row->harga * $row->kuantitas),0,",",".");
                                $total_harga += ($row->harga * $row->kuantitas);
                            $isi .= '</td>'; 
                        $isi .= '</tr>'; 
                    }
                }

                $isi .= '<tr class="">';
                    $isi .= '<td class="italic" colspan="4"><i>SUB TOTAL (Rp.)</i></td>';   
                    $isi .= '<td class="text-right bold italic">';  
                        $isi .= '<i>Rp.'.number_format($total_harga,0,",",".").'</i>';
                    $isi .= '</td>'; 
                $isi .= '</tr>'; 

            // ----------------------------------------------------------- Send
                $word = $isi;
                return $word;

            ///////////////////////////////////////////////////////////////
        }
    }
  
    if(!function_exists('define_table_anggaran_total'))
    {
        function define_table_anggaran_total($Penelitian)
        {
            // ----------------------------------------------------------- Initialize 
                $isi = '';

                $total_harga = 0;
            // ----------------------------------------------------------- Action    
                foreach($Penelitian as $row)
                {
                    if($row->kategori == 'Honor')
                    {  
                        $total_harga += ($row->harga * $row->kuantitas * 4); 
                    }
                    else
                    {
                        $total_harga += ($row->harga * $row->kuantitas);  
                    }
                }
 
                $isi .= '<tr class=""  style="background-color:#C6E0B4">';
                    $isi .= '<td class="italic" colspan="4">TOTAL ANGGARAN YANG DIPERLUKAN SETIAP TAHUN (Rp.)</td>';   
                    $isi .= '<td class="text-right bold italic">';   
                    $isi .= '<i>Rp.'.number_format($total_harga,0,",",".").'</i>';
                    $isi .= '</td>'; 
                $isi .= '</tr>'; 
                $isi .= '<tr class=""  style="background-color:#C6E0B4">';
                    $isi .= '<td class="italic" colspan="4">TOTAL ANGGARAN YANG DIPERLUKAN SETIAP TAHUN (Rp.)</td>';   
                    $isi .= '<td class="text-right bold italic">';   
                    $isi .= '<i>Rp.'.number_format($total_harga,0,",",".").'</i>';
                    $isi .= '</td>'; 
                $isi .= '</tr>'; 

            // ----------------------------------------------------------- Send
                $word = $isi;
                return $word;

            ///////////////////////////////////////////////////////////////
        }
    }