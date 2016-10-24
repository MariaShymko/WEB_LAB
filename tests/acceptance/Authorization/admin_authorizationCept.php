<?php 
$I = new AcceptanceTester($scenario);
$I->wantTo('verify admin authorization with valid data');
$I->seeInDatabase('lovata_buddies_users', array('name' => 'Admin', 'password' => '123123'));
$I->amOnPage('/backend');     
$I->fillField('.form-control.width-1.icon.user', 'Admin');
$I->fillField('.form-control.width-1.icon.lock', '123123');
$I->click('.btn.btn-primary.login-button');
$I->waitForElement('.account-avatar', 5);
$I->see('.account-avatar');