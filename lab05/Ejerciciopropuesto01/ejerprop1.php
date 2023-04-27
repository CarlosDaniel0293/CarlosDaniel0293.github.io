<?php
        $importe=$_POST['valor1'];
        $hijos=$_POST['valor2'];
        $sueldobasico=$_POST['valor3'];
        $bonificacion=$hijos*50;
        $comision=((7.5*$importe)/100)+$bonificacion;
        $sueldobruto=$sueldobasico+$comision;
        $descuento=(11*$sueldobruto)/100;
        $sueldoneto=($sueldobruto-$descuento)+$bonificacion;
        echo "La bonificacion es de     :".$bonificacion."<br>";
        echo "La comision es  de        :".$comision."<br>";
        echo "El sueldo bruto es de     :".$sueldobruto."<br>"; 
        echo "El descuento es de        :".$descuento."<br>"; 
        echo "El sueldo neto es de      :".$sueldoneto."<br>";
?>
