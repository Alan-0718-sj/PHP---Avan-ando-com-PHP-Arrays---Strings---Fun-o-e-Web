<?php

// Array associativos
$conta1 = [
    'titular' => 'Nan',
     'saldo' => 1000
    ];

      
$conta2 = [
    'titular' => 'Maria',
    'saldo' => 10000
];


$conta3 = [
    'titular' => 'Al Paltino',
    'saldo' => 500
];
// echo $conta2['titular'];

$contasCorrentes = [
    '123.456.789-10' => [
        'titular' => 'Nan',
         'saldo' => 1000
    ],
    '123.456.798-11' => [
        'titular' => 'Maria',
        'saldo' => 10000
    ],
    '123.456.789-12' => [
        'titular' => 'Al Paltino',
        'saldo' => 500
    ]
];

$contasCorrentes[] = [
    'titular' => 'Marta',
    'saldo' => 7000
];

$contasCorrentes['124.756.989-13'] = [
    'titular' => 'John',
    'saldo' => 3000
];

foreach ($contasCorrentes as $cpf => $conta) {
    echo 'Titular: ', $conta['titular'], ' - CPF: ', $cpf, ' - Saldo R$:  ', $conta['saldo'] .PHP_EOL;

}

// for ($i = 0; $i < count($contasCorrentes); $i++) {
//     echo $contasCorrentes[$i]['titular'] .PHP_EOL;
// }


