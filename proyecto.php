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
        $Nombre = $row["Nombre"];
        $Proyecto = $row["Proyecto"];
        if (isset($_GET['proyecto'])) {
          $sql1 = "UPDATE `cotiza` SET `Proyecto` = '".$_GET["proyecto"]."' WHERE id=".$_GET['id'].";";
          $result = $conn1->query($sql1);
        } else {
        ?>


<div class="form-body">
        <div class="row">
            <div class="form-holder">
                <div class="form-content">
                    <div class="form-items">
                        <h3>Modificar</h3>
                        
                        <form class="requires-validation" novalidate method="get" action="proyecto.php">
                        <input type="hidden" name="id" id="id" value="<?php echo $idid; ?>">

                            <div class="col-md-10 form-floating mb-3 mt-3">
                               <input class="form-control" type="text" name="proyecto" id="proyecto" placeholder="Nombre Proyecto" value="<?php echo $Proyecto; ?>" required>
                               <label for="proyecto" style="color:black;">Nombre Proyecto</label>
                               <div class="valid-feedback">Nombre Proyecto es valida</div>
                               <div class="invalid-feedback">Nombre Proyecto no puede estar en blanco</div>
                            </div>

                        <div class="form-check">
                          <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
                          <label class="form-check-label">Confirma si cargaste todos los Datos</label>
                          <div class="invalid-feedback">Se requiere confirmación de Items</div>
                        </div>

                            <div class="form-button mt-3">
                                <button id="submit" type="submit" class="btn btn-primary">Guardar Cambios</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
  

<?php
        }
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