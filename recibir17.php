<?php
$compra = $_POST['compra'];

echo "<center>";
echo "<body bgcolor='pink'>";
 if ($compra >=40){
  echo "felicidades te has ganado un 10% de descuento";
  }
 else { 
    echo "Lo sentimos pero no te has ganado un 10& de descuento";
 }


echo "</center>";
echo "</body>";

?>