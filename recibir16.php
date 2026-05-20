<?php
 $nombre = $_POST['nombre'];
 $numero1 = $_POST['numero1'];
 $numero2 = $_POST['numero2'];

 echo "<center>";
echo "<body bgcolor='red'>";

 $salario = $numero1 * $numero2;
 echo "el salario total es de: $" . $salario;

 echo "</center>";
echo "</body>";

 ?>