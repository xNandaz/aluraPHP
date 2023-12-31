<?php

$conta1 = [
    'titular' => 'Fabio',
    'saldo' => 2300
];

$conta2 = [
    'titular' => 'Fernanda',
    'saldo' => 3300
];

$conta3 = [
    'titular' => 'Cherri',
    'saldo' => 30
];

$contascorrentes = [$conta1, $conta2, $conta3];

for ($i = 0; $i < count($contascorrentes); $i++) {
    echo $contascorrentes[$i]['titular'] .PHP_EOL;
}