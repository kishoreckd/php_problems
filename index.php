<?php


function checking($number)
{
    if ($number==1)
    {
        echo "\"1\" is neither prime nor composite";
    }
else
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



}

if(checking(3))
{
    echo "prime Number";
}
else
{
    echo "Composite Number";
}

?>