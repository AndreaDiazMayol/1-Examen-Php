<?php
//*Formulario para añadir los jugadores a la base de datos
$titulo = "Añadir Jugador";
require_once "templates/header.php";
require_once "../modelo/Equipos.php";
require_once "../modelo/RepositorioEquipos.php";
require_once "../modelo/conexion.php";
$repo = new RepositorioEquipos($conexion);
$lista = $repo->findAll();
?>
<div class="container">
    <h1>Formulario para añadir Jugador</h1>
    <?php echo isset($_GET['mensaje']) ? $_GET['mensaje'] : ''; ?>
    <form action="addJugador.php" method="post" enctype="multipart/form-data">

        <div class="mb-3">
            <label for="nombre" class="form-label">Nombre</label>
            <input type="text" class="form-control" id="nombre" name="nombre" required>
        </div>
        <div class="mb-3">
            <label for="telefono" class="form-label">Telefono</label>
            <input type="tel" class="form-control" id="telefono" name="telefono" rows="3" required>
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" id="email" name="email" required>
        </div>
        <div class="mb-3">
            <label for="imagen" class="form-label">Imagen</label>
            <input type="file" class="form-control" id="imagen" name="imagen">
        </div>
        <label for="equipos">Equipo:</label>
        <select id="equipos" name="equipos">
            <?php foreach ($lista as $equipo) {
                echo "<option value='$equipo->nombreEquipo'>" . $equipo->nombreEquipo . "</option>";
            } ?>
        </select>
        <button type="submit" name="submit" class="btn btn-primary">Enviar</button>
    </form>

    <div class="container my-5">
        <a href="jugadores.php" class="btn btn-primary">Volver al listado</a>
    </div>
</div>
<?php require_once "templates/footer.php" ?>