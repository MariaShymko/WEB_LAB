<?php 
use Step\Acceptance\Admin as AdminTester;
$I = new AcceptanceTester($scenario);
$I->wantTo('Deleting_applications_for_accreditation_in_the_administrative_part');
$I->haveInDatabase('lovata_contest_accreditation',array(
	'active' => '1',
	'name' => 'Ivan',													
	'last_name' => 'Ivanov',													
	'company' => 'IPIvanovIvan',													
	'phone' => '80292753320',													
	'email' => 'IvanovIvan@mail.ru''));													
$I->loginAsManager();
//Нажимаем Конкурс в верхнем меню
$I->click('ul.nav:nth-child(2) > li:nth-child(5) > a:nth-child(1)');
$I->waitForElementNotVisible('#layout-sidenav > ul:nth-child(1) > li:nth-child(5) > a:nth-child(1)');
$I->waitForElementVisible('#layout-sidenav > ul:nth-child(1) > li:nth-child(5) > a:nth-child(1)');
//Нажимаем Аккредитация в боковом меню
$I->click('#layout-sidenav > ul:nth-child(1) > li:nth-child(5) > a:nth-child(1)');
$I->waitForElementNotVisible('#Lists-checkboxAll');
//Нажимаем чек-бокс Выбрать все
$I->click('#Lists-checkboxAll');
$I->waitForElementNotVisible('.btn.btn-default.oc-icon-trash-o');
$I->waitForElementVisible('.btn.btn-default.oc-icon-trash-o');
//Нажимаем кнопку Удалить выбранное 
$I->click('.btn.btn-default.oc-icon-trash-o');
$I->waitForElementNotVisible('.confirm');
$I->waitForElementVisible('.confirm');
//В появившемся попапе нажимаем кнопку ОК
$I->click('.confirm');
$I->see('Выбранные записи успешно удалены','body > div.mainmenu-collapsed.scroll-after.scroll-active-after');
$I->dontSeeInDatabase('lovata_contest_accreditation',array(
	'active' => '1',
	'name' => 'Ivan',
	'last_name' => 'Ivanov',													
	'company' => 'IPIvanovIvan',													
	'phone' => '80292753320',													
	'email' => 'IvanovIvan@mail.ru''));																										