<?php

$numeroencentimetros = $_POST['numeroencentimetros'];
$alturaencentimetros = $_POST['alturaencentimetros'];

echo "<center>";
echo "<body bgcolor='pink'>";

$area = ($numeroencentimetros *  $alturaencentimetros);

echo "El area del rectagulo es: " .  $area . " cm ";

echo "</center>";
echo "</body>";

?>
