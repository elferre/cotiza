<!--  Archivo: conect.php                                                         * -->

<?php
    $dbname = CON_DATA_BASE;

    //$mysqli = new mysqli(CON_SERVERNAME, CON_USUARIO, CON_CLAVE, "$dbname");
    //$db = new mysqli(CON_SERVERNAME, CON_USUARIO, CON_CLAVE, "$dbname");
    $conn=mysqli_connect(CON_SERVERNAME,CON_USUARIO,CON_CLAVE,"$dbname");
    $conn1=mysqli_connect(CON_SERVERNAME,CON_USUARIO,CON_CLAVE,"$dbname");
    $conn2=mysqli_connect(CON_SERVERNAME,CON_USUARIO,CON_CLAVE,"$dbname");
      if(!$conn){
          die('Could not Connect MySql Server:' );
        }
?>
