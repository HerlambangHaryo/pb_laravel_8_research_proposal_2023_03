<?php
if (!function_exists('define_jadwal_bimbingan')) {
    function define_jadwal_bimbingan($inputDate, $status)
    {
        $inputTimestamp     = strtotime($inputDate);
        $day                = date('l', $inputTimestamp);
        
        
        // // Convert the input date to a timestamp
        // $inputTimestamp = strtotime($inputDate);

        // // Get the current timestamp (which represents the current date and time)
        // $currentTimestamp = time();

        // // Compare the timestamps
        // if ($inputTimestamp < $currentTimestamp) {
        //     $new_date = date('Y-m-d H:i:s', $currentTimestamp);
        // } elseif ($inputTimestamp > $currentTimestamp) {
        //     $new_date = date('Y-m-d H:i:s', $inputTimestamp);
        // } else {
        //     return "The input date ($inputDate) is the same as the current date and time.";
        // }

        // // // Create a DateTime object from the input date
        // // $dateTime = new DateTime($new_date);

        // // // Add 1 week to the DateTime object
        // // $dateTime->modify($status);

        // // // Get the formatted result with the same time (H:i:s)
        // // $resultDate = $dateTime->format('l, d m Y');

        // // Get the timestamp for the next Monday
        $nextMondayTimestamp = strtotime('next '.$day);

        // // Add one week to the timestamp to get the "next next Monday"
        $nextNextMondayTimestamp = strtotime('+1 week', $nextMondayTimestamp);

        // // Format the timestamps as dates (Y-m-d) and store them in variables
        $nextMondayDate = date('Y-m-d', $nextMondayTimestamp);
        $nextNextMondayDate = date('Y-m-d', $nextNextMondayTimestamp);

        if($status == 'next')
        {
            return date('l, d F Y', $nextMondayTimestamp);
        }
        else
        {
            return date('l, d F Y', $nextNextMondayTimestamp);
        }
    }
}