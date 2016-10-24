<?php
$I = new AcceptanceTester($scenario);
$I->wantTo('create news in backend and save it');
$I->amOnPage('/backend');
$I->fillField('.form-control.width-1.icon.user', 'maria');
$I->fillField('.form-control.width-1.icon.lock', '123123');
$I->click('.btn.btn-primary.login-button');
$I->waitForElement('.icon-newspaper-o');
$I->click('.icon-newspaper-o');
$I->waitForElement('.btn.btn-primary.oc-icon-plus');
$I->click('.btn.btn-primary.oc-icon-plus');
$I->waitForElement('#Form-field-Article-title');
$I->fillField('#Form-field-Article-title','WhiteTrashBeautiful');
$I->click('.btn.btn-default');
$I->see('.flash.message.fade.success.in');