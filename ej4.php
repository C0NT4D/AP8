<?php
$empleados = [
    'Juan'=>[
       'horas' => 40,
       'tarifa' => 15
    ],
    'Perico'=>[
       'horas' => 20,
       'tarifa' => 25
    ],
    'Andrés'=>[
       'horas' => 45
    ],
];

function calcularSalario($nombre, $horas, $tarifa){
    if(($horas>40)){
        $tarifa=1.25;
    }
    else
    {
        $tarifa=10;
    }
    return $tarifa*$horas;
}

foreach ($empleados as $nombre => $detalles) {
    $horas = $detalles['horas'];
    $tarifa = $detalles['tarifa'];
    $salario = calcularSalario($nombre, $horas, $tarifa);
    echo "$nombre tiene un salario de $" . $salario . "<br>";
}
?>