<?php 
$I = new AcceptanceTester($scenario);
$I->wantTo('edit news in backend and save it');
$I->haveInDatabase('lovata_goodnews_articles', array( 'title' => 'ContestTime' , 'slug' => '/ContestTime'));
$I->seeInDatabase('lovata_goodnews_articles', array( 'title' => 'ContestTime' , 'slug' => '/ContestTime'));
$I->amOnPage('/backend');
$I->fillField('.form-control.width-1.icon.user', 'maria');
$I->fillField('.form-control.width-1.icon.lock', '123123');
$I->click('.btn.btn-primary.login-button');
$I->waitForElement('.icon-newspaper-o');
$I->click('.icon-newspaper-o');
$I->waitForElement('.list-cell-index-1.list-cell-name-title.list-cell-type-text');
$I->click('.list-cell-index-1.list-cell-name-title.list-cell-type-text');
$I->waitForElement('.Form-field-Article-title');
$I->fillField('#Form-field-Article-title','LamaAwards');
$I->click('.btn.btn-default');
$I->waitForElement('.flash-message.fade.success.in');
$I->see('.flash-message.fade.success.in');
$I->seeInDatabase('lovata_goodnews_articles', array( 'title' => 'LamaAwards' , 'slug' => '/ContestTime'));