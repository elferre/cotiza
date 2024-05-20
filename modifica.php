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
        $sql = "SELECT * FROM `cotiza` WHERE id=".$_GET['id'].";";
        $result = $conn->query($sql);
        $row = $result->fetch_assoc();
        $idid = $row["id"];
        $fechas = $row["fechas"];
        $dias = $row["dias"];
        $dias_planta = $row["dias_planta"];
        $valor_dia = $row["valor_dia"];
        $Cant_km = $row["Cant_km"];
        $obs = $row["obs"];

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

<div class="flex-container">
   
    <div class="item1">Nombre : <br><?php echo $row["Nombre"]; ?></div>
    <div class="item2">Proyecto : <br><?php echo $row["Proyecto"]; ?></div>

</div>

<!-- Aqui va el FORM --->

                <div class="form-content">
                    <div class="form-items">

                        <form class="requires-validation" novalidate method="post" action="modifica1.php">
                        <input type="hidden" name="id" id="id" value="<?php echo $idid; ?>">
                        <input type="hidden" name="obs" id="obs" value="<?php echo $obs; ?>">
                        <div class="col-md-2 form-floating mb-3 mt-3">
                               <input class="form-control" type="date" name="fechas" id="fechas" placeholder="fechas"  value="<?php echo $fechas; ?>" required>
                               <label for="fechas" style="color:black;">Fecha que se realiza la Cotizacion</label>
                               <div class="valid-feedback">Fecha es valida</div>
                               <div class="invalid-feedback">Fecha no puede estar en blanco</div>
                            </div>

                            <div class="col-md-2 form-floating mb-3 mt-3">
                               <input class="form-control" type="number" name="dias" id="dias" placeholder="dias"  value="<?php echo $dias; ?>" min="1" required>
                               <label for="dias" style="color:black;">Dias previstos</label>
                               <div class="valid-feedback">Dias es valida</div>
                               <div class="invalid-feedback">Dias debe ser mayor a "0"</div>
                            </div>

                            <div class="col-md-3 form-floating mb-3 mt-3">
                               <input class="form-control" type="number" name="dias_planta" id="dias_planta" placeholder="dias_planta"  value="<?php echo $dias_planta; ?>" min="1" required>
                               <label for="dias_planta" style="color:black;">Cantidad de dias a estar en Planta</label>
                               <div class="valid-feedback">Dias en planta es valida</div>
                               <div class="invalid-feedback">Dias en planta debe ser mayor a "0"</div>
                            </div>


                            <div class="col-md-3 form-floating mb-3 mt-3">
                               <input class="form-control" type="number" name="valor_dia" id="valor_dia" placeholder="valor_dia"  step="any" value="<?php echo $valor_dia; ?>" min="1" required>
                               <label for="valor_dia" style="color:black;">Valor del dia de trabajo</label>
                               <div class="valid-feedback">Valor Dia es valida</div>
                               <div class="invalid-feedback">Valor Dia debe ser mayor a "0"</div>
                            </div>


                            <div class="col-md-3 form-floating mb-3 mt-3">
                               <input class="form-control" type="number" name="Cant_km" id="Cant_km" placeholder="Cant_km"  value="<?php echo $Cant_km; ?>" min="1" required>
                               <label for="Cant_km" style="color:black;">Kilometros entre Casa y Cliente</label>
                               <div class="valid-feedback">Cantidad KM es valida</div>
                               <div class="invalid-feedback">Cantidad KM debe ser mayor a "0"</div>
                            </div>


                            <div class="form-button mt-3">
                                <button id="submit" type="submit" class="btn btn-primary">Modifica</button>
                            </div>
                        </form>

                        </div></div>

  

<?php
            $conn->close();
            $conn1->close();
            $conn2->close();
        
    }
 } 
?>

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