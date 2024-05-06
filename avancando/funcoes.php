<?php

// echo "CONTAS" .PHP_EOL;
// echo "<h1>CONTAS</h1>" . '<br>'; // HTML no PHP


function sacar(array $conta, float $valorASacar): array
{
    if ($valorASacar > $conta['saldo']){
        exibeMensagem(mensagem: "Você não tem saldo suficiente!");
    }else {
        $conta['saldo'] -= $valorASacar; 
    }
    return $conta;
}

# Uma função retorna um valor, ou seja, a chamada da função representa um valor após sua execução. Uma subrotina apenas executa um código isolado.
function exibeMensagem(string $mensagem) 
{
    echo $mensagem . '<br>';
}

function depositar(array $conta, float $valorADepositar): array
{
    if ($valorADepositar > 0) {
        $conta['saldo'] += $valorADepositar;
    }else {
        exibeMensagem( mensagem:"Depositos preciam ser positivos");
    }
    return $conta;
}

function titularComLetrasMaiusculas(array &$conta) 
{
    echo $conta['titular'] .PHP_EOL; 
    $conta['titular'] = mb_strtoupper($conta['titular']);
}

function exibeConta(array $conta) 
{
    ['titular' => $titular, 'saldo' => $saldo] = $conta;
    echo "<li>Titular: $titular. Saldo. $saldo</li>";
}