<?php
function numRomano($numero) {
    $num = array(1000,500,100,50,10,5,1);
    $rom = array('M','D','C','L','X','V','I');
    $romano = '';

    for ($i=0; $i<count($num); $i++) {
        while ($numero >= $num[$i]) {
            $romano .= $rom[$i];
            $numero -= $num[$i];
        }
    }

    return $romano;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $numero=$_POST['numero'];
    $romano = numRomano($numero);
    echo "El numero en romano es: $romano";
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Numero a Romano</title>
</head>
<body>

<form method="POST" action="">
        <label for="numero">Introduce un numero entre 1-10</label>
        <input type="text" id="numero" name="numero">
       
    </form>

</body>
</html>