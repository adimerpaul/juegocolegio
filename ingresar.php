<?php
include "conexion.php";
$email=$_POST['email'];
$password=$_POST['password'];

$sql="SELECT * FROM usuarios WHERE email='$email' AND password='$password'";

if ($result=mysqli_query($mysqli,$sql))
  {
  $rowcount=mysqli_num_rows($result);
  if($rowcount==1){
    while ($fila = $result->fetch_row()) {
        $_SESSION['id']=$fila[0];
        $_SESSION['email']=$fila[1];
        header('Location: index.php');
    }
  }else{
      echo "No existe el usuario";
  }
}
?>