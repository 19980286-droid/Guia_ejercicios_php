<?php

$nota1 = $_POST['nota1'];
$nota2 = $_POST['nota2'];
$nota3 = $_POST['nota3'];

echo "<center>";
echo "<body bgcolor='pink'>";

$promedio = ($nota1);

if ($promedio >= 6){
    echo "<h2> aprobado </h2>";
}

else{echo  "<h2> reprobado </h2>";
}
echo "</center>";
echo "</body>";

?>
