<?php
$number =readline("Enter any Number:");
if (is_numeric($number)) {
        echo strrev(floor($number));

}
else
{
    echo "It Is Not A Number";
}