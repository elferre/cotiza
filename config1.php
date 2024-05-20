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
        $id_c = $_POST["id"];
        $idid = $_POST["id"];
        $Cot_Dolar = $_POST["Cot_Dolar"];
		$valor_combus = $_POST["valor_combus"];
		$valor_seguro = $_POST["valor_seguro"];
		$valor_peaje = $_POST["valor_peaje"];
		$valor_cotizar = $_POST["valor_cotizar"];
		$Cant_dias_cot = $_POST["Cant_dias_cot"];
	    $ruedas = $_POST["ruedas"];
		$porcentaje = $_POST["porcentaje"];
		$ganancias = $_POST["ganancias"];

        $sql = "UPDATE `valores` SET `Cot_Dolar` = '".$Cot_Dolar."', ";
        $sql = $sql . "`valor_combus` = '".$valor_combus."', `valor_seguro` = '".$valor_seguro."', `valor_peaje` = ";
        $sql = $sql . "'".$valor_peaje."', `valor_cotizar` = '".$valor_cotizar."', `Cant_dias_cot` = '".$Cant_dias_cot."' ";
        $sql = $sql . ",`ruedas` = '".$ruedas."', `porcentaje` = '".$porcentaje."', `ganancias` = '".$ganancias."'";
        $sql = $sql . "WHERE `id_p` = ".$id_c.";";
        $result = $conn->query($sql);
            $conn->close();
            $conn1->close();
            $conn2->close();
        
    }
 } 
?>


    </body>
</html>