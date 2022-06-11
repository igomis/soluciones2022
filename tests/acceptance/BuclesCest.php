<?php

class BuclesCest
{
    public function _before(AcceptanceTester $I)
    {
    }


    public function try220WorksTest(AcceptanceTester $I)
    {
        $I->amOnPage('/220.php');
        $I->seeInSource('<ul> <li>2</li>');
        $I->see('14');
        $I->see('26');
        $I->see('38');
        $I->seeInSource('<li>50</li></ul>');
        $I->dontSee('52');
    }

    public function try221WorksTest(AcceptanceTester $I)
    {
        $I->amOnPage('/221.php');
        $I->see('1+2+3+4+5+6+7+8+9+10=55');
    }

    public function try222WorksTest(AcceptanceTester $I)
    {
        $I->amOnPage('/222.php');
        $I->see("Posa la base i l'exponent a les variables base i exponent pel QueryString");
        $I->amOnPage('/222.php?base=5&exponent=3');
        $I->see('5^3 = 125');
        $I->amOnPage('/222.php?base=2&exponent=0');
        $I->see('2^0 = 1');
        $I->amOnPage('/222.php?base=10&exponent=1');
        $I->see('10^1 = 10');
    }
}
