<?php

$numero1 = $_POST['numero1'];
$numero2 = $_POST['numero2'];

echo "<body bgcolor='lightred'>";
echo "<center>";

$divicion = ($numero1 / $numero2);

echo "La divicion es: " . $divicion;

echo "</center>";
echo "</body>";

?>