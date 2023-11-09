<?php

function numerosRandom($numerosArray){
    $numero = rand(1,49);
    if(!in_array($numero, $numerosArray)){
        shuffle($numerosArray);
        return $numero;
    } else {
        return numerosRandom($numerosArray);
    }
}
$numeros = array();
for($i=0; $i<6; $i++){
    $numeros[] = numerosRandom($numeros);

}
echo implode(" ", $numeros);

?>



