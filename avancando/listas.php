<?php

$idadeList = [21, 23, 27, 30, 33, 37, 40, 43, 47, 17, 19, 130, 133];

list($idadeNan, $idadeJo, $idadeMaria) = $idadeList;

// $umaIdade = $idadeList[5];

// echo $umaIdade;
$idadeList[] = 77;

foreach ($idadeList as $idade) {
    echo $idade .PHP_EOL;
}

