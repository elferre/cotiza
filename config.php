<!DOCTYPE html>
<html lang="en">
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
        $sql = "SELECT * FROM `valores` WHERE id=".$_GET['id'].";";
        $result = $conn->query($sql);
        $row = $result->fetch_assoc();
        $id_c = $row["id"];
        $idid = $row["id_p"];
        $Cot_Dolar = $row["Cot_Dolar"];

		$valor_combus = $row["valor_combus"];
		$valor_seguro = $row["valor_seguro"];
		$valor_peaje = $row["valor_peaje"];
		$valor_cotizar = $row["valor_cotizar"];
		$Cant_dias_cot = $row["Cant_dias_cot"];
	    $ruedas = $row["ruedas"];
		$porcentaje = $row["porcentaje"];
		$ganancias = $row["ganancias"];

        ?>
<link rel="stylesheet" type="text/css" href="css/table.redTable.css ">


                        <form class="requires-validation" novalidate method="post" action="config1.php">
                        <input type="hidden" name="id" id="id" value="<?php echo $idid; ?>">
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
        <div class="col-md-7">
            <input class="form-control" type="number" name="Cot_Dolar" id="Cot_Dolar" step="any" value="<?php echo $Cot_Dolar; ?>" min="1" required>
            <div class="valid-feedback">Valor es valida</div>
            <div class="invalid-feedback">Valor Cotización Dolar debe ser mayor a "0"</div>
        </div>
</td></tr>
<tr>
<td>Valor del Combustible</td><td>$</td><td>
        <div class="col-md-7">
            <input class="form-control" type="number" name="valor_combus" id="valor_combus" step="any" value="<?php echo $valor_combus; ?>" min="1" required>
            <div class="valid-feedback">Valor es valida</div>
            <div class="invalid-feedback">Valor Combustible debe ser mayor a "0"</div>
        </div>
</td></tr>
<tr>
<td>Valor del seguro por dia de asis. en planta</td><td>$</td><td>
        <div class="col-md-7">
            <input class="form-control" type="number" name="valor_seguro" id="valor_seguro" step="any" value="<?php echo $valor_seguro; ?>" min="1" required>
            <div class="valid-feedback">Valor seguro dia es valida</div>
            <div class="invalid-feedback">Valor seguro dia debe ser mayor a "0"</div>
        </div>
</td></tr>
<tr>
<td>Valor de los peajes</td><td>$</td><td>
        <div class="col-md-7">
            <input class="form-control" type="number" name="valor_peaje" id="valor_peaje" step="any" value="<?php echo $valor_peaje; ?>" min="1" required>
            <div class="valid-feedback">Valor es valida</div>
            <div class="invalid-feedback">Valor Peajes debe ser mayor a "0"</div>
        </div>
</td></tr>
<tr>
<td>Valor del dia de cotización</td><td>$</td><td>
        <div class="col-md-7">
            <input class="form-control" type="number" name="valor_cotizar" id="valor_cotizar" step="any" value="<?php echo $valor_cotizar; ?>" min="1" required>
            <div class="valid-feedback">Valor es valida</div>
            <div class="invalid-feedback">Valor Cotización dia debe ser mayor a "0"</div>
        </div>
</td></tr>
<tr>
<td>Cantidad de días que se requirió para cotizar</td><td></td><td>
        <div class="col-md-7">
            <input class="form-control" type="number" name="Cant_dias_cot" id="Cant_dias_cot" value="<?php echo $Cant_dias_cot; ?>" min="1" required>
            <div class="valid-feedback">Cantidad es valida</div>
            <div class="invalid-feedback">Cantidad Dias debe ser mayor a "0"</div>
        </div>
</td></tr>
<tr>
<td>Valor a calcular para el desgaste de ruedas por km	</td><td>$</td><td>
        <div class="col-md-7">
            <input class="form-control" type="number" name="ruedas" id="ruedas" step="any" value="<?php echo $ruedas; ?>" min="1" required>
            <div class="valid-feedback">Valor es valida</div>
            <div class="invalid-feedback">Valor Ruedas debe ser mayor a "0"</div>
        </div>
</td></tr>
<tr>
<td>Porcentaje a sumar para algunos casos</td><td>%</td><td>
        <div class="col-md-7">
            <input class="form-control" type="number" name="porcentaje" id="porcentaje" step="any" value="<?php echo $porcentaje; ?>" min="0.01" required>
            <div class="valid-feedback">Valor % es valida</div>
            <div class="invalid-feedback">Valor % debe ser mayor a "0"</div>
        </div>
</td></tr>
<tr>
<td>Porcentaje a sumar por retención de ganancias</td><td>%</td><td>
        <div class="col-md-7">
            <input class="form-control" type="number" name="ganancias" id="ganancias" step="any" value="<?php echo $ganancias; ?>" min="0.01" required>
            <div class="valid-feedback">Valor % es valida</div>
            <div class="invalid-feedback">Valor % debe ser mayor a "0"</div>
        </div>
</td></tr>
</tbody>
</tr>
</table>
                        <div class="form-button mt-3">
                            <button id="submit" type="submit" class="btn btn-primary">Modifica</button>
                        </div>
                    </form>


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



        <?php
            $conn->close();
            $conn1->close();
            $conn2->close();
        
    }
 } 
?>
    </body>
</html>