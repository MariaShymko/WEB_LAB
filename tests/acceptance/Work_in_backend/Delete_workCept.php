<?php 
use Step\Acceptance\Login as AcceptanceTester;

$I = new AcceptanceTester($scenario);
$I->wantTo('delete the work in backend');
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
$I->click('.list-tree-level-0.rowlink');
$I->see('.list-tree-level-0.rowlink.active');
$I->click('.btn.btn-default.oc-icon-trash-o');
$I->waitForElement('.sweet-alert.showSweetAlert.visible');
$I->click('.confirm.btn.btn-primary');
$I->waitForElement('.flash-message.fade.success.in');
$I->see('Выбранные записи успешно удалены', '.flash.message.fade.success.in');
$I->dontSeeInDatabase('lovata_contest_works', array( 'name' => 'Mydog' , 'category_id' => '1'));
