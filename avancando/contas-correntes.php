<?php

// Array associativos
$conta1 = [
    'titular' => 'Nan',
     'saldo' => 1000];

      
$conta2 = [
    'titular' => 'Maria',
    'saldo' => 10000
];


$conta3 = [
    'titular' => 'Al Paltino',
    'saldo' => 500
];
// echo $conta2['titular'];

$contasCorrentes = [$conta1, $conta2, $conta3];

for ($i = 0; $i < count($contasCorrentes); $i++) {
    echo $contasCorrentes[$i]['titular'] .PHP_EOL;
}


