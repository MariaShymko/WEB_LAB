<?php 
use Step\Acceptance\Login as AcceptanceTester;
$I = new AcceptanceTester($scenario);
$I->wantTo('verify possibility of deliting work in private office');
$I->haveInDatabase('lovata_contest_works', array (
     'name'=>'Name1',
	 'product'=>'Product1',
	 'created_at'=>'20окт.2016г.18.40',	 
	 'updated_at'=>'20окт.2016г.18.40' 
	 'on_site'=>'1');	 
$I->haveInDatabase('lovata_buddies_category', array ('name'=>'Профессиональная вертикаль',);
$I->loginAsUser();
$I->click('.header-sign__login');
$I->see('.header-login__block-inside');
$I->click('.login-nav__link');
$I->see('.container-page');
$I->click('.work__remove-info._action-remove', '[name=Name1]');
$I->dontSee('work__title','Name1')); 