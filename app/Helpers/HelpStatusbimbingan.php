<?php 

    if(!function_exists('define_status_bimbingan'))
    {
        function define_status_bimbingan($status)
        {
            // ----------------------------------------------------------- Initialize 
                $isi = '';

            // ----------------------------------------------------------- Action   
                if($status == 1)
                {  
                    $isi = '<span class="badge bg-info " >Pengingat</span>';
                } 
                elseif($status == 2)
                {  
                    $isi = '<span class="badge bg-danger " >Tidak Hadir</span>';
                } 
                elseif($status == 3)
                {  
                    $isi = '<span class="badge bg-success " >Selesai</span>';
                }   
                elseif($status == 4)
                {  
                    $isi = '<span class="badge bg-indigo " >Ditunda</span>';
                }  
            // ----------------------------------------------------------- Send
                $word = $isi;
                return $word;

            ///////////////////////////////////////////////////////////////
        }
    }