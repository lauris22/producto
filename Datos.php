 <?php
    $Producto1=$_POST['Producto1'];
    $Precio1=$_POST['Precio1'];
    $producto2=$_POST['Producto2'];
    $Precio2=$_POST['Precio2'];
    $producto3=$_POST['Producto3'];
    $Precio3=$_POST['Precio3'];
    $suma=$Precio1+$Precio2+$Precio3;
    $descuento=$suma*0.16/100;
    $total=$suma-$descuento;
    
       echo "productos:";
        echo "$Producto1, $producto2, $producto3";
        echo "</br>";
        echo "suma de precios: ".$suma;
        echo "</br>";
        echo "Descuento: ".$descuento;
        echo "</br>";
        echo "total a pagar: ".$total;
        ?>


