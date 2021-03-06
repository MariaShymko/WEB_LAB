<?php
namespace Step\Acceptance;

class Login extends \AcceptanceTester
{
	//backend_authorization
    public function loginAsManager()
    {
        $I = $this;
        $I->amOnPage('/backend');
        $I->fillField('.form-control.width-1.icon.user', 'codeception');
        $I->fillField('.form-control.width-1.icon.lock', '123123');
        $I->click('.btn.btn-primary.login-button');
        $I->waitForElement('.icon-newspaper-o');
    }
	
	//frontend_authorization
	public function loginAsUser()
    {
        $I = $this;
        $I->amOnPage('/');
        $I->fillField('.auth-block__field-email.js-validEmail.js-validRequired', 'codeception@mail.ru');
        $I->fillField('.auth-block__field-password.js-validRequired', '123123');
        $I->click('.auth_button.js-submitBtn');
        $I->waitForElementNotVisible('.b-popup-auth');
       
    }
}