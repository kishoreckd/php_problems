<?php


$inputNum=readline("Enter the Number:");

function fibonacci($inputNum)
{
    $temp1=0;
    $temp2=1;

    for($i=0;$i<$inputNum;$i++){
        $static = $temp1+$temp2;
        $temp1 = $temp2;
        $temp2 = $static;
        echo " ".$static." ";
    }
}

fibonacci($inputNum);


