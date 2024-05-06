<?php
// E_WARNING | E_NOTICE | E_ERROR
require_once 'funcoes.php';
require_once 'funcoes.php';

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
        'titular' => 'Al',
        'saldo' => 500
    ]
];

// Sacar
$contasCorrentes['123.456.798-11'] = sacar($contasCorrentes['123.456.798-11'], valorASacar: 4000);

$contasCorrentes['123.456.789-12'] = sacar($contasCorrentes['123.456.789-12'], valorASacar: 100);

// Depositar
$contasCorrentes['123.456.789-10'] = depositar(
    $contasCorrentes['123.456.789-10'], valorADepositar: 3700);

titularComLetrasMaiusculas($contasCorrentes['123.456.789-10']);

// echo "<ul>";
// foreach ($contasCorrentes as $cpf => $conta) {
//     exibeConta($conta);
// }
// echo "</ul>";


// foreach ($contasCorrentes as $cpf => $conta) {
//     list('titular' => $titular, 'saldo' => $saldo) = $conta;
//     exibeMensagem(
//         mensagem: "Titular:  $conta[titular]  - CPF: $cpf - Saldo R$: $conta[saldo]"
//     );
//     // echo 'Titular: ', $conta['titular'], ' - CPF: ', $cpf, ' - Saldo R$: ', $conta['saldo'] .PHP_EOL;
// }


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Banco Nan</title>
</head>
<body>
    <h1>Contas Correntes</h1>
    
    <dl>
        <?php foreach($contasCorrentes as $cpf => $conta) { ?>
        <dt>
            <h3><?= $conta['titular']; ?> - <?= $cpf; ?></h3>
        </dt>
        <dd>
            Saldo: <?= $conta['saldo']; ?>
        </dd>
        <?php } ?>
    </dl>
</body>
</html>






