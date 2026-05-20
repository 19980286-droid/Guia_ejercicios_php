<?php

$dolares = $_POST['dolares'];
 
echo "<center>";

$euros = $dolares * 0.86;
echo "la cantidad que ingresaste, en euros es: € " . $euros;
 
?>