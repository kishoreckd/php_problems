<?php
function upperCase($str)
{
    $Splitted= str_split($str);
$result = '';
for ($i = 0; $i < count($Splitted); $i++) {
$ch = ord($Splitted[$i]);

if ($Splitted[$i] >= 'a' && $Splitted[$i] <= 'z')
$result .= chr($ch - 32);
else
$result .= $Splitted[$i];
}
return $result;
}

//function calling
$Input = "hi everyone";
echo upperCase($Input);
