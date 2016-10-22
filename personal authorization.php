<?php 
$I = new AcceptanceTester($scenario);
$I->wantTo('verify personal authorization with valid data');
$I->haveInDatabase('lovata_buddies_users', array(
    'email' => 'buddy@mail.ru',
    'password' => '123123',
    'name' => 'Ivan',
    'property' => 'MP1245789',
    'reset_password_code' => '123123',
    'phone' => '12584756')
 ); 
$I->amOnPage('/');
$I->click('.header-sign__reg._action');
$I->fillField('.auth-block__field-email', 'buddy@mail.ru');
$I->fillField('.auth-block__field-password', '123123');
$I->click('.auth_button');
$I->waitForElement('.header-sign__login', 5);
$I->see('.header-sign__login', 'Ivan');