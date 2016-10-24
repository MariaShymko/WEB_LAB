<?php 
$I = new AcceptanceTester($scenario);
$I->wantTo('create work in backend and save it');
$I->loginAsManager();
$I->click('.icon-trophy');
$I->waitForElement('.btn.btn-primary.oc-icon-plus');
$I->click('.btn.btn-primary.oc-icon-plus');
$I->waitForElement('#Form-field-Work-name');
$I->fillField('#Form-field-Work-name', 'New1');
$I->click('.btn.btn-primary');
$I->waitForElement('.flash-message.fade.success.in');
$I->see('Работа успешно создана', '.flash.message.fade.success.in');
$I->seeInDatabase('lovata_contest_works', array( 'name' => 'New1' , 'category_id' => '1'));