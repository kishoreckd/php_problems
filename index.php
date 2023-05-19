<?php


function checking($number)
{
    $check = true;

    if ($number==1)
    {
        echo "$number is neither prime nor composite";
    }
    else if($number>1){
        for ($i=2;$i<$number;$i++)
        {
            if($number % $i == 0){
                $check = false;
            }

        }
        if($check){
            echo "prime number";
        }
        else{
            echo "not prime number";
        }
    }

}

checking(211)

?>