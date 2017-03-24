<!DOCTYPE html>
<?php
  session_start();
// echo "<link rel='stylesheet' href='css/main.css'>";
  if (isset($_SESSION['u_usuario'])) {
    echo "<div class='Cabeza'>";
    echo "<a href='ProductInsert.php'>Insertar producto</a>";
    echo "<a href='Procesos/Proceso_Cerrar.php'>" . $_SESSION['u_usuario'] . " (salir)</a>";
    echo "</div>";
  }else {
    echo "<div class='Cabeza'>";
    echo "<a href='Login.php'>Iniciar sesion</a>";
    echo "</div>";
  }

?>
<html>
  <head>
    <meta charset="utf-8">
    <title>Registrando</title>
    <link rel="stylesheet" href="css/main.css">
  </head>
  <body>




    <div class="contenedor">


    <?php
      include("Procesos/Conexion.php");

      $query = "SELECT * FROM productos";
      $resultado = $conexion->query($query);
      while ($row = $resultado->fetch_assoc()) {
    ?>

    <div class="Cuadros">

      <!-- 1ra Parte  -->
      <div class="Image">
          <img src="data:image/jpg;base64,<?php echo base64_encode($row['Foto'])?>" alt="Foto">
      </div>

      <!-- 2da Parte  -->
      <div class="InfoPricipal">
        <div>Marca: <?php echo $row['Marca']; ?></div>
        <div>Tipo: <?php echo $row['Tipo']; ?></div>
      </div>
      <!-- 3ra Parte  -->
      <div class="InfoSecundaria">
        <div>Fecha de compra: <?php echo $row['FechaCompra']; ?></div>
        <div>Peso: <?php echo $row['Peso']; ?></div>
        <div>Color: <?php echo $row['Color']; ?></div>
      </div>
      <!-- 4ta Parte  -->
      <div class="InfoTercearia">
        <div><?php echo $row['Comentario']; ?></div>
      </div>
      <!-- 5ta Parte  -->
      <div class="InfoFinal">
        <div><?php echo "Subido por: " . $row['Usuario']; ?></div>
        <div><?php echo "Fecha de subida: " . $row['FechaSubida']; ?></div>
      </div>

    </div>



    <?php
			}
		?>

    </div>

    <div class="PDP">
      <?php if (isset($_SESSION['u_usuario'])) {echo "<a href='Procesos/Proceso_Cerrar.php'>" . $_SESSION['u_usuario'] . " (salir)</a>";} ?>
    </div>

  </body>
</html>
