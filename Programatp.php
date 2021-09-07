<?php
$Factorial = rand(1,20);

function Factorialde($Digito)
{
    $Mul = 1;

    for($i=$Digito; $i > 0; $i--)
    {
        $Mul = $Mul * $i;
    } 
    echo $Mul. "<br>";
    echo $Digito. "<br>";
}
function AlCubo($Digito)
{
    for($i=1; $i <= 3; $i++)
    {
        $Prod = $Prod * $Digito;
    }
    echo $Prod;
}

Factorialde($Factorial);
?>