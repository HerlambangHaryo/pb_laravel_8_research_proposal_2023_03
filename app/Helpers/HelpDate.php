<?php

    if(!function_exists('define_date'))
    {
        function define_date($status)
        {
            // ----------------------------------------------------------- Initialize
                $start = date("Y-m-d h:i:s");

            // ----------------------------------------------------------- Action
                $isi = $start;

            // ----------------------------------------------------------- Send
                $word = $isi;
                return $word;

            ///////////////////////////////////////////////////////////////
        }
    }

    if(!function_exists('define_bulan'))
    {
        function define_bulan($bulan)
        {
            // ----------------------------------------------------------- Initialize
                $isi = '';

            // ----------------------------------------------------------- Action
                if($bulan == 1){ $isi = ' Januari '; }
                elseif($bulan == 2){ $isi = ' Februari '; }
                elseif($bulan == 3){ $isi = ' Maret '; }
                elseif($bulan == 4){ $isi = ' April '; }
                elseif($bulan == 5){ $isi = ' Mei '; }
                elseif($bulan == 6){ $isi = ' Juni '; }
                elseif($bulan == 7){ $isi = ' Juli '; }
                elseif($bulan == 8){ $isi = ' Agustus '; }
                elseif($bulan == 9){ $isi = ' September '; }
                elseif($bulan == 10){ $isi = ' Oktober '; }
                elseif($bulan == 11){ $isi = ' November '; }
                elseif($bulan == 12){ $isi = ' Desember '; }

            // ----------------------------------------------------------- Send
                $word = $isi;
                return $word;

            ///////////////////////////////////////////////////////////////
        }
    }

    if(!function_exists('define_year'))
    {
        function define_year($date)
        {
            // ----------------------------------------------------------- Initialize
                $isi = '';
                $datex = date_create($date);

            // ----------------------------------------------------------- Action
                $isi .= date_format($datex,"Y");

            // ----------------------------------------------------------- Send
                $word = $isi;
                return $word;

            ///////////////////////////////////////////////////////////////
        }
    }
