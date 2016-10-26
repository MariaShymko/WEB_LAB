<?php 
use Step\Acceptance\Admin as AdminTester;
$I = new AcceptanceTester($scenario);
$I->wantTo('Deleting a category in the administrative part');
$I->haveInDatabase('lovata_contest_category',array(
	'active' => '1',
	'name' => 'Профессиональная вертикаль'));
$I->loginAsManager();
$I->waitForElement('.layout.control-tabs.master-tabs.fancy-layout.oc-logo-transparent',30);
//Нажимаем Конкурс в верхнем меню
$I->click('ul.nav:nth-child(2) > li:nth-child(5) > a:nth-child(1)');
$I->waitForElementNotVisible('li.active:nth-child(3) > a:nth-child(1));
$I->waitForElementVisible('li.active:nth-child(3) > a:nth-child(1));
//Нажимаем Категории в боковом меню
$I->click('li.active:nth-child(3) > a:nth-child(1)');
$I->waitForElementVisible('#Lists-checkboxAll');
//Нажимаем чек-бокс Выбрать все
$I->click('#Lists-checkboxAll');
$I->waitForElementNotVisible('button.btn:nth-child(3)');
$I->waitForElementVisible('button.btn:nth-child(3)');
//Нажимаем Удалить выбранные элементы
$I->click('button.btn:nth-child(3)');
$I->waitForElementNotVisible('.confirm');
$I->waitForElementVisible('.confirm');
// В попапе нажимаем ОК
$I->click('.confirm');
$I->seeElement('Выбранные записи успешно удалены.''body > div.mainmenu-collapsed.scroll-after.scroll-active-after');
$I->dontSeeInDatabase('lovata_contest_category',array(
	'active' => '1',
	'name' => 'Профессиональная вертикаль'));

