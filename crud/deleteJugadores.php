<?php
//* Borra de la base de datos los jugadores
require_once "../modelo/Jugadores.php";
require_once "../modelo/RepositorioJugadores.php";
require_once "../modelo/conexionJugadores.php";

if (empty($_GET["id"])) {
} else {
    $id = $_GET["id"];

    $repo = new RepositorioJugadores($conexion);

    $articulo = $repo->findById($id);
    if ($articulo) {
        $repo->delete($id);
    } else {
    }
}
$url = $_SERVER['HTTP_REFERER'];
header("Location: " . $url);
