<?php
include "conexion.php";
//echo $_POST['punjate'];

$mysqli->real_query("INSERT INTO puntos SET idusuario='".$_SESSION['id']."',puntaje='".$_POST['punjate']."'");
echo 1;
?>
