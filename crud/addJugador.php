<?php
//* Codigo para añadir los jugadores a la base de datos.
require_once "../modelo/Jugadores.php";
require_once "../modelo/RepositorioJugadores.php";
require_once "../modelo/conexionJugadores.php";

if (isset($_POST['submit'])) {
    if (strlen($_POST["telefono"]) <= 9) {
        if (isset($_FILES['imagen']) && $_FILES['imagen']['tmp_name'] != "") {
            $nombreFichero = date("Y-m-d - H-i-s") . "-" . $_FILES['imagen']['name'];
            //Leo la ubicación temporal del archivo para después dejarlo en la carpeta deseada
            $file_loc = $_FILES['imagen']['tmp_name'];
            //movemos el archivo a la carpeta deseada
            move_uploaded_file($file_loc, "img/" . $nombreFichero);
        } else {
            $nombreFichero = "imagen.jpg";
        }

        $jugador = new Jugadores();
        $jugador->setPropiedades($_POST["nombre"], $_POST["telefono"], $_POST["email"], $nombreFichero, $_POST["equipos"]);
        $repo = new RepositorioJugadores($conexion);
        $repo->save($jugador);
    } else {
        $mensaje = "<div class='alert alert-primary' role='alert'>El numero es demasiado largo</div>";
        header("location: form_addJugadores.php?mensaje=" . urlencode($mensaje));
        exit;
    }
}
header("location: form_addJugadores.php");
