<?php

/**
 *  La Classe employee extends de Worker e i implement JSeriazable
 *  Implementa els mètodes per a calcular el seu sou
 */
class Employee extends Worker implements JSerializable
{
    /**
     * @param $nombre
     * @param $apellidos
     * @param $edat
     * @param $horasTrabajadas
     * @param $precioPorHora
     */
    public function __construct (
        protected $nombre,
        protected $apellidos,
        protected $edat=25,
        protected $horasTrabajadas=0,
        protected $precioPorHora=0
    )
    {}

    /**
     * @return int
     */
    public function getHorasTrabajadas(): int
    {
        return $this->horasTrabajadas;
    }

    /**
     * @param int $horasTrabajadas
     */
    public function setHorasTrabajadas(int $horasTrabajadas): void
    {
        $this->horasTrabajadas = $horasTrabajadas;
    }

    /**
     * @return float
     */
    public function getPrecioPorHora(): float
    {
        return $this->precioPorHora;
    }

    /**
     * @param float $precioPorHora
     */
    public function setPrecioPorHora(float $precioPorHora): void
    {
        $this->precioPorHora = $precioPorHora;
    }

    /**
     * @return float
     */
    public function calcularSueldo(): float
    {
        return $this->horasTrabajadas*$this->precioPorHora;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return parent::__toString();
    }
}
