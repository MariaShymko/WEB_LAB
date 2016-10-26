<?php 
$I = new AcceptanceTester($scenario);
$I->wantTo('verify redirect on 404 error page');
$I->amOnPage('/123');
$I->see('.error-page__404');
$I->see('Страница не найдена','.error-page__h1');
$I->see('.error-page__list');
$I->see('.error-page__404'));