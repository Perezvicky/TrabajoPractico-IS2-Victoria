<?php
$Numero= rand(1,20);

function Factorialde($Digito)
{
    $Mul = 1;

    for($i=$Digito; $i > 0; $i--)
    {
        $Mul = $Mul * $i;
    } 
    echo "El resultado de realizar el factorial de ". $Digito . " es " . $Mul. "<br>";
}
function AlCubo($Digito)
{
    $Prod = 1;
    for($i=1; $i <= 3; $i++)
    {
        $Prod = $Prod * $Digito;
    }
    echo "El resultado de realizar el cubo de ". $Digito. " es ". $Prod. "<br>";
}



Factorialde($Numero);
Alcubo($Numero);
?>