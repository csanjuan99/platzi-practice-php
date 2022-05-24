<?php

$n = readline("Ingrese el nivel de su arbolito: ");

for ($i = 0; $i<$n; $i++) {
    echo "* \n";
    for ($j=0; $j<$i; $j++) {
        echo "*";
    }
}
echo "*";
echo "\n";