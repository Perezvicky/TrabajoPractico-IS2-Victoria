<?php
$numero= rand(1,20);

function Factorialde($digito)
{
    $mul = 1;

    for($i=$digito; $i > 0; $i--)
    {
        $mul = $mul * $i;
    } 
    echo "El resultado de realizar el factorial de ". $digito . " es " . $mul. "<br>";
}
function AlCubo($digito)
{
    $prod = 1;
    for($i=1; $i <= 3; $i++)
    {
        $prod = $prod * $digito;
    }
    echo "El resultado de realizar el cubo de ". $digito. " es ". $prod. "<br>";
}

function parOimpar($digito){
    if($digito%2==0){
        return "$digito es par"; 
    }else return "$digito es impar";
}


Factorialde($numero);
Alcubo($numero);
echo parOimpar($numero);
?>