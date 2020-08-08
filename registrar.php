<?php
include "conexion.php";
$email=$_POST['email'];
$password=$_POST['password'];

if ($result = $mysqli->real_query("INSERT INTO usuarios SET email='$email',password='$password'")) {
    $id=$mysqli->insert_id;
    $_SESSION['email']=$email;
    $_SESSION['id']=$id;
    header('Location: index.php');
  }else{
      echo "succedio un error";
  }

?>