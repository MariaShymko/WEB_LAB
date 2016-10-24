<?php 
<<<<<<< HEAD
use Step\Acceptance\Admin as AcceptanceTester;

$I = new AcceptanceTester($scenario);
$I->wantTo('edit news in backend and save it');
$I->haveInDatabase('lovata_goodnews_articles', array( 'title' => 'ContestTime' , 'slug' => '/ContestTime'));
$I->loginAsManager();
=======
$I = new AcceptanceTester($scenario);
$I->wantTo('edit news in backend and save it');
$I->haveInDatabase('lovata_goodnews_articles', array( 'title' => 'ContestTime' , 'slug' => '/ContestTime'));
$I->seeInDatabase('lovata_goodnews_articles', array( 'title' => 'ContestTime' , 'slug' => '/ContestTime'));
$I->amOnPage('/backend');
$I->fillField('.form-control.width-1.icon.user', 'maria');
$I->fillField('.form-control.width-1.icon.lock', '123123');
$I->click('.btn.btn-primary.login-button');
$I->waitForElement('.icon-newspaper-o');
>>>>>>> 8a2f159d2e1358ad6160c841ba1efa64b17058e9
$I->click('.icon-newspaper-o');
$I->waitForElement('.list-cell-index-1.list-cell-name-title.list-cell-type-text');
$I->click('.list-cell-index-1.list-cell-name-title.list-cell-type-text');
$I->waitForElement('.Form-field-Article-title');
$I->fillField('#Form-field-Article-title','LamaAwards');
$I->click('.btn.btn-default');
$I->waitForElement('.flash-message.fade.success.in');
<<<<<<< HEAD
$I->see('Новость успешно обновлена', '.flash-message.fade.success.in');
=======
$I->see('.flash-message.fade.success.in');
>>>>>>> 8a2f159d2e1358ad6160c841ba1efa64b17058e9
$I->seeInDatabase('lovata_goodnews_articles', array( 'title' => 'LamaAwards' , 'slug' => '/ContestTime'));