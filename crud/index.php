<?php
//* Pagina de inicio donde se ve la tabla con los datos de los equipos
$activo = "index";
$titulo = "Editor";
require_once "../modelo/Equipos.php";
require_once "../modelo/RepositorioEquipos.php";
require_once "../modelo/conexion.php";
require_once "templates/header.php";

$repo = new RepositorioEquipos($conexion);

$lista = $repo->findAll();

echo "<div class='container'>";
echo "<a class='btn btn-primary' href='form_add.php'>Añadir Equipo</a>";
echo "<table class='table'>";
echo "<tr><th>Id</th><th>Nombre</th><th>Jugadores</th></tr>";

foreach ($lista as $equipo) {
    echo "<tr><td>$equipo->id</td>";
    echo "<td>$equipo->nombreEquipo</td>";
    echo "<td>$equipo->datosJugadores</td>";
    echo "<td><a class='btn btn-primary' href='form_update.php?id=$equipo->id'> Modificar </a>";
    echo "<a class='btn btn-primary' href='delete.php?id=$equipo->id'>Borrar</td></tr>";
}

echo "</table></div>";

require_once "templates/footer.php";
