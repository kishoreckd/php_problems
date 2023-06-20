<?php
$Table = array();
$Table['val1'] = array(1, 2);
$Table['val2'] = 3;
$Table['val3'] = array(4, 5);
var_dump($Table);


 $newArray = array();

$newArray = array_merge($newArray, $Table['val1']);
// Table$Table['val2'] is not an array data type, if you want to concatenate another variable, that variable must be of the same data type. So, I have changed the data type of number to array. It's works properly
$newArray = array_merge($newArray, array($Table['val2']));
$newArray = array_merge($newArray, $Table['val3']);

print_r($newArray);