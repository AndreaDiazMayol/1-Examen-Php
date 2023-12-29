<?php
//* Codigo para añadir los equipos a la base de datos.
require_once "../modelo/Equipos.php";
require_once "../modelo/RepositorioEquipos.php";
require_once "../modelo/conexion.php";

if (isset($_POST['submit'])) {

  $equipo = new Equipos();
  $equipo->setPropiedades($_POST["nombreEquipo"], $_POST["datosJugadores"]);
  $repo = new RepositorioEquipos($conexion);
  $repo->save($equipo);
  header("location: form_add.php");
}
