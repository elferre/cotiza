<!DOCTYPE html>
<html lang="es">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate"> 
        <meta http-equiv="Pragma" content="no-cache"> 
        <meta http-equiv="Expires" content="0">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="icon" type="image/x-icon" href="img/Logo.ico">
        

        <link rel="stylesheet" type="text/css" href="css/variables.css">
        
        
        
        <script src="lib/bootstrap.min.js"></script>
        <script src="lib/html2pdf.bundle.min.js"></script>
        <script src="lib/jquery-1.7.1.min.js"></script>
        <link rel="stylesheet" type="text/css" href="lib/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="css/menor.css">
    </head>
    <body>
<?php
 if (isset($_GET['id'])) {
    if ($_GET['id']>0){
        require ("cfg/config.php");
        require ("cfg/conect.php");
        $sql = "SELECT * FROM valores,cotiza WHERE valores.id=cotiza.id AND cotiza.id=".$_GET['id'].";";
        $result = $conn->query($sql);
        $row = $result->fetch_assoc();
        $idid = $row["id"];
        $fechas = $row["fechas"];
        $dias = $row["dias"];
        $dias_planta = $row["dias_planta"];
        $valor_dia = $row["valor_dia"];
        $Cant_km = $row["Cant_km"];
        $obs = $row["obs"];

        $Cot_Dolar = $row["Cot_Dolar"];
        $valor_combus = $row["valor_combus"];
        $valor_seguro = $row["valor_seguro"];
        $valor_peaje = $row["valor_peaje"];
        $valor_cotizar = $row["valor_cotizar"];
        $Cant_dias_cot = $row["Cant_dias_cot"];
        $ruedas = $row["ruedas"];
        $porcentaje = $row["porcentaje"];
        $ganancias = $row["ganancias"];
    
        IF ($Cot_Dolar==0){$Cot_Dolar=0.0000001;}
        IF ($valor_dia==0){$valor_dia=0.0000001;}
        ?>
 <style>
  .flex-container {
    display: flex;
    justify-content: center;     
    padding: 5px;
    gap: 5px;
  }
  .flex-container > div{
    border: 3px solid #ffcc80;
    width: 70%;
    border-radius: 3px;
    padding: 3px;
  }
</style>

<?php
            $conn->close();
            $conn1->close();
            $conn2->close();
        
    }
 } 
?>


<div id="PreIMPRIMIR"  >
<div id="IMPRIMIR">

<div class="flex-container">
    <div class="item1"><b>Nombre : </b><br><?php echo $row["Nombre"]; ?></div>
    <div class="item2"><b>Proyecto : </b><br><?php echo $row["Proyecto"]; ?></div>
</div>

<div style="color: black;"><hr></div>

<link rel="stylesheet" type="text/css" href="css/table.redTable_PDF.css ">

<center>
<table class="redTable">
<thead>
<tr>
<th>Detalle</th>
<th></th><th>Valor</th>
</tr>
</thead>
<tbody>
<tr>
<td style="width: 65%;">Cotización Actual del Dolar</td><td>$</td><td>
<center><?php echo $Cot_Dolar; ?></center>
</td></tr>
<tr>
<td>Valor del Combustible</td><td>$</td><td>
<center><?php echo $valor_combus; ?></center>
</td></tr>
<tr>
<td>Valor del seguro por dia de asis. en planta</td><td>$</td><td>
<center><?php echo $valor_seguro; ?></center>
</td></tr>
<tr>
<td>Valor de los peajes</td><td>$</td><td>
<center><?php echo $valor_peaje; ?></center>
</td></tr>
<tr>
<td>Valor del dia de cotización</td><td>$</td><td>
<center><?php echo $valor_cotizar; ?></center>
</td></tr>
<tr>
<td>Cantidad de días que se requirió para cotizar</td><td></td><td>
<center><?php echo $Cant_dias_cot; ?></center>
</td></tr>
<tr>
<td>Valor a calcular para el desgaste de ruedas por km	</td><td>$</td><td>
<center><?php echo $ruedas; ?></center>
</td></tr>
<tr>
<td>Porcentaje a sumar para algunos casos</td><td>%</td><td>
<center><?php echo $porcentaje; ?></center>
</td></tr>
<tr>
<td>Porcentaje a sumar por retención de ganancias</td><td>%</td><td>
<center><?php echo $ganancias; ?></center>
</td></tr>
</tbody>
</tr>
</table>
</center>


