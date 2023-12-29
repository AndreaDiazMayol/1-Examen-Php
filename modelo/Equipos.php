<?php
class Equipos
{
    public $id;
    public $nombreEquipo;
    public $datosJugadores;

    public function setPropiedades($equi, $juga)
    {
        $this->nombreEquipo = $equi;
        $this->datosJugadores = $juga;
    }

    /**
     * Get the value of id
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set the value of id
     *
     * @return  self
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get the value of nombreEquipo
     */
    public function getNombreEquipo()
    {
        return $this->nombreEquipo;
    }

    /**
     * Set the value of nombreEquipo
     *
     * @return  self
     */
    public function setNombreEquipo($nombreEquipo)
    {
        $this->nombreEquipo = $nombreEquipo;

        return $this;
    }

    /**
     * Get the value of datosJugadores
     */
    public function getDatosJugadores()
    {
        return $this->datosJugadores;
    }

    /**
     * Set the value of datosJugadores
     *
     * @return  self
     */
    public function setDatosJugadores($datosJugadores)
    {
        $this->datosJugadores = $datosJugadores;

        return $this;
    }
}
