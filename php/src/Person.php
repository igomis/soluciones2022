<?php

abstract class Person
{
    const EDAD_LIMITE = 66;
    protected static  $limite_sueldo = self::EDAD_LIMITE;
    protected $nombre,$apellidos,$edat;

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
        return $this->edat > self::$limite_sueldo;
    }

    public static function modificaLimite(int $limite){
        self::$limite_sueldo = $limite;
    }

    abstract public static function toHtml(Person $p): string;

    public function __toString(): string{
        return "<p>".$this->getNombre()." ".$this->getApellidos()."</p>";
    }

}