<?php
$nota1 = $_POST['nota1'];
$nota2 = $_POST['nota2'];
$nota3 = $_POST['nota3'];

echo "<center>";
echo"<body bgcolor='blue'>";

$promedio = ($nota1 + $nota2 + $nota3)/3;
echo "el promedio del estudiante es: " .  $promedio;

echo "</center>";
echo "</body>";

?>