<?php 
use Step\Acceptance\Admin as AcceptanceTester;

$I = new AcceptanceTester($scenario);
$I->wantTo('edit news in backend and save it');
$I->haveInDatabase('lovata_goodnews_articles', array( 'title' => 'ContestTime' , 'slug' => '/ContestTime'));
$I->loginAsManager();
$I->click('.icon-newspaper-o');
$I->waitForElement('.list-cell-index-1.list-cell-name-title.list-cell-type-text');
$I->click('.list-cell-index-1.list-cell-name-title.list-cell-type-text');
$I->waitForElement('.Form-field-Article-title');
$I->fillField('#Form-field-Article-title','LamaAwards');
$I->click('.btn.btn-default');
$I->waitForElement('.flash-message.fade.success.in');
$I->see('Новость успешно обновлена', '.flash-message.fade.success.in');
$I->seeInDatabase('lovata_goodnews_articles', array( 'title' => 'LamaAwards' , 'slug' => '/ContestTime'));