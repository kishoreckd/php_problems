<?php

$keys = array(
    "field1"=>"first",
    "field2"=>"second",
    "field3"=>"third"
);

$values = array(
    "field1value"=>"dinosaur",
    "field2value"=>"pig",
    "field3value"=>"platypus"
);


$keyArray = [];
$valueArray = [];
foreach($keys as $key){
    array_push($keyArray,$key);
}
foreach($values as $value){
    array_push($valueArray,$value);
}

$output = array_combine($keyArray,$valueArray);

print_r($output);