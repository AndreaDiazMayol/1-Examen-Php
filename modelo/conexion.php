<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "vladimirtachenko";

$conexion = new mysqli($servername, $username, $password, $dbname);

$consulta = "CREATE TABLE IF NOT EXISTS equipos (
        id INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        nombreEquipo VARCHAR(255) NOT NULL,
        datosJugadores TEXT
              );";
$conexion->query($consulta);
