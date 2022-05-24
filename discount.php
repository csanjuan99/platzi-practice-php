<?php

function discount ($value) {
    return $value - (0.35 * $value);
}

$price = readline("Ingrese el valor de su articulo: \n");

echo "El precio original de su producto es $price y con descuento queda en " . discount($price);
echo "\n";

