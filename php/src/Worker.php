<?php


abstract class Worker extends Person
{
    protected $telefonos = array();

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


    public static function toHtml(Person $p): string{
        return "<p>".$p->getNombreCompleto()."</p>";
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
        return static::calcularSueldo() > 3333;
    }

    public function toJSON(): string
    {
        $mapa = array();
        foreach ($this as $clave => $valor) {
            $mapa[$clave] = $valor; }
        return json_encode($mapa);
    }

    public function toSerialize(): string
    {
        return serialize($this);
    }


    abstract function calcularSueldo(): float;
}