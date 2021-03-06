<?php 
use Step\Acceptance\Login as AcceptanceTester;

$I = new AcceptanceTester($scenario);
$I->wantTo('change the name of work in backend and save it');
$I->haveInDatabase('lovata_buddies_category', array(
	'name' => 'Профессиональная вертикаль'));
$I->haveInDatabase('lovata_contest_works', array(
	'user_id' => '1', 
	'name' => 'Mydog',
	'category_id' => '1', 
	'created_at' => '2016-10-20 20:36',
	'updated_at' => '2016-10-20 20:36'));
$I->loginAsManager();
$I->click('.icon-trophy');
$I->waitForElement('Mydog');
$I->click('Mydog');
$I->waitForElement('#Form-field-Work-name');
$I->fillField('#Form-field-Work-name', 'Mycat');
$I->click('.btn.btn-default');
$I->waitForElement('.flash-message.fade.success.in');
$I->see('Работа успешно обновлена', '.flash.message.fade.success.in');
$I->seeInDatabase('lovata_contest_works', array( 'name' => 'Mycat' , 'category_id' => '1'));
