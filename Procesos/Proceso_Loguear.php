<?php
 session_start();

 $name=$_POST['Nombre'];
 $password=$_POST['Password'];

 include("Conexion.php");

 $proceso = $conexion->query("SELECT * FROM user WHERE Nombre='$name' AND Contrasenia='$password'");
  if ($resultado = mysqli_fetch_array($proceso)) {
    $_SESSION['u_usuario'] = $name;
    header("Location: ../index.php");
  }else {
    header("Location: ../index.php");
  }
?>
