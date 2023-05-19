<?php


function checking($number)
{

    for ($i=2;$i<$number;$i++){
        if ($number %$i ==0)
        {
            return 0;
        }
        else
        {
            return 1;
        }
    }



}

if(checking(7))
{
    echo "prime";
}
else
{
    echo "Composite Number";
}

?>