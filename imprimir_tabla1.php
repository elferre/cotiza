Cálculos Con Datos (Adicionar el 21% IVA)
<!--* SUMAS y MULTIPLICACIONES --->
<center>
<table class="redTable">
<thead>
<tr>
<th>Detalle</th>
<th></th><th>Valor u$s</th>
<th></th><th>Valor $</th>
</tr>
</thead>
<tbody>

<tr>
<td style="width: 65%;">Dias previstos Dolar</td><td>u$s</td><td>
<center><?php echo number_format(($dias*$valor_dia)/$Cot_Dolar,2); ?></center>
</td><td>$</td><td><center><?php echo number_format(($dias*$valor_dia),2); ?></center></td></tr>
<td style="width: 65%;">Seguro en planta Dolar</td><td>u$s</td><td>
<center><?php echo number_format(($dias_planta*$valor_seguro)/$Cot_Dolar,2); ?></center>
</td><td>$</td><td><center><?php echo number_format(($dias_planta*$valor_seguro),2); ?></center></td></tr>
<td style="width: 65%;">Combustible a planta Dolar</td><td>u$s</td><td>
<center><?php echo number_format(($dias_planta*$valor_combus)/$Cot_Dolar,2); ?></center>
</td><td>$</td><td><center><?php echo number_format(($dias_planta*$valor_combus),2); ?></center></td></tr>
<td style="width: 65%;">Peajes a planta Dolar</td><td>u$s</td><td>
<center><?php echo number_format(($dias_planta*$valor_peaje)/$Cot_Dolar,2); ?></center>
</td><td>$</td><td><center><?php echo number_format(($dias_planta*$valor_peaje),2); ?></center></td></tr>
<td style="width: 65%;">Tiempo Cotizar Dolar</td><td>u$s</td><td>
<center><?php echo number_format(($valor_cotizar*$Cant_dias_cot)/$Cot_Dolar,2); ?></center>
</td><td>$</td><td><center><?php echo number_format(($valor_cotizar*$Cant_dias_cot),2); ?></center></td></tr>
<td style="width: 65%;">Ruedas Dolar</td><td>u$s</td><td>
<center><?php echo number_format(($dias_planta*($ruedas*$Cant_km))/$Cot_Dolar,2); ?></center>
</td><td>$</td><td><center><?php echo number_format(($dias_planta*($ruedas*$Cant_km)),2); ?></center></td></tr>

<?php
$Cuenta_Total=0;
$Cuenta_Total=$Cuenta_Total+($dias*$valor_dia)/$Cot_Dolar;
$Cuenta_Total=$Cuenta_Total+($dias_planta*$valor_seguro)/$Cot_Dolar;
$Cuenta_Total=$Cuenta_Total+($dias_planta*$valor_combus)/$Cot_Dolar;
$Cuenta_Total=$Cuenta_Total+($dias_planta*$valor_peaje)/$Cot_Dolar;
$Cuenta_Total=$Cuenta_Total+($valor_cotizar*$Cant_dias_cot)/$Cot_Dolar;
$Cuenta_Total=$Cuenta_Total+($dias_planta*($ruedas*$Cant_km))/$Cot_Dolar;

$Cuenta_Total_por=(($Cuenta_Total*$porcentaje)/100);
$Cuenta_Total_gan=(($Cuenta_Total*$ganancias)/100);

$Cuenta_Total_Total=$Cuenta_Total_por+$Cuenta_Total_gan+$Cuenta_Total;

?>
<td style="width: 65%;">SubTotal Dolar</td><td>u$s</td><td style="font-size: 15px;">
<center><b><?php echo number_format($Cuenta_Total,2); ?></b></center>
</td><td>$</td><td><center><b><?php echo number_format($Cuenta_Total*$Cot_Dolar,2); ?></b></center></td></tr>
<td style="width: 65%;"><?php echo number_format($porcentaje,2); ?> % Porcent Dolar</td><td>u$s</td><td>
<center><?php echo number_format($Cuenta_Total_por,2); ?></center>
</td><td>$</td><td><center><?php echo number_format($Cuenta_Total_por*$Cot_Dolar,2); ?></center></td></tr>
<td style="width: 65%;"><?php echo number_format($ganancias,2); ?> % Ganacia Dolar</td><td>u$s</td><td>
<center><?php echo number_format($Cuenta_Total_gan,2); ?></center>
</td><td>$</td><td><center><?php echo number_format($Cuenta_Total_gan*$Cot_Dolar,2); ?></center></td></tr>
<td style="width: 65%;">Total Dolar</td><td>u$s</td><td style="font-size: 15px;">
<center><b><?php echo number_format($Cuenta_Total_Total,2); ?></b></center>
</td><td>$</td><td><center><b><?php echo number_format($Cuenta_Total_Total*$Cot_Dolar,2); ?></b></center></td></tr>

</tbody>
</tr>
</table>
</center>
