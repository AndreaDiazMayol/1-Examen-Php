<?php
//* Codigo para poder actualizar la base de datos de los equipos
require_once "../modelo/Equipos.php";
require_once "../modelo/RepositorioEquipos.php";
require_once "../modelo/conexion.php";

$equipo = new Equipos();
$equipo->setPropiedades($_POST["nombreEquipo"], $_POST["datosJugadores"]);
$equipo->setId($_POST["id"]);
$repo = new RepositorioEquipos($conexion);
$repo->update($equipo);

header("location: index.php");
