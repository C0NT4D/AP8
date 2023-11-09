<html>
<head>
    <title>ej1</title>
</head>
<body>

<form method="POST" action="">
        <label for="edad1">Introduce la primera edad:</label>
        <input type="text" id="edad1" name="edad1" value="">
        <label for="edad2">Introduce la segunda edad:</label>
        <input type="text" id="edad2" name="edad2" value="">
        <input type="submit" value="calcular">
    </form>

<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
$edad1=$_POST['edad1'];
$edad2=$_POST['edad2'];

$diferencia = diferenciaEdad($edad1,$edad2);
echo "La diferencia de edad es: " . $diferencia;
function diferenciaEdad($v1,$v2){
    $diferencia = $v1-$v2;
    return $diferencia;
    
    }  
    
}
?>

</body>
</html>




