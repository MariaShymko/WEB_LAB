<?php 
$I = new AcceptanceTester($scenario);
$I->wantTo('verify possibility of edditing work in private office');
$I->haveInDatabase('lovata_contest_works', array (
     'name'=>'Name1',
	 'product'=>'Product1',
	 'created_at'=>'20окт.2016г.18.40',	 
	 'updated_at'=>'20окт.2016г.18.40' 
	 'on_site'=>'1');	 
$I->haveInDatabase('lovata_buddies_category', array ('name'=>'Профессиональная вертикаль',);
$I->amOnPage('/');
$I->see('aaa','.header-sign__login');
$I->click('.header-sign__login');
$I->see('.header-login__block-inside');
$I->click('.login-nav__link');
$I->see('.container-page');
$I->click('.work__edit-info._action', '[name=Name1]');
$I->see('.b-modal__window');
$I->fillField('#editw-name', 'Name2');
$I->fillField('#editw-advprod', 'Product2');
$I->submitForm('.b-popup-addwork__submit.js-submitBtn');
$I->see('.container-page');
$I->see('.work__edit-info._action', '[name=Name2]'));
$I->see('.container-page');
$I->click('.work__edit-info._action', '[name=Name2, work[product]=Product2]'));