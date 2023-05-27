<?php

$Input_Num = readline("Enter a Table Number:");

function table($Input_Num)
{
     $arr =array();

    for ($i=1;$i<=10;$i++)
    {
        $table =$Input_Num*$i;
        $TempArr=("$Input_Num*$i=$table");
        array_push($arr,$TempArr);
    }
    print_r($arr);
}


table($Input_Num);