<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Registrando</title>
    <link rel="stylesheet" href="css/main.css">
  </head>
  <body>
    <div class="Cabeza">
      <a href="Login.php">Volver</a>
    </div>
    <div class="Logincontenedor">
      <div class="FormSpace">
        <h3>Registro de usuario</h3>
        <form action="Procesos/Proceso_Registro.php" method="post">
          <input type="text" name="Nombre" placeholder="Nombre">
          <input type="text" name="Apellido" placeholder="Apellido">
          <input type="email" name="Correo" placeholder="example@hotmail.com">
          <input type="password" name="Contrasenia" placeholder="contraseña">
          <input type="submit" value="Registrame">
        </form>
      </div>
    </div>
  </body>
</html>
