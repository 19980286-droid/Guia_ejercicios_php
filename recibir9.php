<?php
$numero = $_POST['numero'];

echo "<center>";
echo "<body bgcolor='purple'>";

if ($numero % 2==0){
echo "el numero es PAR";  $numero . " es PAR";

}else{ 
     echo "el numero es IMPAR";  $numero . " es IMPAR";
}
echo "</center>";
echo "</body>";

?>
