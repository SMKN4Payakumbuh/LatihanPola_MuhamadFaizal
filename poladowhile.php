<?php

$angka = (int)readline("input angka : ");
$a=0;
do {
    $a++;
    $b=0;
    do {
        $b++;
        echo "*";
    } while ($b < $a);
    echo "\n";
} while ($a <= $angka);

do {
    $a--;
    $b=0;
    do{
        $b++;
        echo "*";
    }while($b<$a);
    echo "\n";
} while ($a > 1);