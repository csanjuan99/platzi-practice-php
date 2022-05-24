<?php

$age = readline("Ingrese la edad del niño: ");

if ($age < 5)
    echo "El estudiante con " . $age . " años tendrá sus juguetes en la parte inferior de la bodega. \n";
else if ($age >= 5 && $age <= 7)
    echo "El estudiante con " . $age . " años tendrá sus juguetes en la parte media de la bodega. \n";
else if ($age > 7)
    echo "El estudiante con " . $age . " años tendrá sus juguetes en la parte alta de la bodega. \n";