<?php
//* Formulario para actualizar los equipos
require_once "templates/header.php";
require_once "../modelo/Equipos.php";
require_once "../modelo/RepositorioEquipos.php";
require_once "../modelo/conexion.php";

$id = $_GET["id"];
$repo = new RepositorioEquipos($conexion);
$articulo = $repo->findById($id);
?>

<div class="container">
  <h1>Formulario para modificar Equipo</h1>

  <form action="update.php?id=<?php echo $id; ?>" method="post" enctype="multipart/form-data">
    <input type="hidden" name="id" value="<?php echo $id ?>">
    <div class="mb-3">
      <label for="nombreEquipo" class="form-label">Nombre</label>
      <input type="text" class="form-control" id="nombreEquipo" name="nombreEquipo" value='<?php echo $articulo->getNombreEquipo(); ?>' required>
    </div>

    <div class="mb-3">
      <label for="datosJugadores" class="form-label">Contenido</label>
      <textarea class="form-control" id="datosJugadores" name="datosJugadores" rows="3" required><?php echo $articulo->getDatosJugadores(); ?></textarea>
    </div>
    <button type="submit" name="submit" class="btn btn-primary">Enviar</button>
  </form>

  <div class="container my-5">
    <a href="index.php" class="btn btn-primary">Volver al listado</a>
  </div>
</div>
<?php require_once "templates/footer.php" ?>