<?php

$base =readline("Enter base:");
$height =readline("Enter Height:");

function Area_Of_Triangle($base,$height)
{
    $top =$base * $height;
    $area = $top/2;
    echo "Area of Triangle is :$area cm²"."\n";


}

Area_Of_Triangle($base,$height);