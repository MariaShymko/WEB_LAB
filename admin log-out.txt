<?php 
$I = new AcceptanceTester($scenario);
$I->wantTo('verify admin log out with valid data');
$I->seeInDatabase('lovata_buddies_users', array('name' => 'Admin', 'password' => '123123'));
$I->amOnPage('/backend');     
$I->fillField('.form-control.width-1.icon.user', 'Admin');
$I->fillField('.form-control.width-1.icon.lock', '123123');
$I->click('.btn.btn-primary.login-button');
$I->waitForElement('.account-avatar', 5);
$I->see('.mainmenu-accountmenu.active', '.account-avatar');
$I->click('.mainmenu-accountmenu.active');
$I->click('.http://test.lama.by.dev.lovata.com/backend/backend/auth/signout', 'Выйти');
$I->waitForElement('.btn.btn-primary.login-button', 5);
$I->see('.btn btn-primary.login-button', '.Вход');