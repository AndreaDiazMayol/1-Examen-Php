<?php
require_once "Equipos.php";

class RepositorioEquipos
{
    private $conexion;

    public function __construct($con)
    {
        $this->conexion = $con;
    }
    public function save($equipo)
    {
        $textoSQL = "INSERT INTO equipos (nombreEquipo, datosJugadores) VALUES ";
        $textoSQL .= "('$equipo->nombreEquipo', '$equipo->datosJugadores')";

        $this->conexion->query($textoSQL);
    }
    public function update($equipo)
    {
        $textoSQL  = "UPDATE equipos SET";
        $textoSQL .= " nombreEquipo='" . $equipo->getNombreEquipo() . "', ";
        $textoSQL .= " datosJugadores='" . $equipo->getDatosJugadores() . "' ";
        $textoSQL .= "WHERE id=" . $equipo->getId();

        $this->conexion->query($textoSQL);
    }
    public function delete($id)
    {
        $textoSQL = "DELETE FROM equipos WHERE id=" . $id;
        $this->conexion->query($textoSQL);
    }
    public function findAll()
    {
        //*Escribo el texto de la consulta para recuperar todos los artículos de la BBDD
        $textoSQL = "SELECT * FROM equipos";
        //*Realizo la consulta aprovechando la conexión que me han pasado en el constructor
        $resultado = $this->conexion->query($textoSQL);
        //*Array de artículos que vamos a devolver
        $arts = [];
        $cont = 0;
        //*Mientras haya filas en la consulta, las convierto en artículos del array
        while ($fila = $resultado->fetch_object()) {
            $arts[] = new Equipos();
            $arts[$cont]->setPropiedades($fila->nombreEquipo, $fila->datosJugadores);
            $arts[$cont]->setId($fila->id);
            $cont++;
        }

        return $arts;
    }
    public function findById($idABuscar)
    {
        $textoSQL = "SELECT * FROM equipos WHERE id=$idABuscar";
        $resultado = $this->conexion->query($textoSQL);
        $fila = $resultado->fetch_object();
        $equipo = new Equipos();
        $equipo->setPropiedades($fila->nombreEquipo, $fila->datosJugadores);
        $equipo->setId($fila->id);
        return $equipo;
    }
}
