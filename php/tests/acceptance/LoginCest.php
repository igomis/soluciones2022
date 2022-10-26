<?php

class LoginCest
{
    public function _before(AcceptanceTester $I) {}

    public function try410Test(AcceptanceTester $I)
    {
        $I->amOnPage('/410.html');
        $I->fillField('username','AAA');
        $I->fillField('password','AAA');
        $I->click('submit');
        $I->seeInCurrentUrl('/410.html');
        $I->amOnPage('/410.html');
        $I->fillField('username','usuari');
        $I->fillField('password','usuari');
        $I->click('submit');
        $I->seeInCurrentUrl('/412.php');
    }

    public function try411Test(AcceptanceTester $I)
    {
        $I->amOnPage('/411.php');
        $I->seeInCurrentUrl('/410.html');


    }

    public function try412Test(AcceptanceTester $I)
    {
        $I->amOnPage('/412.php');
        $I->seeInCurrentUrl('/410.html');
        $I->amOnPage('/410.html');
        $I->fillField('username','usuari');
        $I->fillField('password','usuari');
        $I->click('submit');
        $I->seeInCurrentUrl('/412.php');
        $I->seeInSource('<h2>Llista de pel·licules</h2>');
        $I->seeInSource('<li>Terminator 2</li>');
    }

    public function try413Test(AcceptanceTester $I)
    {
        $I->amOnPage('/410.html');
        $I->fillField('username','usuari');
        $I->fillField('password','usuari');
        $I->click('submit');
        $I->seeInCurrentUrl('/412.php');
        $I->amOnPage('413.php');
        $I->seeInCurrentUrl('/410.html');
        $I->amOnPage('/412.php');
        $I->seeInCurrentUrl('/410.html');
    }

    public function try414Test(AcceptanceTester $I)
    {
        $I->amOnPage('/414.php');
        $I->seeInCurrentUrl('/410.html');
        $I->amOnPage('/410.html');
        $I->fillField('username','usuari');
        $I->fillField('password','usuari');
        $I->click('submit');
        $I->seeInCurrentUrl('/412.php');
        $I->click('Sèries');
        $I->seeInCurrentUrl('/414.php');
        $I->seeInSource('<h2>Llista de sèries</h2>');
        $I->seeInSource('<li>Walking dead</li>');
        $I->click('Pel·licules');
        $I->seeInSource('<h2>Llista de pel·licules</h2>');
        $I->seeInSource('<li>Terminator 2</li>');
        $I->click('Logout');
        $I->seeInCurrentUrl('/410.html');
        $I->amOnPage('/412.php');
        $I->seeInCurrentUrl('/410.html');
    }

}
