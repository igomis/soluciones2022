<?php

class Enterprise implements JSerializable
{
    protected $workers = array();

    public function __construct(protected $nom,protected $direccio) {}

    /**
     * @return mixed
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * @param mixed $nom
     */
    public function setNom($nom): void
    {
        $this->nom = $nom;
    }

    /**
     * @return mixed
     */
    public function getDireccio()
    {
        return $this->direccio;
    }

    /**
     * @param mixed $direccio
     */
    public function setDireccio($direccio): void
    {
        $this->direccio = $direccio;
    }

    public function addWorker(Worker $w){
        $this->workers[] = $w;
    }

    public function listWorkersHtml() :string{
        $html = '<div>';
        foreach ($this->workers as $worker){
            $html .= Worker::toHtml($worker);
        }
        return $html.'</div>';
    }

    public function getCosteNominas(){
        $cost = 0;
        foreach ($this->workers as $worker){
            $cost += $worker->calcularSueldo();
        }
        return $cost;
    }

    public function toJSON(): string
    {
        $mapa = array();
        foreach ($this as $clave => $valor) {
            if (is_array($valor)){
                foreach ($valor as $worker){
                    $mapa[$clave][] = $worker->toJSON();
                }
            } else {
                $mapa[$clave] = $valor;
            }
        }
        return json_encode($mapa);
    }

    public function toSerialize(): string
    {
        return serialize($this);
    }
}