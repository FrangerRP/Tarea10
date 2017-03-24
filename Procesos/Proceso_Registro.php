<?php

include("Conexion.php");

$Nombre= $_POST['Nombre'];
$Apellido= $_POST['Apellido'];
$Correo= $_POST['Correo'];
$Contrasenia= $_POST['Contrasenia'];

$query ="INSERT INTO user(IdUser, Nombre, Apellido, Correo, Contrasenia) VALUES ('','$Nombre','$Apellido','$Correo','$Contrasenia')";
$resultado = $conexion->query($query);

if ($resultado) {
  echo "Usuario Registrado";
  echo "<a href='../index.php'>Volve al inicio</a>";
}else {
  echo "No se inserto";
}

?>
