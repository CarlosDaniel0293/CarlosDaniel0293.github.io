<?php
if(isset($_POST['calcular'])) {
	$precio_actual = $_POST['precio'];
	$cantidad = $_POST['cantidad'];
	$nuevo_precio = $precio_actual - ($precio_actual * 0.05);
	$importe = $nuevo_precio * $cantidad;
	$descuento = $importe * 0.07;
	$total = $importe - $descuento;
	$obsequio = $cantidad * 2;
	echo "Nuevo precio: S/." . number_format($nuevo_precio, 2) ."<br>";
	echo "Importe de la compra: S/." . number_format($importe, 2) ."<br>";
	echo "Importe del descuento: S/." . number_format($descuento, 2) ."<br>";
	echo "Total: S/." . number_format($total, 2) ."<br>";
	echo "Caramelos de obsequio: " . $obsequio . " caramelos";
}
?>
