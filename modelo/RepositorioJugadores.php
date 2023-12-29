<?php
require_once "Jugadores.php";

class RepositorioJugadores
{
    private $conexion;

    public function __construct($con)
    {
        $this->conexion = $con;
    }
    public function save($jugador)
    {
        $textoSQL = "INSERT INTO jugadores (nombre, telefono, email, foto, equipo) VALUES ";
        $textoSQL .= "('$jugador->nombre', '$jugador->telefono', '$jugador->email', '$jugador->foto', '$jugador->equipo')";

        $this->conexion->query($textoSQL);
    }
    public function delete($id)
    {
        $textoSQL = "DELETE FROM jugadores WHERE id=" . $id;
        $this->conexion->query($textoSQL);
    }
    public function findAll()
    {
        //*Escribo el texto de la consulta para recuperar todos los artículos de la BBDD
        $textoSQL = "SELECT * FROM jugadores";
        //*Realizo la consulta aprovechando la conexión que me han pasado en el constructor
        $resultado = $this->conexion->query($textoSQL);
        //*Array de artículos que vamos a devolver
        $arts = [];
        $cont = 0;
        //*Mientras haya filas en la consulta, las convierto en artículos del array
        while ($fila = $resultado->fetch_object()) {
            $arts[] = new Jugadores();
            $arts[$cont]->setPropiedades($fila->nombre, $fila->telefono, $fila->email, $fila->foto, $fila->equipo);
            $arts[$cont]->setId($fila->id);
            $cont++;
        }
        return $arts;
    }
    public function findById($idABuscar)
    {
        $textoSQL = "SELECT * FROM jugadores WHERE id=$idABuscar";
        $resultado = $this->conexion->query($textoSQL);
        $fila = $resultado->fetch_object();
        $equipo = new Jugadores();
        $equipo->setPropiedades($fila->nombre, $fila->telefono, $fila->email, $fila->foto, $fila->equipo);
        $equipo->setId($fila->id);
        return $equipo;
    }
}
