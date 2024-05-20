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

                        <form class="requires-validation" novalidate method="post" action="obs1.php">
                        <input type="hidden" name="id" id="id" value="<?php echo $idid; ?>">
                        
                        <div class="form-floating mb-3 mt-3">
                               <textarea class="form-control" name="obs" id="obs" placeholder="observaciones" rows="5" cols="50" required><?php echo $obs; ?></textarea>
                               <label for="obs" style="color:black;">Observaciones</label>
                               <div class="valid-feedback">Observación es valida</div>
                               <div class="invalid-feedback">Observaciones no puede estar en blanco</div>
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