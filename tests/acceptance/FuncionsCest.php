<?php

class FuncionsCest
{
    public function _before(AcceptanceTester $I)
    {
    }


    public function try243WorksTest(AcceptanceTester $I)
    {
        $I->amOnPage('/243.php');
        $I->fillField('euros', '10');
        $I->click('submit');
        $I->seeInCurrentUrl('/243.php');
        $I->seeInField('pesetes',"1660");
    }

    public function try244WorksTest(AcceptanceTester $I)
    {
        $I->amOnPage('/244.php');
        $I->see('Dades incorrectes');
        $I->amOnPage('/244.php?quantitat=hola');
        $I->see('Dades incorrectes');
        $I->amOnPage('/244.php?quantitat=2');
        $I->fillField('nom0', 'Pa');
        $I->fillField('nom1', 'Oli');
        $I->fillField('preu0', '1.5');
        $I->fillField('preu1', '0.5');
        $I->click('submit');
        $I->seeInCurrentUrl('/244.php');
        $I->see('249');
        $I->see('83');
        $I->see('332');
        $I->amOnPage('/244.php?quantitat=2');
        $I->fillField('nom0', 'Pa');
        $I->fillField('nom1', 'Oli');
        $I->fillField('preu0', '1.5');
        $I->fillField('preu1', 'hola');
        $I->click('submit');
        $I->seeInCurrentUrl('/244.php');
        $I->see('249');

    }

    public function try245WorksTest(AcceptanceTester $I)
    {
        $I->amOnPage('/245.php');
        $I->fillField('usuari', 'Pa');
        $I->fillField('password', 'Oli');
        $I->click('submit');
        $I->seeInCurrentUrl('/245.php');
        $I->see('Usuari no existent');
        $I->amOnPage('/245.php');
        $I->fillField('usuari', 'ignasi');
        $I->fillField('password', 'hola');
        $I->click('submit');
        $I->seeInCurrentUrl('/245.php');
        $I->see('Password incorrecte');
        $I->amOnPage('/245.php');
        $I->fillField('usuari', 'ignasi');
        $I->fillField('password', 'natxo');
        $I->click('submit');
        $I->see('Benvingut ignasi');
    }

    public function try251WorksTest(AcceptanceTester $I)
    {
        $I->amOnPage('/251.php');
        $I->fillField('frase', 'Hola Amiga');
        $I->click('submit');
        $I->seeInCurrentUrl('/251.php');
        $I->see('Hi ha 1 o');
        $I->see('Hi ha 3 a');
        $I->see('Hi ha 1 i');
        $I->see('Hi ha 5 vocals');
    }



}
