<?php

$celcius = $_POST['celcius'];
$Fahrenheit = ($celcius * 1.8) + 32;

echo "<center>";
echo "Los grados Fahrenhein son: " . $Fahrenheit;
echo "</center>";
?>