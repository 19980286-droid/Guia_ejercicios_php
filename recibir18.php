<?php
$nombre = $_POST['nombre'];
$producto = $_POST['producto'];
$cantidad = $_POST['cantidad'];
$precio = $_POST['precio'];
$total = $precio * $cantidad;

echo "<center>";
echo "<body bgcolor='blue'>";
 
echo "El total a pagar por $nombre por $cantidad bolsas de $producto es de: $total";

echo "</center>";
echo "</body>";
?>

<?
