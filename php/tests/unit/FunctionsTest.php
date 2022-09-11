<?php

class FunctionsTest extends \Codeception\Test\Unit
{
    /**
     * @var \UnitTester
     */
    protected $tester;
    
    protected function _before()
    {
        include_once('./php/src/functions.php');
    }

    protected function _after()
    {
    }

    // tests
    public function test240EsParell()
    {
        $this->assertTrue(esParell(2));
        $this->assertFalse(esParell(3));
    }

    public function test240arrayAleatori()
    {
        $array = arrayAleatori(10,1,10);
        $this->assertEquals(10,count($array));
        $this->assertLessThan(100,array_sum($array));
        $this->assertLessThanOrEqual(10,max($array));
        $this->assertGreaterThanOrEqual(1,min($array));
    }

    public function test240countParells()
    {
        $array = ['1','2','3','4','5','6','7','8','9','10'];
        $this->assertEquals(5,countParells($array));
    }

    public function test241Major(){
        $this->assertEquals(10,major(1,2,3,4,5,6,7,8,9,10));
    }
    public function test241Concatenar(){
        $this->assertEquals('Hola mundo',concatenar('Hola','mundo'));
    }

    public function test242Digits(){
        $this->assertEquals(3,digits(123));
        $this->assertEquals(1,digits(1));
        $this->assertEquals(5,digits(12324));
        $this->assertEquals(5,digits(-12324));

    }

    public function test242DigitsN(){
        $this->assertEquals(3,digitsN(123,3));
        $this->assertEquals(false,digitsN(112,4));
        $this->assertEquals(2,digitsN(12324,2));

    }

    public function test242LlevaDarrere(){
        $this->assertEquals(1,llevaDarrere(123,2));
        $this->assertEquals(false,llevaDarrere(112,4));
        $this->assertEquals(123,llevaDarrere(12324,2));

    }

    public function test242LlevaDavant(){
        $this->assertEquals(3,llevaDavant(123,2));
        $this->assertEquals(false,llevaDavant(112,4));
        $this->assertEquals(324,llevaDavant(12324,2));

    }

    public function test243peseta2Euros(){
        $this->assertEquals(1,peseta2euros(166));
        $this->assertEquals(100,peseta2euros(16600));
    }

    public function test243euro2Pesetes(){
        $this->assertEquals(166,euro2pesetes(1));
        $this->assertEquals(16600,euro2pesetes(100));
    }

    public function test250frasesImparelles(){
        $this->assertEquals('hola',frasesImparelles('haollaa'));
    }

    public function test251vocals(){
        $this->assertEquals(3,vocals('HolÀ amigá')['a']);
    }

}