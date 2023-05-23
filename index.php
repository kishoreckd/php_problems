<?php


function checking($number)
{
    // adding a default variable considering to true to check
    $check = true;

    // if the number is 1 it runs this if condition.
    if ($number==1)
    {
        echo "$number is neither prime nor composite";
    }
    // if the number is greater than
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

checking(2)
?>