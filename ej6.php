<form method="POST" action="">
        <label for="numero">Introduce un numero</label>
        <input type="number" id="numero" name="numero">
       
    </form>

</body>
</html> 
<?php
$numero=$_POST['numero'];
function figura_decreciente($letra, $n) {
    
    for ($i = 0; $i < $n; $i++) {
        echo str_repeat(' ', $n - $i - 1);
        echo str_repeat($letra, $i + 1);
        echo "<br>";
    }

    for ($i = $n - 2; $i >= 0; $i -= 2) {
        echo str_repeat(' ', $n - $i - 1);
        echo str_repeat($letra, $i + 1);
        echo "<br>";
    }
}

figura_decreciente('*', $numero);


?>
