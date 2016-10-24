<?php 
$I = new AcceptanceTester($scenario);
$I->wantTo('change the name of work in backend and save it');
$I->haveInDatabase('lovata_contest_works', array(
'user_id' => '51', 
'name' => 'Mydog',
'category_id' => 'F1.TV', 
'created_at' => '20:36 20 oct 2016',
'updated_at' => '20:36 20 oct 2016'));
$I->haveInDatabase('lovata_buddies_users', array(
'user_id' => '51', 
'email' => 'andy@mail.ru'
'password' => '123123'));
$I->haveInDatabase('lovata_buddies_category', array(
'id' => 'F1.TV', 
'name' => 'Профессиональная вертикаль'));
$I->amOnPage('/backend');
$I->fillField('.form-control.width-1.icon.user', 'katya');
$I->fillField('.form-control.width-1.icon.lock', '123123');
$I->click('.btn.btn-primary.login-button');
$I->waitForElement('.icon-trophy');
$I->click('.icon-trophy');
$I->waitForElement('Mydog');
$I->click('Mydog');
$I->waitForElement('#Form-field-Work-name');
$I->fillField('#Form-field-Work-name', 'Mycat');
$I->click('.btn.btn-default');
$I->waitForElement('.flash-message.fade.success.in');
$I->see('.flash-message.fade.success.in');