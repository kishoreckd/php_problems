<?php
$inputnum =readline("Enter The Number");


function factorial ($inputnum){
    $n1 =1;
    for ($i=1;$i<=$inputnum;$i++)
    {
        $n1 = $n1*$i;
    }
    echo $n1;
}
factorial($inputnum);