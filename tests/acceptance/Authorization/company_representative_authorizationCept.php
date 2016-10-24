<?php 
$I = new AcceptanceTester($scenario);
$I->wantTo('verify company representative authorization with valid data');
$I->haveInDatabase('lovata_buddies_users', array(
    'email' => 'company@mail.ru',
    'password' => '123123',
    'name' => 'Ivanov',
    'city' => 'Minsk',
    'reset_password_code' => '123123',
    'address' => 'Myasnikova 39',
	'index' => '220030',
	'phone' => '3284555',
	'company_name' => 'advertby',
	'legal_address' => 'Myasnikova 39',
	'number' => '12345789',
	'payment_number' => '30123013580000',
	'bank_name' => 'БелВЭБ',
	'bank_code' => '587')
 ); 
$I->amOnPage('/');
$I->click('.header-sign__reg._action');
$I->fillField('.auth-block__field-email', 'company@mail.ru');
$I->fillField('.auth-block__field-password', '123123');
$I->click('.auth_button');
$I->waitForElement('.header-sign__login', 5);
$I->see('.header-sign__login', 'Ivanov');