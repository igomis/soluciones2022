<?php

class ObjectesTest extends \Codeception\Test\Unit
{
    /**
     * @var \UnitTester
     */
    protected $tester;
    
    protected function _before()
    {
        include_once('./src/Persona.php');
        include_once('./src/Persona7.php');
        include_once('./src/Persona8.php');
        include_once('./src/Empleado.php');
    }

    public function test301(){
        $empleado = new \Igomis\Phpserve\Persona();
        $empleado->setNombre('Ignasi');
        $empleado->setApellidos('Gomis Mullor');
        $empleado->setEdat('60');
        $this->assertEquals('Ignasi Gomis Mullor',$empleado->getNombreCompleto());
        $this->assertEquals(false,$empleado->estaJubilado());
    }

    public function test302()
    {
        $empleado = new \Igomis\Phpserve\Persona7('Ignasi', 'Gomis Mullor');
        $this->assertEquals('Ignasi Gomis Mullor', $empleado->getNombreCompleto());
        $this->assertEquals(false, $empleado->estaJubilado());
        $this->assertEquals(25, $empleado->getEdat());
        $empleado = new \Igomis\Phpserve\Persona7('Ignasi', 'Gomis Mullor', 70);
        $this->assertEquals('Ignasi Gomis Mullor', $empleado->getNombreCompleto());
        $this->assertEquals(true, $empleado->estaJubilado());
    }

    public function test303()
    {
        $empleado = new \Igomis\Phpserve\Persona8('Ignasi', 'Gomis Mullor');
        $this->assertEquals('Ignasi Gomis Mullor', $empleado->getNombreCompleto());
        $this->assertEquals(false, $empleado->estaJubilado());
        $this->assertEquals(25, $empleado->getEdat());
        $empleado = new \Igomis\Phpserve\Persona8('Ignasi', 'Gomis Mullor', 70);
        $this->assertEquals('Ignasi Gomis Mullor', $empleado->getNombreCompleto());
        $this->assertEquals(true, $empleado->estaJubilado());
    }

    public function test304(){
        $empleado = new \Igomis\Phpserve\Persona8('Ignasi','Gomis Mullor',75);
        $this->assertEquals(true,$empleado->estaJubilado());
    }

    public function test305(){
        $empleado = new \Igomis\Phpserve\Persona8('Ignasi','Gomis Mullor');
        $this->assertEquals(false,$empleado->estaJubilado());
        $empleado->setEdat(67);
        $this->assertEquals(true,$empleado->estaJubilado());
        $empleado::modificaLimite(70);
        $this->assertEquals(false,$empleado->estaJubilado());

    }

    public function test306(){
        $empleado = new \Igomis\Phpserve\Empleado('Ignasi','Gomis Mullor');
        $empleado->setSueldo('2000');
        $this->assertEquals('Ignasi Gomis Mullor',$empleado->getNombreCompleto());
        $this->assertEquals(false,$empleado->debePagarImpuestos());
        $empleado->anyadirTelefono(12345678);
        $empleado->anyadirTelefono(87654321);
        $this->assertEquals('12345678,87654321',$empleado->listarTelefonos());
        $empleado->vaciarTelefonos();
        $this->assertEquals('',$empleado->listarTelefonos());
    }


    public function test307(){
        $empleado = new \Igomis\Phpserve\Empleado('Ignasi','Gomis Mullor');
        $empleado->setSueldo('2000');
        $empleado->anyadirTelefono(12345678);
        $empleado->anyadirTelefono(87654321);
        $this->assertEquals('<p>Ignasi Gomis Mullor :2000</p><ul><li>12345678</li><li>87654321</li></ul>',\Igomis\Phpserve\Empleado::toHtml($empleado));

    }








}