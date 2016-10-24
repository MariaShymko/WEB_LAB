<?php 
<<<<<<< HEAD
use Step\Acceptance\Admin as AcceptanceTester;

$I = new AcceptanceTester($scenario);
$I->wantTo('delete news in backend');
$I->haveInDatabase('lovata_goodnews_articles', array( 'title' => 'ContestTime' , 'slug' => '/ContestTime'));
$I->loginAsManager();
=======
$I = new AcceptanceTester($scenario);
$I->wantTo('delete news in backend');
$I->haveInDatabase('lovata_goodnews_articles', array( 'title' => 'ContestTime' , 'slug' => '/ContestTime'));
$I->seeInDatabase('lovata_goodnews_articles', array( 'title' => 'ContestTime' , 'slug' => '/ContestTime'));
$I->amOnPage('/backend');
$I->fillField('.form-control.width-1.icon.user', 'maria');
$I->fillField('.form-control.width-1.icon.lock', '123123');
$I->click('.btn.btn-primary.login-button');
$I->waitForElement('.icon-newspaper-o');
>>>>>>> 8a2f159d2e1358ad6160c841ba1efa64b17058e9
$I->click('.icon-newspaper-o');
$I->waitForElement('.checkbox.custom-checkbox.nolabel');
$I->click('.checkbox.custom-checkbox.nolabel');
$I->waitForElement('.btn btn-default oc-icon-trash-o');
$I->click('.btn btn-default oc-icon-trash-o');
$I->waitForElement('.sweet-alert.showSweetAlert.visible');
$I->see('.sweet-alert.showSweetAlert.visible');
$I->click('.confirm.btn.btn-primary');
$I->waitForElement('.flash-message.fade.success.in');
<<<<<<< HEAD
$I->see('Выбранные записи успешно удалены', '.flash-message.fade.success.in');
=======
$I->see('.flash-message.fade.success.in');
>>>>>>> 8a2f159d2e1358ad6160c841ba1efa64b17058e9
$I->dontSeeInDatabase('lovata_goodnews_articles', array( 'title' => 'ContestTime' , 'slug' => '/ContestTime'));