<style>
.parent {
display: grid;
grid-template-columns: 300px 150px 200px;
grid-template-rows: repeat(6, 25px);
grid-column-gap: 0px;
grid-row-gap: 0px;
}

.div1 { grid-area: 2 / 1 / 3 / 2; }
.div2 { grid-area: 3 / 1 / 4 / 2; }
.div3 { grid-area: 4 / 1 / 5 / 2; }
.div4 { grid-area: 5 / 1 / 6 / 2; }
.div5 { grid-area: 6 / 1 / 7 / 2; }
.div6 { grid-area: 2 / 2 / 3 / 3; }
.div7 { grid-area: 3 / 2 / 4 / 3; }
.div8 { grid-area: 4 / 2 / 5 / 3; }
.div9 { grid-area: 5 / 2 / 6 / 3; }
.div10 { grid-area: 6 / 2 / 7 / 3; }
.div11 { grid-area: 2 / 3 / 3 / 4; }
.div12 { grid-area: 3 / 3 / 4 / 4; }
.div13 { grid-area: 4 / 3 / 5 / 4; }
.div14 { grid-area: 5 / 3 / 6 / 4; }
.div15 { grid-area: 6 / 3 / 7 / 4; }
.div16 { grid-area: 1 / 1 / 2 / 2; }
.div17 { grid-area: 1 / 2 / 2 / 3; }
.div18 { grid-area: 1 / 3 / 2 / 4; }
</style>

<div style="color: black;"><hr></div>

<div class="parent">
<div class="div1">Fecha </div>
<div class="div2">Dias previstos </div>
<div class="div3">Cantidad de dias a estar en Planta </div>
<div class="div4">Valor del dia de trabajo </div>
<div class="div5">Kilometros entre Casa y Cliente </div>

<div class="div6"><center><?php 
$date = new DateTime($fechas);
echo $date->format('d/m/Y'); ?> </center></div>
<div class="div7"><center><?php echo $dias; ?> </center></div>
<div class="div8"><center><?php echo $dias_planta; ?> </center></div>
<div class="div9"><center><?php echo number_format($valor_dia,2); ?> $</center></div>
<div class="div10"><center><?php echo $Cant_km; ?> km </center></div>

<div class="div11"> </div>
<div class="div12"><center><?php echo number_format($dias*$valor_dia,2); ?> $</center></div>
<div class="div13"> </div>
<div class="div14"><center><?php echo number_format($valor_dia/$Cot_Dolar,2); ?> u$s</center> </div>
<div class="div15"> </div>

<div class="div16">Detalle </div>
<div class="div17"><center>Valor </center></div>
<div class="div18"><center>Calculo </center></div>

</div>
<div>
<hr>
OBS : <div style="font-size: 13px;"><?php echo $obs; ?></div>
<hr>
<center>
  <form method="post" action="eliminar1.php">
    <input type="hidden" name="id" id="id" value="<?php echo $idid; ?>">

    
                          <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
                          <label class="form-check-label">Confirma si cargaste todos los Datos</label>
                          <div class="invalid-feedback">Se requiere confirmación de Items</div>
                          <br><br>

    <button id="submit" type="submit" class="btn btn-danger">Eliminar definitivamente</button>
  </form>
</center>
<hr>

</tbody>
</tr>
</table>
</center>

</div>


</div>

<script>
    (function () {
'use strict'
const forms = document.querySelectorAll('.requires-validation')
Array.from(forms)
  .forEach(function (form) {
    form.addEventListener('submit', function (event) {
      if (!form.checkValidity()) {
        event.preventDefault()
        event.stopPropagation()
      }

      form.classList.add('was-validated')
    }, false)
  })
})()

</script>

<link rel="stylesheet" type="text/css" href="lib/css1.css">

    </body>
</html>
