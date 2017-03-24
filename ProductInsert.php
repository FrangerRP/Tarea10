<!DOCTYPE html>
<?php
  include("Procesos/Proceso_Verificar.php");
 ?>
<html>
  <head>
    <meta charset="utf-8">
    <title>Registrando</title>
    <link rel="stylesheet" href="css/main.css">
  </head>
  <body>
    <div class="Cabeza">
      <a href="index.php">Volver</a>
    </div>
    <div class="Logincontenedor">
      <div class="FormSpace">
        <h3>Agregar Producto</h3>
        <form action="Procesos/Proceso_RegistroProducto.php" method="post" enctype="multipart/form-data">
          <input type="text" name="Marca" placeholder="Marca">
            <select name="Tipo">
              <option>Nevera</option>
              <option>Estufa</option>
              <option>Televisor</option>
              <option>Lavadora</option>
              <option>Inversor</option>
              <option>Radio</option>
              <option>Licuadora</option>
              <option>Exprimidor</option>
              <option>Laptop</option>
              <option>Microhondas</option>
              <option>Otro</option>
            </select>
          <input type="date" name="FechaCompra">
          <input type="number" name="Peso" step="any" placeholder="Peso">
          <input type="text" name="Color" placeholder="Color">
          <textarea name="Comentario"></textarea>
          <input type="file" required name="Imagen" class="inputfile" id="file">
          <input type="hidden" name="UsuarioActual" value="<?php echo $_SESSION['u_usuario']; ?>">
          <input type="submit" value="Registrar producto">
        </form>
      </div>
    </div>
    <p id="usuario"><b>Usuario conectado:</b> <?php echo $_SESSION['u_usuario']; ?> <a href="Procesos/Proceso_Cerrar.php">Cerrar sesion</a></p>
  </body>
</html>
