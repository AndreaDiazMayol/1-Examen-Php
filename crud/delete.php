<?php
//* Borra de la base de datos los equipos
require_once "../modelo/Equipos.php";
require_once "../modelo/RepositorioEquipos.php";
require_once "../modelo/conexion.php";

if (empty($_GET["id"])) {
} else {
    $id = $_GET["id"];

    $repo = new RepositorioEquipos($conexion);

    $articulo = $repo->findById($id);
    if ($articulo) {
        $repo->delete($id);
    } else {
    }
}
$url = $_SERVER['HTTP_REFERER'];
header("Location: " . $url);
