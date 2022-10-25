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

    public function try401ParamTest(AcceptanceTester $I)
    {
        $I->amOnPage('/401.php?heroe=Batman');
        $I->see("PHP_SELF' => string '/401.php' (length=8)");
        $I->see("'QUERY_STRING' => string 'heroe=Batman'");
    }

    public function try401FormTest(AcceptanceTester $I)
    {
        $I->amOnPage('/401.html');
        $I->fillField('nombre', 'Ignasi');
        $I->click('submit');
        $I->seeInCurrentUrl('/401.php');
        $I->see("PHP_SELF' => string '/401.php'");
        $I->see("'REQUEST_METHOD' => string 'POST'");
        $I->see("'CONTENT_TYPE' => string 'application/x-www-form-urlencoded'");
    }

    public function try401aTest(AcceptanceTester $I)
    {
        $I->amOnPage('/401enlace.html');
        $I->click('Ver 401.php','a[href="401.php"]');
        $I->seeInCurrentUrl('/401.php');
        $I->see("PHP_SELF' => string '/401.php' (length=8)");
        $I->see("'REQUEST_METHOD' => string 'GET'");
        $I->see("'HTTP_REFERER' => string 'http://nginx/401enlace.html'");
    }

    public function try402Test(AcceptanceTester $I)
    {
        $I->amOnPage('/402.html');
        $I->fillField('nom', 'Ignasi');
        $I->fillField('cognoms', 'Gomis Mullor');
        $I->fillField('email', 'i.gomismullor@edu.gva.es');
        $I->fillField('url', 'https://cipfpbatoi.github.io/dwes2223/');
        $I->fillField('sexe', 'Home');
        $I->selectOption(".form-select",'correr');
        $I->selectOption(".form-select",'triatlon');
        $I->checkOption('#menu1');
        $I->checkOption('#menu3');
        $I->click('submit');
        $I->seeInCurrentUrl('/402.php');
        $I->seeInSource('<strong>Sexe</strong> : Home');
        $I->seeInSource('<strong>Url</strong> : https://cipfpbatoi.github.io/dwes2223/');
        $I->see('triatlon');
        $I->see('bajoques, pericana');
    }

    public function try403Test(AcceptanceTester $I)
    {
        $I->amOnPage('/402.html');
        $I->click('submit');
        $I->seeInCurrentUrl('/402.php');
        $I->see('Nom es requerit');
        $I->amOnPage('/402.html');
        $I->fillField('nom', 'Ignasi');
        $I->click('submit');
        $I->seeInCurrentUrl('/402.php');
        $I->see('Cognoms es requerit');
        $I->amOnPage('/402.html');
        $I->fillField('nom', 'Ignasi');
        $I->fillField('cognoms', 'Gomis Mullor');
        $I->fillField('email', 'i.gomismullor');
        $I->click('submit');
        $I->seeInCurrentUrl('/402.php');
        $I->see('Email no vàlid');
        $I->amOnPage('/402.html');
        $I->fillField('nom', 'Ignasi');
        $I->fillField('cognoms', 'Gomis Mullor');
        $I->fillField('email', 'i.gomismullor@edu.gva.es');
        $I->click('submit');
        $I->seeInCurrentUrl('/402.php');
        $I->see('Sexe no vàlid');
        $I->amOnPage('/402.html');
        $I->fillField('nom', 'Ignasi');
        $I->fillField('cognoms', 'Gomis Mullor');
        $I->fillField('email', 'i.gomismullor@edu.gva.es');
        $I->fillField('sexe', 'Home');
        $I->click('submit');
        $I->seeInCurrentUrl('/402.php');
        $I->see('Marca al meyns una aficcio');
        $I->amOnPage('/402.html');
        $I->fillField('nom', 'Ignasi');
        $I->fillField('cognoms', 'Gomis Mullor');
        $I->fillField('email', 'i.gomismullor@edu.gva.es');
        $I->fillField('sexe', 'Home');
        $I->selectOption(".form-select",'correr');
        $I->click('submit');
        $I->seeInCurrentUrl('/402.php');
        $I->see('Marca al meyns un menu');
    }

    public function try404Test(AcceptanceTester $I)
    {
        $I->amOnPage('/404.php');
        $I->fillField('nom', 'Ignasi');
        $I->fillField('cognoms', 'Gomis Mullor');
        $I->fillField('email', 'i.gomismullor@edu.gva.es');
        $I->click('submit');
        $I->seeInCurrentUrl('/404.php');
        $I->see('Sexe no vàlid');
        $I->seeInSource('<input id="nom" name="nom" placeholder="Escriu el teu nom" type="text" value="Ignasi" class="form-control">');
        $I->amOnPage('/404.php');
        $I->fillField('nom', 'Ignasi');
        $I->fillField('cognoms', 'Gomis Mullor');
        $I->fillField('email', 'i.gomismullor@edu.gva.es');
        $I->fillField('sexe', 'Home');
        $I->selectOption(".form-select",'correr');
        $I->click('submit');
        $I->seeInCurrentUrl('/404.php');
        $I->seeInSource('<input id="nom" name="nom" placeholder="Escriu el teu nom" type="text" value="Ignasi" class="form-control">');
        $I->seeInSource('<option value="correr" selected>Correr</option>');
    }
}
