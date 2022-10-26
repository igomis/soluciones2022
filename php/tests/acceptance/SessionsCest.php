<?php

class FormulariosCest
{
    public function _before(AcceptanceTester $I) {}

    public function try406Test(AcceptanceTester $I)
    {
        $I->amOnPage('/406.php');
        $I->seeInSource('<input type="button" value="1"/>');
        $I->amOnPage('/406.php');
        $I->seeInSource('<input type="button" value="2"/>');
        $I->amOnPage('/406.php');
        $I->seeInSource('<input type="button" value="3"/>');
        $I->amOnPage('/406.php');
        $I->seeInSource('<input type="button" value="4"/>');
        $I->click('submit');
        $I->seeInCurrentUrl('/406.php');
        $I->seeInSource('<input type="button" value="1"/>');
    }

    public function try407Test(AcceptanceTester $I)
    {
        $I->amOnPage('/407.php');
        $I->fillField('color','#AAA');
        $I->click('submit');
        $I->seeInSource('<body bgcolor="#AAA">');
        $I->amOnPage('407.php');
        $I->seeInSource('<body bgcolor="#AAA">');
    }

    public function try408Test(AcceptanceTester $I)
    {
        $I->amOnPage('/408.php');
        $I->fillField('color','#AAA');
        $I->click('submit');
        $I->seeInSource('<body bgcolor="#AAA">');
        $I->amOnPage('408.php');
        $I->seeInSource('<body bgcolor="#AAA">');
    }

    public function try408bTest(AcceptanceTester $I)
    {
        $I->amOnPage('/408.php');
        $I->fillField('color','#AAA');
        $I->click('submit');
        $I->seeInSource('<body bgcolor="#AAA">');
        $I->amOnPage('408.php?buidar=sessio');
        $I->seeInCurrentUrl('/408.php');
        $I->seeInSource('<body bgcolor="#FFF">');
    }

    public function try409Test(AcceptanceTester $I)
    {
        $I->amOnPage('/409.html');
        $I->fillField('nom', 'Ignasi');
        $I->fillField('cognoms', 'Gomis Mullor');
        $I->fillField('email', 'i.gomismullor@edu.gva.es');
        $I->fillField('sexe', 'Home');
        $I->click('submit');
        $I->seeInCurrentUrl('/409.php');
        $I->selectOption(".form-select",'correr');
        $I->checkOption('#menu1');
        $I->checkOption('#menu3');
        $I->click('submit');
        $I->seeInCurrentUrl('/409b.php');
        $I->see('Ignasi');
        $I->see('correr');
        $I->see('bajoques, pericana');
    }


}
