<?php 
$I = new AcceptanceTester($scenario);
$I->wantTo('delete the work in backend');
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
$I->click('.list-tree-level-0.rowlink');
$I->see('.list-tree-level-0.rowlink.active');
$I->click('.btn.btn-default.oc-icon-trash-o');
$I->waitForElement('.sweet-alert.showSweetAlert.visible');
$I->click('.confirm.btn.btn-primary');
$I->waitForElement('.flash-message.fade.success.in');
$I->see('.flash-message.fade.success.in');