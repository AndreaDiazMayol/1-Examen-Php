<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "vladimirtachenko";

$conexion = new mysqli($servername, $username, $password, $dbname);

$consulta = "CREATE TABLE IF NOT EXISTS jugadores (
        id INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        nombre VARCHAR(255) NOT NULL,
        telefono INT(9),
        email VARCHAR(255),
        foto VARCHAR(255),
        equipo VARCHAR(255)
              );";
$conexion->query($consulta);
