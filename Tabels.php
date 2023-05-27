<?php

$Input_Num = readline("Enter a Table Number:");
$table=readline("limit:");

function table($Input_Num,$limit)
{
     $arr =array();

    for ($i=1;$i<=$limit;$i++)
    {
        $table =$Input_Num*$i;
        $TempArr=("$Input_Num*$i=$table");
        array_push($arr,$TempArr);
    }
    print_r($arr);
}


table($Input_Num,$table);