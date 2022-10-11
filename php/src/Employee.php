<?php


class Employee extends Worker implements JSerializable
{

    public function __construct(protected $nombre, protected $apellidos, protected $edat=25,protected $horasTrabajadas,protected $precioPorHora) {}

    /**
     * @return mixed
     */
    public function getHorasTrabajadas()
    {
        return $this->horasTrabajadas;
    }

    /**
     * @param mixed $horasTrabajadas
     */
    public function setHorasTrabajadas($horasTrabajadas): void
    {
        $this->horasTrabajadas = $horasTrabajadas;
    }

    /**
     * @return mixed
     */
    public function getPrecioPorHora()
    {
        return $this->precioPorHora;
    }

    /**
     * @param mixed $precioPorHora
     */
    public function setPrecioPorHora($precioPorHora): void
    {
        $this->precioPorHora = $precioPorHora;
    }

    public function calcularSueldo(): float
    {
        return $this->horasTrabajadas*$this->precioPorHora;
    }

    public function __toString(): string
    {
        return parent::__toString();
    }




}