<?php 
use Step\Acceptance\Admin as AdminTester;
$I = new AcceptanceTester($scenario);
$I->wantTo('Create a category in the administrative partCept');
$I->loginAsManager();
//Нажимаем Конкурс в верхнем меню
$I->click('ul.nav:nth-child(2) > li:nth-child(5) > a:nth-child(1)');
$I->waitForElementNotVisible('li.active:nth-child(3) > a:nth-child(1)');
$I->waitForElementVisible('li.active:nth-child(3) > a:nth-child(1)');
//Нажимаем Категории в боковом меню
$I->click('li.active:nth-child(3) > a:nth-child(1)');
$I->waitForElementNotVisible('.btn.btn-primary.oc-icon-plus');
$I->waitForElementVisible('.btn.btn-primary.oc-icon-plus');
//Нажимаем Создать
$I->click('.btn.btn-primary.oc-icon-plus');
$I->waitForElementNotVisible('#Form-field-Category-name');
$I->waitForElementVisible('#Form-field-Category-name');
//Вводим название категории
$I->fillField('#Form-field-Category-name','Профессиональная вертикаль');
//Нажимаем Создать
$I->click('button.btn-primary');
$I->see('Категория успешно создана.','body > div.mainmenu-collapsed.scroll-after.scroll-active-after');
$I->seeInDatabase('lovata_contest_category',array(
	'active' => '1',
	'name' => 'Профессиональная вертикаль'));
			