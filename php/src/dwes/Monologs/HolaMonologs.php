<?php

namespace Dwes\Monologs;

use Monolog\Handler\FirePHPHandler;
use Monolog\Level;
use Monolog\Logger;
use Monolog\Handler\RotatingFileHandler;


class HolaMonologs
{

    private Logger $miLog;


    /**
     * @param $log
     */
    public function __construct($nomCanal, protected $hora

    )
    {
        $this->miLog = new Logger($nomCanal);
        $this->miLog->pushHandler(new RotatingFileHandler("logs/Saluda.log", 0, Level::Debug));
        $this->miLog->pushHandler(new FirePHPHandler(Level::Debug));
        if (($hora < 0) || ($hora >24)) {
            $this->hora = null;
            $this->miLog->warning("Hora incorrecta");
        } else {
            $this->hora = $hora;
        }
    }

    public function saludar()
    {
        if ($this->hora <= 12) {
            $this->miLog->info("Bon dia !!");
            return true;
        }
        if ($this->hora <= 20) {
            $this->miLog->info("Bona vesprada !!");
            return true;
        }
        $this->miLog->info("Bona nit !!");
    }

    public function acomiadar()
    {
        $this->miLog->info("Adeu !!");
    }
}
