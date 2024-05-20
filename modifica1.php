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
 if (isset($_POST['id'])) {
    if ($_POST['id']>0){
        require ("cfg/config.php");
        require ("cfg/conect.php");
        $idid = $_POST["id"];
        $fechas = $_POST["fechas"];
        $dias = $_POST["dias"];
        $dias_planta = $_POST["dias_planta"];
        $valor_dia = $_POST["valor_dia"];
        $Cant_km = $_POST["Cant_km"];
        $obs = $_POST["obs"];

        $sql = "UPDATE `cotiza` SET `fechas` = '".$fechas."', ";

        $sql = $sql . "`dias` = '".$dias."', `dias_planta` = '".$dias_planta."', `valor_dia` = ";

        $sql = $sql . "'".$valor_dia."', `Cant_km` = '".$Cant_km."', `obs` = '".$obs."' WHERE `cotiza`.`id` = ".$idid.";";
        $result = $conn->query($sql);

            $conn->close();
            $conn1->close();
            $conn2->close();
        
    }
 } 
?>

<style>
.parent {
display: grid;
grid-template-columns: 300px 150px 200px;
grid-template-rows: repeat(6, 35px);
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
<div class="div14"> </div>
<div class="div15"> </div>

<div class="div16">Detalle </div>
<div class="div17"><center>Valor </center></div>
<div class="div18"><center>Calculo </center></div>
</div>
    </body>
</html>