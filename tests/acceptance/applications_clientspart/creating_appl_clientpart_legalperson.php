<?php 
$I = new AcceptanceTester($scenario);
$I->wantTo('verify possibility of creating application by legal person');
$I->haveInDatabase('lovata_contest_works', array (
   	 'name'=>'Name1',
	 'product'=>'Product1',
	 'created_at'=>'20окт.2016г.18.40',	 
	 'updated_at'=>'20окт.2016г.18.40' 
	 'on_site'=>'1');	 
$I->haveInDatabase('lovata_buddies_category', array ('name'=>'Профессиональная вертикаль'));
$I-> loginAsUser
$I->see('aaaa','.header-sign__login');
$I->click('.invite-promo__participatebtn._action');
$I->selectOption('.b-popup-addwork__select.addwork-category__select_cont','Профессиональная вертикаль');
$I->selectOption('.addwork-contest__select', 'Film');
$I->selectOption('.b-popup-addwork__radio-label', 'F1');
$I->fillField('#name_work', 'Name3');
$I->fillField('#adv_prod', 'Product3');
$I->selectOption('typecompany__radio-label','Рекламное агенство');
$I->fillField('#agency','Agency3');
$I->fillField('#customer','Customer3');
$I->fillField('#idea','Idea3');
$I->submitForm('.b-popup-addwork__submit.js-submitBtn');
$I->click('.header-sign__login', 'aaa');
$I->see('.header-login__block-inside');
$I->click('.login-nav__link');
$I->see('.container-page');
$I->see('.work__title', 'Name3');
$I->see('.work__product', 'Product3'));
