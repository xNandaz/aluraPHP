<?php

require_once 'funcoes.php';

$contascorrentes = [
   42113621303 => [
    'titular' => 'Fabio',
    'saldo' => 2300
],
   42113621302 => [
    'titular' => 'Fernanda',
    'saldo' => 3300
],
   42113621313 =>[
    'titular' => 'Cherri',
    'saldo' => 1000
]
   ];
   

   $contascorrentes['42113621302'] = depositar($contascorrentes['42113621302'], valorAdepositar: 300);

   $contascorrentes['42113621303'] = sacar($contascorrentes['42113621303'], valorAsacar: 500);
   $contascorrentes['42113621302'] = sacar($contascorrentes['42113621302'], valorAsacar: 500);
   $contascorrentes['42113621313'] = sacar($contascorrentes['42113621313'], valorAsacar: 500);

   titularComNomeMaiusculo (conta: $contascorrentes['42113621302']);

   unset ($contascorrentes['42113621313']);

  // echo "<ul>";
  // foreach ($contascorrentes as $cpf => $conta) {
  //  ['titular' => $titular, 'saldo' => $saldo] = $conta;
   // echo exibeConta($conta);
// }
//echo "</ul>";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página</title>
</head>
<body>
    <h1>Contas Correntes</h1>
    <dl>
        <?php foreach ($contascorrentes as $cpf =>$conta) { ?>
        <dt> 
            <h3><?= $conta ['titular']; ?> - <?= $cpf; ?> </h3>
        </dt>
        <dd>
        Saldo:<?= $conta['saldo']; ?>

        </dd>
       
    </dl>
    <?php } ?>
</body>
</html>


