<?php
//*Formulario para añadir los equipos a la base de datos
$titulo = "Añadir";
require_once "templates/header.php";
?>
<div class="container">
  <h1>Formulario para añadir Equipos</h1>

  <form action="add.php" method="post" enctype="multipart/form-data">

    <div class="mb-3">
      <label for="nombreEquipo" class="form-label">Nombre</label>
      <input type="text" class="form-control" id="nombreEquipo" name="nombreEquipo" required>
    </div>

    <div class="mb-3">
      <label for="datosJugadores" class="form-label">Datos Jugadores</label>
      <textarea class="form-control" id="datosJugadores" name="datosJugadores" rows="3" required></textarea>
    </div>

    <button type="submit" name="submit" class="btn btn-primary">Enviar</button>
  </form>

  <div class="container my-5">
    <a href="index.php" class="btn btn-primary">Volver al listado</a>
  </div>
</div>
<?php require_once "templates/footer.php" ?>