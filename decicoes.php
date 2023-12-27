<?php


$idade = 16;
$numerodepessoa = 2;

echo 'só pode entrar a partir de 18 anos ou ';
echo 'a partir de 16 anos acompanhado.' .PHP_EOL;

if ($idade >= 18){
    echo "você tem $idade". PHP_EOL;
    echo 'pode entrar sozinho';
}
else if  ($idade >= 16 && $numerodepessoa > 1){
    
    echo "você tem $idade anos". PHP_EOL;
    echo 'está acompanhado, pode entrar.';
    }
 else{
    echo 'você é menor de idade e está sozinho, não poderá entrar.';
 }

