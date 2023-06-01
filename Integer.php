<?php

function integer_array($arr){

    $ascending=[];
    $descending=[];
    for($i=0;$i<count($arr);$i++){
        $ascending[]=$arr[$i];
        $descending[]=$arr[$i];
    }
    rsort($descending);
    print_r($descending);
    sort($ascending);
    print_r ($ascending);

}

integer_array(array(1,2,3,-1,4,-5,-6));
