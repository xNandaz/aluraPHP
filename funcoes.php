<?php


// include - copia e cola // require é obrigatório // 
require_once 'foreach.php';

function depositar(array $conta, float $valorAdepositar): array
{
    if ($valorAdepositar > 0){
        $conta['saldo'] += $valorAdepositar;
    } else {
        exibemensagem (mensagem:"Depósitos precisam ser positivos.");
    } 

    return $conta;
}
    

function sacar(array $conta, float $valorAsacar): array
{
    if ($valorAsacar > $conta['saldo']) {
        echo exibemensagem(mensagem:"você não pode sacar");
    }
    else {
        $conta['saldo'] -= $valorAsacar;
    }
    
    return $conta;
}
function exibemensagem(string $mensagem): void
{
    echo $mensagem .'<br>';     
}

function titularComNomeMaiusculo(array &$conta){
    $conta['titular'] = strtoupper($conta['titular']);
}

//& recebe a conta em si e não a cópia

function exibeConta(array $conta){
    ['titular' => $titular, 'saldo' => $saldo] = $conta;
    echo "<li>Titular: $titular . Saldo: $saldo</li>";
}
