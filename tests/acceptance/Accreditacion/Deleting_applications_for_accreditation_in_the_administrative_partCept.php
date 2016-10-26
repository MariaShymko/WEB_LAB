<?php 
use Step\Acceptance\Admin as AdminTester;
$I = new AcceptanceTester($scenario);
$I->wantTo('Deleting_applications_for_accreditation_in_the_administrative_part');
$I->haveInDatabase('lovata_contest_accreditation',array('active' => '1','name' => 'Ivan','last_name' => 'Ivanov','company' => 'IPIvanovIvan','phone' => '80292753320','email' => 'IvanovIvan@mail.ru''));
$I->loginAsManager();
$I->waitForElement('.layout.control-tabs.master-tabs.fancy-layout.oc-logo-transparent',30);
$I->click('ul.nav:nth-child(2) > li:nth-child(5) > a:nth-child(1)');//Нажимаем Конкурс в верхнем меню
$I->waitForElementNotVisible('#layout-sidenav > ul:nth-child(1) > li:nth-child(5) > a:nth-child(1)');
$I->waitForElementVisible('#layout-sidenav > ul:nth-child(1) > li:nth-child(5) > a:nth-child(1)');
$I->click('#layout-sidenav > ul:nth-child(1) > li:nth-child(5) > a:nth-child(1)');//Нажимаем Аккредитация в боковом меню
$I->waitForElementNotVisible('#Lists-checkboxAll');
$I->click('#Lists-checkboxAll');//Нажимаем чек-бокс Выбрать все
$I->waitForElementNotVisible('.btn.btn-default.oc-icon-trash-o');
$I->waitForElementVisible('.btn.btn-default.oc-icon-trash-o');
$I->click('.btn.btn-default.oc-icon-trash-o');//Нажимаем кнопку Удалить выбранное 
$I->waitForElementNotVisible('.confirm');
$I->waitForElementVisible('.confirm');
$I->click('.confirm');//В появившемся попапе нажимаем кнопку ОК
$I->see('Выбранные записи успешно удалены','body > div.mainmenu-collapsed.scroll-after.scroll-active-after');