<?php 
use Step\Acceptance\Admin as AdminTester;
$I = new AcceptanceTester($scenario);
$I->wantTo('Editing_applications_for_accreditation_in_the_administrative_part_applications_for_accreditation_in_the_administrative_part');
$I->haveInDatabase('lovata_contest_accreditation',array(
	'active' => '1',
	'name' => 'Ivan',												
	'last_name' => 'Ivanov',												
	'company' => 'IPIvanovIvan',												
	'phone' => '80292753320',												
	'email' => 'IvanovIvan@mail.ru''));												
$I->loginAsManager();
$I->click('ul.nav:nth-child(2) > li:nth-child(5) > a:nth-child(1)');//Нажимаем Конкурс в верхнем меню
$I->waitForElementNotVisible('#layout-sidenav > ul:nth-child(1) > li:nth-child(5) > a:nth-child(1)');
$I->waitForElementVisible('#layout-sidenav > ul:nth-child(1) > li:nth-child(5) > a:nth-child(1)');
//Нажимаем Аккредитация в боковом меню
$I->click('#layout-sidenav > ul:nth-child(1) > li:nth-child(5) > a:nth-child(1)');
$I->waitForElementNotVisible('tr.list-tree-level-0:nth-child(1) > td:nth-child(2)');
$I->waitForElementVisible('tr.list-tree-level-0:nth-child(1) > td:nth-child(2)');
//Нажимаем на категорию в списке
$I->click('tr.list-tree-level-0:nth-child(1) > td:nth-child(2)');
$I->waitForElementNotVisible('#Form-field-Accreditation-name');
//Вводим в поле Имя "Andy"
$I->fillField('#Form-field-Accreditation-name','Andy');
//Нажимаем на кнопку Сохранить
$I->click('.btn-primary'); 
$I->see('Элемент успешно обновлен','body > div.mainmenu-collapsed.scroll-after.scroll-active-after');
$I->seeInDatabase('lovata_contest_accreditation',array('active' => '1',
	'name' => 'Andy',													
	'last_name' => 'Ivanov',													
	'company' => 'IPIvanovIvan',													
	'phone' => '80292753320',													
	'email' => 'IvanovIvan@mail.ru''));													