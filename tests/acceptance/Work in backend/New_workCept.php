<?php 
$I = new AcceptanceTester($scenario);
$I->wantTo('create work in backend and save it');
$I->amOnPage('/backend');
$I->fillField('.form-control.width-1.icon.user', 'katya');
$I->fillField('.form-control.width-1.icon.lock', '123123');
$I->click('.btn.btn-primary.login-button');
$I->waitForElement('.icon-trophy');
$I->click('.icon-trophy');
$I->waitForElement('.btn.btn-primary.oc-icon-plus');
$I->click('.btn.btn-primary.oc-icon-plus');
$I->waitForElement('#Form-field-Work-name');
$I->fillField('#Form-field-Work-name', 'New1');
$I->click('.btn.btn-primary');
$I->waitForElement('.flash-message.fade.success.in');
$I->see('.flash-message.fade.success.in');