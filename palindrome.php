<?php
$GivenInput = readline("Enter Here: ");

$Check_ReveredString = "";
for($i=strlen($GivenInput)-1;$i>=0;$i--){
    $Check_ReveredString=$GivenInput[$i];
}
if($Check_ReveredString == $GivenInput){
    echo $GivenInput." is a Palindrome .\n";
}
else{
    echo $GivenInput." is not a Palindrome .\n";
}