<?php


$idadeList = [21, 23, 19, 25, 30, 41, 17];


for ($i = 0; $i < 7; $i++) {
    echo $idadeList[$i] . PHP_EOL;
}

echo "Quantidade de item da minha lista é: ";
echo count($idadeList);
