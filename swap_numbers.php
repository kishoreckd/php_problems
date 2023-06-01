<?php
$Input1 = readLine("Please enter a Number ");
$Input2 = readLine("Please enter a another Number ");

swapNumbers($Input1,$Input2);

function swapNumbers($N1,$N2){
    $N1 = (int)$N1;
    $N2 = (int)$N2;
    if(is_numeric((int)$N1) && is_numeric((int)$N2)){
        $N1 = $N1 + $N2;
        $N2 = $N1 - $N2;
        $N1 = $N1 - $N2;

        echo "Number 1 = ".$N1." Number 2 = ".$N2;
    }
    else{
        echo "Please enter a number only";
    }

}
