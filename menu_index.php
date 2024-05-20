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
        <link rel="stylesheet" type="text/css" href="css/menu.css">
        <link rel="stylesheet" type="text/css" href="css/menor.css">
        <link rel="stylesheet" type="text/css" href="css/grid.css">
        
        <link rel="stylesheet" type="text/css" href="css/menuEst.css">
        
        <script src="lib/html2pdf.bundle.min.js"></script>
        <script src="lib/jquery-1.7.1.min.js"></script>
    </head>
    <body>
    <?php
    $Name="";
    $Proyecto="";
    $id_c=0;
        if (isset($_GET['id'])) {
            echo '<script>        let NroID = '.$_GET['id'].';    </script>';
            require ("cfg/config.php");
            require ("cfg/conect.php");
            $sql = "SELECT * FROM `cotiza` WHERE id=".$_GET['id'].";";
            $result = $conn->query($sql);
            $row = $result->fetch_assoc();
            $id_c = $row["id"];
            $Name=$row["Nombre"];
            $Proyecto=$row["Proyecto"];
            $conn->close();
            $conn1->close();
            $conn2->close();
        } else {
            echo '<script>        let NroID = 0;    </script>';
        }
        
    ?>

        <div class="Todo">
            <div class="Menor900">
                <!--* INFO Menor a 900 PX--->
                <div class="ImgFondoLogo900">
                    <img src="img/fondo.jpg" width="300px">
                </div>La definicion de pantalla es menor a 900 Pixeles
            </div>
            <div class="Mayor900">
                <!--* INFO Mayor a 900 PX--->
                <div>
                    <?php include "menu.php"; ?>
                </div>
                <div> &#32;&#32;&#32;&#32;&#32;&#32;&#32;&#32;&#32;&#32;&#32;&#32;&#32;&#32;
                    <?php echo "".$Name." ".$Proyecto; ?>
                </div>
                
            </div>
        </div>
    </body>


<!--* Aqui esta la Version del Programa --->
<script>
    const valorVersion = "1.00.13";
</script>
<!--* *****************************************************
        Aqui esta todas las llamadas a JavaScript 
    * ***************************************************** --->
<script src="js/js__ini.js"></script>


<!--* js__class llamada a JavaScript 
    * Classes definidas    --->

<script src="js/js__document.js"></script>

<script src="js/js__inicio.js"></script>
<!--* js__global llamada a JavaScript 
    * Variables Globales    --->
<script src="js/js__global.js"></script>


<script>
        if (NroID>0){
            UnoNuevo();
        }
    </script>

</html>