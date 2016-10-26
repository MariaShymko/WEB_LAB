<?php 
use Step\Acceptance\Admin as AdminTester;
$I = new AcceptanceTester($scenario);
$I->wantTo('Create a category in the administrative partCept');
$I->loginAsManager();
$I->waitForElement('.layout.control-tabs.master-tabs.fancy-layout.oc-logo-transparent',30);
$I->click('ul.nav:nth-child(2) > li:nth-child(5) > a:nth-child(1)');//Нажимаем Конкурс в верхнем меню
$I->waitForElementNotVisible('li.active:nth-child(3) > a:nth-child(1)');
$I->waitForElementVisible('li.active:nth-child(3) > a:nth-child(1)');
$I->click('li.active:nth-child(3) > a:nth-child(1)');//Нажимаем Категории в боковом меню
$I->waitForElementNotVisible('.btn.btn-primary.oc-icon-plus');
$I->waitForElementVisible('.btn.btn-primary.oc-icon-plus');
$I->click('.btn.btn-primary.oc-icon-plus');//Нажимаем Создать
$I->waitForElementNotVisible('#Form-field-Category-name');
$I->waitForElementVisible('#Form-field-Category-name');
$I->fillField('#Form-field-Category-name','Профессиональная вертикаль');//Вводим название категории
$I->click('button.btn-primary');//Нажимаем Создать
$I->see('Категория успешно создана.','body > div.mainmenu-collapsed.scroll-after.scroll-active-after');
