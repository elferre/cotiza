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
<!-- CSS Code: Place this code in the document's head (between the 'head' tags) -->
<style>
table.GeneratedTable {
  width: 100%;
  background-color: #ffffff;
  border-collapse: collapse;
  border-width: 2px;
  border-color: #00ff04;
  border-style: solid;
  color: #000000;
}

table.GeneratedTable td, table.GeneratedTable th {
  border-width: 2px;
  border-color: #00ff04;
  border-style: solid;
  padding: 3px;
}

table.GeneratedTable thead {
  background-color: #00ff04;
}
</style>      

<table class="GeneratedTable">
  <thead>
    <tr>
      <th>ID</th>
      <th>Nombre</th>
      <th>Proyecto</th>
      <th>Fecha</th>
      <th></th>
      <th></th>
    </tr>
  </thead>
  <tbody>
<style>
  .aa:hover {
  color: white;
  background-color: black;
  font-weight: bold;
}
</style>
<?php
        require ("cfg/config.php");
        require ("cfg/conect.php");
        $sql = "SELECT * FROM valores,cotiza WHERE valores.id=cotiza.id ORDER BY fechas DESC;";

        if ($result = $conn->query($sql)) {
        
          while ($row = $result->fetch_assoc()) {
            $idid = $row["id"];
            $Nombre = $row["Nombre"];
            $Proyecto = $row["Proyecto"];
            $fechas = $row["fechas"];
            $date = new DateTime($fechas); 
      ?>
    <tr>
      <td width="3"><?php echo $idid; ?></td>
      <td class="aa" onclick="location.href='nombre.php?id=<?php echo $idid; ?>'"><?php echo $Nombre; ?></td>
      <td class="aa" onclick="location.href='proyecto.php?id=<?php echo $idid; ?>'"><?php echo $Proyecto; ?></td>
      <td><?php echo $date->format('d/m/Y'); ?></td>
      <td>
      <form method="get" action="menu_index.php" target="frame1" id="<?php echo $idid; ?>" onclick="location.href='abajo.html'">
                        <input type="hidden" name="id" id="id" value="<?php echo $idid; ?>">

                                <button id="submit" type="submit" class="btn btn-success">Modifica</button>
        </form>
      </td>
      <td>
      <form method="get" action="menu_index.php" target="frame1" id="<?php echo $idid; ?>" onclick="location.href='eliminar.php?id=<?php echo $idid; ?>'">
                                <button id="submit" type="submit" class="btn btn-danger">Eliminar</button>
        </form>
      </td>
    </tr>
      <?php
          }
        }

            $conn->close();
            $conn1->close();
            $conn2->close();
       
?>

  </tbody>
</table>
<!-- Codes by Quackit.com -->




    </body>
</html>
