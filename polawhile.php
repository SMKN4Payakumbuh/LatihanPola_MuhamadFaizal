<?php

$a= (int)readline(" masukkan jmlh bagian ats : ");
$r= (int)readline("masukkan jmlh bagian bawah :");
    while($a>1){
        $b=$a;
        while($b>=1){
            echo "*" ;
            $b=$b-1;
        }
        echo "\n";
        $a=$a-2;
    }

    $c=1;
    while($c<=$r){
        $d=$c;
        $e=1;
        while($e<=$d){
            echo "*" ;
            $e++;
        }
        echo "\n";
        $c=$c+2;
    }

?>