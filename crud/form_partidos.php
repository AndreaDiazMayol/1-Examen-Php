<?php
//* Formulario y codigo que te dice el equipo ganador y los puntos
$activo = "form_partidos";
$titulo = "Partidos";
require_once "templates/header.php";
?>
<div class="container">
    <h1>Formulario para Partidos</h1>
    <?php
    if (isset($_POST['submit'])) {
        $equipo1 = $_POST["equipo1"];
        $equipo2 = $_POST["equipo2"];
        $puntos1 = $_POST["puntos1"];
        $puntos2 = $_POST["puntos2"];
        if ($puntos1 > $puntos2) {
            echo "<div class='alert alert-primary' role='alert'>
        " . $equipo1 . " gana por " . ($puntos1 - $puntos2) . "puntos</div>";
        } elseif ($puntos2 > $puntos1) {
            echo "<div class='alert alert-primary' role='alert'>
            " . $equipo2 . " gana por " . ($puntos2 - $puntos1) . "puntos</div>";
        } elseif ($puntos1 == $puntos2) {
            echo "<div class='alert alert-primary' role='alert'>Empate entre " . $equipo1 . " y " . $equipo2 . "</div>";
        }
    }
    ?>
    <form action="form_partidos.php" method="post" enctype="multipart/form-data">

        <div class="mb-3">
            <label for="equipo1" class="form-label"></label>
            <input type="text" class="form-control" id="equipo1" name="equipo1" required placeholder="Nombre equipo 1">
        </div>
        <div class="mb-3">
            <label for="puntos1" class="form-label"></label>
            <input type="text" class="form-control" id="puntos1" name="puntos1" required placeholder="Puntos del equipo 1">
        </div>
        <div class="mb-3">
            <label for="equipo2" class="form-label"></label>
            <input type="text" class="form-control" id="equipo2" name="equipo2" required placeholder="Nombre equipo 2">
        </div>
        <div class="mb-3">
            <label for="puntos2" class="form-label"></label>
            <input type="text" class="form-control" id="puntos2" name="puntos2" required placeholder="Puntos del equipo 2">
        </div>

        <button type="submit" name="submit" class="btn btn-primary">Enviar</button>
    </form>

    <div class="container my-5">
        <a href="index.php" class="btn btn-primary">Volver al listado</a>
    </div>
</div>
<?php require_once "templates/footer.php" ?>