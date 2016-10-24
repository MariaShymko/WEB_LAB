<?php
namespace Step\Acceptance;

class Manager extends \AcceptanceTester
{
    public function loginAsManager()
    {
        $I = $this;
        $I->amOnPage('/backend');
        $I->fillField('.form-control.width-1.icon.user', 'maria');
        $I->fillField('.form-control.width-1.icon.lock', '123123');
        $I->click('.btn.btn-primary.login-button');
    }
}
