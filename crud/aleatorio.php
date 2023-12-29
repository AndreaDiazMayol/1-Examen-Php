<?php
//* Codigo que selecciona aleatoriamente dos equipos de la base de datos
$activo = "aleatorio";
$titulo = "Aleatorio";
require_once "../modelo/Equipos.php";
require_once "../modelo/RepositorioEquipos.php";
require_once "../modelo/conexion.php";
require_once "templates/header.php";
$repo = new RepositorioEquipos($conexion);

$lista = $repo->findAll();
$arrayEquipos = [];
foreach ($lista as $equipo) {
    array_push($arrayEquipos, $equipo->nombreEquipo);
}
$num1 = rand(1, (count($arrayEquipos) - 1));
$num2 = rand(1, (count($arrayEquipos) - 1));

echo "<table class='table'>";
echo "<tr><th>Equipo 1</th><th>VS</th><th>Equipo 2</th></tr>";
echo "<tr><td>" . $arrayEquipos[$num1] . "</td>";
echo "<td>VS</td>";
echo "<td>" . $arrayEquipos[$num2] . "</td> </tr>";
echo "</table></div>";
require_once "templates/footer.php";
