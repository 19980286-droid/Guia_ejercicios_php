<?php

$palabra=$_POST['palabra'];
$cantidad= strlen($palabra);

echo "<center>";
echo "<body bgcolor='pink'>";

echo "la palabra tiene:" . $cantidad . " letras";

echo "</center>";
echo "</body>";

?>