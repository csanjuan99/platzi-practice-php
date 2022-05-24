<?php 

$n = readline("Ingrese el numero de articulos a procesar: ");

$i = 0;
$articles = array();

while($i < $n) {
    $name = readline("Ingrese el nombre de su producto: \n\n");
    $height = readline("Ingrese el alto de su producto: \n\n");
    $width = readline("Ingrese el ancho de su producto \n\n");
    $dimension = $width * $height;
    $temp_array = array(
        $name => $dimension
    );
    array_push($articles,$temp_array);
    $i++;
}

for ($i=0; $i<count($articles); $i++) {
    var_dump($articles[$i]);
    for($j=0; $j<count($articles) - 1; $j++ )
        if ($articles[$j] < $articles[$j+1]) {
            $temp = $articles[$j];
            $articles[$j] = $articles[$j+1];
            $articles[$j+1] = $temp;
        }
}
