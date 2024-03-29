<?php

class Empleado extends Persona8
{
    protected $telefonos = array();
    protected $sueldo;

    /**
     * @return mixed
     */
    public function getSueldo()
    {
        return $this->sueldo;
    }

    /**
     * @param mixed $sueldo
     */
    public function setSueldo($sueldo): void
    {
        $this->sueldo = $sueldo;
    }

    public function anyadirTelefono(int $telefono):void
    {
        $this->telefonos[] = $telefono;
    }

    public function listarTelefonos():string
    {
        return implode(',',$this->telefonos);
    }

    public function vaciarTelefonos():void
    {
        $this->telefonos = array();
    }

    /**
     * @return array
     */
    public function getTelefonos(): array
    {
        return $this->telefonos;
    }


    public static function toHtml(Persona8 $p): string{
        $parragraf = Persona8::toHtml($p);
        if ($p instanceof Empleado) {
            $parragraf .= "<ul>";
            foreach ($p->getTelefonos() as $telefono) {
                $parragraf .= "<li>$telefono</li>";
            }
            $parragraf .= "</ul>";
        }
        return $parragraf;
    }

    public function __toString(): string{
        $parragraf = parent::__toString()."<ul>";
        foreach ($this->getTelefonos() as $telefono) {
            $parragraf .= "<li>$telefono</li>";
        }
        return $parragraf."</ul>";
    }

    public function debePagarImpuestos(): bool
    {
        return $this->getSueldo() > 3333;
    }
}