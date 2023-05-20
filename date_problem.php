<?php

$startdate =(string)readline("Start Date (yyyy-mm-dd): ");
$enddate =(string)readline("End Date (yyyy-mm-dd): ");
calculatedays($startdate,$enddate);

function calculatedays($startdate,$enddate)
{
    // converting the dates into seconds from july 1970 GMT sec.
    $calculate = strtotime($enddate)-strtotime($startdate);

    // The calculate returns in seconds format and we can divide by 1 days of seconds(1440min - 1 day , 86400 sec - 1 day)
    $noofdays = $calculate/(86400);
    echo $noofdays;
}