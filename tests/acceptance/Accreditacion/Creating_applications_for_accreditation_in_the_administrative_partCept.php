<?php 
use Step\Acceptance\Admin as AdminTester;
$I = new AcceptanceTester($scenario);
$I->wantTo('Creating_applications_for_accreditation_in_the_administrative_part');
$I->loginAsManager();
//Нажимаем Конкурс в верхнем меню
$I->click('ul.nav:nth-child(2) > li:nth-child(5) > a:nth-child(1)');
$I->waitForElementNotVisible('#layout-sidenav > ul:nth-child(1) > li:nth-child(5) > a:nth-child(1)');
$I->waitForElementVisible('#layout-sidenav > ul:nth-child(1) > li:nth-child(5) > a:nth-child(1)');
//Нажимаем Аккредитация в боковом меню
$I->click('#layout-sidenav > ul:nth-child(1) > li:nth-child(5) > a:nth-child(1)');
$I->waitForElementNotVisible('btn btn-primary oc-icon-plus');
$I->waitForElementVisible('btn btn-primary oc-icon-plus');
//Нажимаем Создать 
$I->click('.btn.btn-primary.oc-icon-plus');
$I->waitForElementVisible('.form-group.switch-field.span-left');
//Заполняем поле Имя валидными данными
$I->fillField('#Form-field-Accreditation-name','Ivanov');
//Заполняем поле Фамилия валидными данными
$I->fillField('#Form-field-Accreditation-last_name','Ivan');
//Заполняем поле Название организации валидными данными
$I->fillField('#Form-field-Accreditation-company',"IPIvanovIvan");
//Заполняем поле Телефон валидными данными
$I->fillField('#Form-field-Accreditation-phone','80292753320');
//Заполняем поле Email валидными данными
$I->fillField('#Form-field-Accreditation-email','IvanovIvan@mail.ru');
//Нажимаем кнопку Создать
$I->click('.btn-primary');
$I->see('Элемент успешно создан','body > div.mainmenu-collapsed.scroll-after.scroll-active-after');
$I->seeInDatabase('lovata_contest_accreditation',array(
	'active' => '1',
	'name' => 'Ivan',
	'last_name' => 'Ivanov',
	'company' => 'IPIvanovIvan',
	'phone' => '80292753320',													
	'email' => 'IvanovIvan@mail.ru''));													
																										