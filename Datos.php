<?php
$Producto1= $_POST ['Producto1'];
$precio1=$_POST ['precio1'];

$Producto2= $_POST ['Producto2'];
$precio2=$_POST ['precio2'];

$Producto3= $_POST ['Producto3'];
$precio3=$_POST ['precio3'];

$sumaPrecios=$precio1+$precio2+$precio3;
$descuento=$sumaPrecios*0.16;
$totalPagar=$sumaPrecios-$descuento;

echo "Productos:<br>";
echo "$producto1<br>";
echo "$producto2<br>";
echo "$producto3<br>";
echo "suma de precios:$".$sumaPrecios ."<br>";
echo "Descuento (16%):$" .$descuento. "<br>";
echo "TOTAL A PAGAR:$" .$totalPagar. "<br>";
?>


