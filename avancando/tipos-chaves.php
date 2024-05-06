<?php

// P php só consegue trabalhar, com chaves em array assoativos, de números inteiros ou string, qualquer outro tipo, o php vai tentar convertelo

$array = [
    1 => 'a',
    '1' => 'b',
    1.5 => 'c',
    true => 'd'
];

foreach ($array as $item) {
    echo $item .PHP_EOL;
}

