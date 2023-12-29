<?php
//* Pagina de inicio donde se ve la tabla con los datos de los jugadores
$activo = "jugadores";
$titulo = "Jugadores";
require_once "../modelo/Jugadores.php";
require_once "../modelo/RepositorioJugadores.php";
require_once "../modelo/conexionJugadores.php";
require_once "templates/header.php";

$repo = new RepositorioJugadores($conexion);
$lista = $repo->findAll();
echo "<div class='container'>";
echo "<a class='btn btn-primary' href='form_addJugadores.php'>Añadir Jugador</a>";
echo "<table class='table'>";
echo "<tr><th>Id</th><th>Nombre</th><th>Telefono</th><th>Email</th><th>Equipo</th><th>Imagen</th></th></tr>";

foreach ($lista as $jugador) {
    echo "<tr><td>$jugador->id</td>";
    echo "<td>$jugador->nombre</td>";
    echo "<td>$jugador->telefono</td>";
    echo "<td>$jugador->email</td>";
    echo "<td>$jugador->equipo</td>";
    echo "<td><img src='img/" . $jugador->foto . "' style='height: 100px;'></td>";
    echo "<td><a class='btn btn-primary' href='deleteJugadores.php?id=$jugador->id'>Borrar</a></td></tr>";
}
echo "</table></div>";
require_once "templates/footer.php";
