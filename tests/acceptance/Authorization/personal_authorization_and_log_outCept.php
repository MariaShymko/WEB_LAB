<?php 
use Step\Acceptance\Login as AcceptanceTester;
$I = new AcceptanceTester($scenario);
$I->wantTo('verify personal athorization and log out with valid data');
$I->loginAsUser();
$I->click('.header-sign__login);
$I->click('.header-login__logout');
$I->waitForElement('.header-sign__reg._action', 5);
$I->see('.header-sign__login', 'Вход');