<?php

class DocumentorCest
{
    public function _before(AcceptanceTester $I)
    {
    }


    public function try521WorksIndexTest(AcceptanceTester $I)
    {
        $I->amOnPage('/docs/api/index.html');
        $I->see('La Classe employee extends de Worker e i implement JSeriazable Implementa els mètodes per a calcular el seu sou');
    }

    public function try521WorksEmployeeTest(AcceptanceTester $I)
    {
        $I->amOnPage('/docs/api/classes/Employee.html');
        $I->see('public calcularSueldo() : float');
        $I->see('public getPrecioPorHora() : float');
        $I->see('public getPrecioPorHora() : float');

    }

}
