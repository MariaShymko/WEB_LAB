<?php
namespace Step\Acceptance;

class Admin extends \AcceptanceTester
{
    public function loginAsManager()
    {
        $I = $this;
        $I->amOnPage('/backend');
        $I->fillField('.form-control.width-1.icon.user', 'codeception');
        $I->fillField('.form-control.width-1.icon.lock', '123123');
        $I->click('.btn.btn-primary.login-button');
		$I->waitForElement('.icon-newspaper-o');
    }
}