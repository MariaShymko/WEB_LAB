<?php
namespace Step\Acceptance;

class Loigin extends \AcceptanceTester
{
	//
    public function loginAsManager()
    {
        $I = $this;
        $I->amOnPage('/backend');
        $I->fillField('.form-control.width-1.icon.user', 'codeception');
        $I->fillField('.form-control.width-1.icon.lock', '123123');
        $I->click('.btn.btn-primary.login-button');
        $I->waitForElement('.icon-newspaper-o');
    }
	
	//
	public function loginAsUser()
    {
        $I = $this;
        $I->amOnPage('/');
        $I->fillField('.auth-block__field-email.js-validEmail.js-validRequired', 'codeception@mail.ru');
        $I->fillField('.auth-block__field-password.js-validRequired', '123123');
        $I->click('.auth_button.js-submitBtn');
		$I->waitForElement('.icon-newspaper-o');
		$I->dontSee('.b-popup-auth');
		$I->see('.header-sign__login', 'codeception');
    }
}