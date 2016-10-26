<?php 
use Step\Acceptance\Login as AcceptanceTester;
$I = new AcceptanceTester($scenario);
$I->wantTo('verify admin authorization and log out with valid data');
$I->loginAsManager();
$I->see('.account-avatar');
$I->click('.mainmenu-accountmenu.active');
$I->click('a:contains("Выход")');
$I->waitForElement('.btn.btn-primary.login-button', 5);
$I->see('.btn btn-primary.login-button', 'Вход');