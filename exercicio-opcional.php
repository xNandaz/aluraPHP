<?php

$carros = [
    'lMN-2345' => [
        'modelo' => 'VH',
        'marca' => 'Golf'
    ],
    'SJP-3456' => [
        'modelo' => 'Fiesta',
        'marca' => 'Ford'
    ],
    'QUP-0903' => [
        'modelo' => 'UNO',
        'marca' => 'Fiat'
    ]

];

foreach ($carros as $placa => $carro){
    echo $placa .': ' . $carro['modelo'] . PHP_EOL;
}