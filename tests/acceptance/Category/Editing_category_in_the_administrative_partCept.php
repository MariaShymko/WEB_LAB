<?php 
use Step\Acceptance\Admin as AdminTester;
$I = new AcceptanceTester($scenario);
$I->wantTo('Editing a category in the administrative part');
$I->$I->haveInDatabase('lovata_contest_category',array(
	'active' => '1',
	'name' => 'Профессиональная вертикаль'));
$I->loginAsManager();
$I->waitForElement('.layout.control-tabs.master-tabs.fancy-layout.oc-logo-transparent',30);
//Нажимаем Конкурс в верхнем меню
$I->click('ul.nav:nth-child(2) > li:nth-child(5) > a:nth-child(1)');
$I->waitForElementNotVisible('li.active:nth-child(3) > a:nth-child(1)');
$I->waitForElementVisible('li.active:nth-child(3) > a:nth-child(1)');
//Нажимаем Категории в боковом меню
$I->click('li.active:nth-child(3) > a:nth-child(1)');
$I->waitForElementNotVisible('.list-cell-index-1 list-cell-name-name list-cell-type-text  ');
//Нажимаем на категорию в списке
$I->click('.list-cell-index-1.list-cell-name-name.list-cell-type-text');
$I->waitForElementNotVisible('.form-group.switch-field.span-full');
//Вводим в сторку Название Категорийная вертикаль
$I->fillField('.form-control','Категорийная вертикаль');
//Нажимаем кнопку Сохранить
$I->click('btn btn-primary');
$I->seeElement('Категория успешно обновлена.''body > div.mainmenu-collapsed.scroll-after.scroll-active-after');
$I->seeInDatabase('lovata_contest_category',array(
	'active' => '1',
	'name' => 'Категорийная вертикаль'));
