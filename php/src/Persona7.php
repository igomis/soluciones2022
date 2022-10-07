<?php

namespace Igomis\Phpserve;

class Persona7
{
    protected $nombre,$apellidos,$edat;

    /**
     * @param $nombre
     * @param $apellidos
     * @param $edat
     */
    public function __construct($nombre, $apellidos, $edat=25)
    {
        $this->nombre = $nombre;
        $this->apellidos = $apellidos;
        $this->edat = $edat;
    }

    /**
     * @return mixed
     */
    public function getEdat()
    {
        return $this->edat;
    }

    /**
     * @param mixed $edat
     */
    public function setEdat($edat): void
    {
        $this->edat = $edat;
    }


    /**
     * @return mixed
     */
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * @param mixed $nombre
     */
    public function setNombre($nombre): void
    {
        $this->nombre = $nombre;
    }

    /**
     * @return mixed
     */
    public function getApellidos()
    {
        return $this->apellidos;
    }

    /**
     * @param mixed $apellidos
     */
    public function setApellidos($apellidos): void
    {
        $this->apellidos = $apellidos;
    }



    public function getNombreCompleto(): string
    {
        return $this->getNombre().' '.$this->getApellidos();
    }

    public function estaJubilado(): bool
    {
        return $this->edat > 66;
    }




}