<?php

class IniciCest
{
    public function _before(AcceptanceTester $I) {}

    public function try320Test(AcceptanceTester $I)
    {
        $I->amOnPage('/inici.php');
        $I->seeInSource('Tenet<br>3 € (IVA no incluido)');
    }

    public function try321Test(AcceptanceTester $I)
    {
        $I->amOnPage('/inici.php');
        $I->see('Duracion: 107 minutos');
    }

    public function try322Test(AcceptanceTester $I)
    {
        $I->amOnPage('/inici.php');
        $I->see('Idiomas: es,en,fr');
        $I->see('Formato de pantalla: 16:9');
    }

}
