<?php 
use Step\Acceptance\Admin as AcceptanceTester;

$I = new AcceptanceTester($scenario);
$I->wantTo('delete news in backend');
$I->haveInDatabase('lovata_goodnews_articles', array( 'title' => 'ContestTime' , 'slug' => '/ContestTime'));
$I->loginAsManager();
$I->click('.icon-newspaper-o');
$I->waitForElement('.checkbox.custom-checkbox.nolabel');
$I->click('.checkbox.custom-checkbox.nolabel');
$I->waitForElement('.btn btn-default oc-icon-trash-o');
$I->click('.btn btn-default oc-icon-trash-o');
$I->waitForElement('.sweet-alert.showSweetAlert.visible');
$I->see('.sweet-alert.showSweetAlert.visible');
$I->click('.confirm.btn.btn-primary');
$I->waitForElement('.flash-message.fade.success.in');
$I->see('Выбранные записи успешно удалены', '.flash-message.fade.success.in');
$I->dontSeeInDatabase('lovata_goodnews_articles', array( 'title' => 'ContestTime' , 'slug' => '/ContestTime'));
