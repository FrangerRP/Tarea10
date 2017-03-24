<!DOCTYPE html>
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
          <h3>Iniciar seccion</h3>
          <form action="Procesos/Proceso_Loguear.php" method="post">
            <input type="text" name="Nombre" placeholder="Nombre">
            <input type="password" name="Password" placeholder="contraseña">
            <input type="submit" value="Entrar">
          </form>
          <div class="Regis">
              <a href="Registration.php">Registrate Gratis</a>
          </div>
        </div>
      </div>
  </body>
</html>
