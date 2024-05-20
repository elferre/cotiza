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
        $sql = "DELETE FROM valores WHERE id=".$_POST['id'].";";
        $result = $conn->query($sql);
        $sql1 = "DELETE FROM cotiza WHERE id=".$_POST['id'].";";
        $result1 = $conn1->query($sql1);

            $conn->close();
            $conn1->close();
            $conn2->close();
        
    }
 } 
?>

    </body>
</html>
