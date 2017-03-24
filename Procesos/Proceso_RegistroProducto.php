<?php

include("Conexion.php");
$Marca = $_POST['Marca'];
$Tipo = $_POST['Tipo'];
$FechaCompra = $_POST['FechaCompra'];
$Peso = $_POST['Peso'];
$Color = $_POST['Color'];
$Comentario = $_POST['Comentario'];
$Foto = addslashes(file_get_contents($_FILES['Imagen']['tmp_name']));
date_default_timezone_set("America/New_York");
$UsuarioActual=$_POST['UsuarioActual'];
$FechaActual=date("Y-m-d", time());

$query ="INSERT INTO productos(Marca, Tipo, FechaCompra, Peso, Color, Comentario, Foto, Usuario, FechaSubida) VALUES('$Marca','$Tipo','$FechaCompra','$Peso','$Color','$Comentario','$Foto','$UsuarioActual','$FechaActual')";
$resultado = $conexion->query($query);

if ($resultado) {
  header("Location: Dtm_file_confirm_rtd/FileSend.php");
}else {
  header("Location: Dtm_file_confirm_rtd/FileError.php");
}

 ?>
