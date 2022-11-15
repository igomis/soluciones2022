<?php

class ScrappingCest
{
    public function _before(AcceptanceTester $I)
    {
    }

    public function try531WorksTest(AcceptanceTester $I)
    {
        $I->amOnPage('/basket.php');
        $I->see("L'alçada mitja és: 1.98375");
        $I->see("L'edat mitja és: 25.9375");
    }

}
