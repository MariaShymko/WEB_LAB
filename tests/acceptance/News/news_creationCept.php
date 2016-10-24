<?php
use Step\Acceptance\Admin as AcceptanceTester;

$I = new AcceptanceTester($scenario);
$I->wantTo('create news in backend and save it');
$I->loginAsManager();
$I->click('.icon-newspaper-o');
$I->waitForElement('.btn.btn-primary.oc-icon-plus');
$I->click('.btn.btn-primary.oc-icon-plus');
$I->waitForElement('#Form-field-Article-title');
$I->fillField('#Form-field-Article-title','WhiteTrashBeautiful');
$I->click('.btn.btn-default');
$I->see('Создание новости', '.flash.message.fade.success.in');
$I->seeInDatabase('lovata_goodnews_articles', array( 'title' => 'WhiteTrashBeautiful' , 'slug' => '/whitetrashbeautiful'));