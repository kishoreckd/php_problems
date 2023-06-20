<?php


$Input = readLine("Please enter a year ");

function checkLeapYear($UserInput){
    if($UserInput % 400 == 0 || $UserInput % 4 == 0 || $UserInput % 100 == 0){
        echo "$UserInput is a Leap Year";
    }
    else{
        echo "$UserInput is not a Leap Year";
    }
}

checkLeapYear($Input);