<?php

$array = [1,2,4];

function arrayCheck($getArray){
    if($getArray){
        return "Array has Value";
    }
    else{
        return "It's empty array";
    }
}

echo arrayCheck($array);