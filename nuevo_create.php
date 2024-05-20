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
    </head>
    <body>
<?php
require ("cfg/config.php");

if (isset($_GET['name'])) {

    require ("cfg/conect.php");


    $sql = "INSERT INTO `cotiza` (`id`, `Nombre`, `Proyecto`) VALUES (NULL, '".$_GET['name']."', '".$_GET['proyecto']."');";
    $result = $conn->query($sql);
    $sql = "SELECT * FROM `cotiza` ORDER BY id DESC;";
    $result = $conn1->query($sql);
    $row = $result->fetch_assoc();
    $id_c = $row["id"];
    $sql = "INSERT INTO `valores` (`id`) VALUES ('".$id_c."');";
    $result = $conn2->query($sql);
    $conn->close();
    $conn1->close();
    $conn2->close();
?>

<script>
    //parent.frames.location.href='menu_index.php?id=<?php echo $id_c; ?>';
    frames.parent[0].location.href='menu_index.php?id=<?php echo $id_c; ?>';
    
</script>

<?php
}
?>


    </body>
</html>