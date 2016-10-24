<?php
<<<<<<< HEAD
use Step\Acceptance\Admin as AcceptanceTester;

$I = new AcceptanceTester($scenario);
$I->wantTo('create news in backend and save it');
$I->loginAsManager();
=======
$I = new AcceptanceTester($scenario);
$I->wantTo('create news in backend and save it');
$I->amOnPage('/backend');
$I->fillField('.form-control.width-1.icon.user', 'maria');
$I->fillField('.form-control.width-1.icon.lock', '123123');
$I->click('.btn.btn-primary.login-button');
$I->waitForElement('.icon-newspaper-o');
>>>>>>> 8a2f159d2e1358ad6160c841ba1efa64b17058e9
$I->click('.icon-newspaper-o');
$I->waitForElement('.btn.btn-primary.oc-icon-plus');
$I->click('.btn.btn-primary.oc-icon-plus');
$I->waitForElement('#Form-field-Article-title');
$I->fillField('#Form-field-Article-title','WhiteTrashBeautiful');
$I->click('.btn.btn-default');
<<<<<<< HEAD
$I->see('Создание новости', '.flash.message.fade.success.in');
$I->seeInDatabase('lovata_goodnews_articles', array( 'title' => 'WhiteTrashBeautiful' , 'slug' => '/whitetrashbeautiful'));
=======
$I->see('.flash.message.fade.success.in');
>>>>>>> 8a2f159d2e1358ad6160c841ba1efa64b17058e9
