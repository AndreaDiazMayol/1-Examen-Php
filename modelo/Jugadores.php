<?php
class Jugadores
{
    public $id;
    public $nombre;
    public $telefono;
    public $email;
    public $foto;
    public $equipo;

    public function setPropiedades($nombre, $telefono, $email, $foto, $equipo)
    {
        $this->nombre = $nombre;
        $this->telefono = $telefono;
        $this->email = $email;
        $this->foto = $foto;
        $this->equipo = $equipo;
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
     * Get the value of nombre
     */
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * Set the value of nombre
     *
     * @return  self
     */
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;

        return $this;
    }

    /**
     * Get the value of telefono
     */
    public function getTelefono()
    {
        return $this->telefono;
    }

    /**
     * Set the value of telefono
     *
     * @return  self
     */
    public function setTelefono($telefono)
    {
        $this->telefono = $telefono;

        return $this;
    }

    /**
     * Get the value of email
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set the value of email
     *
     * @return  self
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get the value of foto
     */
    public function getFoto()
    {
        return $this->foto;
    }

    /**
     * Set the value of foto
     *
     * @return  self
     */
    public function setFoto($foto)
    {
        $this->foto = $foto;

        return $this;
    }

    /**
     * Get the value of equipo
     */
    public function getEquipo()
    {
        return $this->equipo;
    }

    /**
     * Set the value of equipo
     *
     * @return  self
     */
    public function setEquipo($equipo)
    {
        $this->equipo = $equipo;

        return $this;
    }
}
