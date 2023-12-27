<?php

$peso = 47;
$altura = 1.54;
$imc = $peso / $altura **2;

echo "Seu IMC é: " .$imc .PHP_EOL;

if ($imc < 18.5){
    echo " está abaixo";
} elseif ($imc < 25){
    echo " está dentro";
} else {
    echo " está acima";
}
echo " do recomendado";
