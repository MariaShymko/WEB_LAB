<?php 
$I = new AcceptanceTester($scenario);
$I->wantTo('Create a category in the administrative partCept');
$I->amOnPage('backend/backend/auth/signin');//Открываем страницу для авторизации на админке
$I->fillField('.form-control.width-1.icon.user','natalia');//Вводим логин
$I->fillField('.form-control.width-1.icon.lock','123123');//Вводим пароль
$I->click('.btn.btn-primary.login-button');//Нажимаем войти
$I->waitForElement('.layout.control-tabs.master-tabs.fancy-layout.oc-logo-transparent',30);
$I->click('ul.nav:nth-child(2) > li:nth-child(5) > a:nth-child(1)');//Нажимаем Конкурс в верхнем меню
$I->waitForElementNotVisible('//*[@id="layout-sidenav"]/ul/li[3]/a');
$I->waitForElementVisible('//*[@id="layout-sidenav"]/ul/li[3]/a');
$I->click('li.active:nth-child(3) > a:nth-child(1)');//Нажимаем Категории в боковом меню
$I->waitForElementNotVisible('.btn.btn-primary.oc-icon-plus');
$I->waitForElementVisible('.btn.btn-primary.oc-icon-plus');
$I->click('.btn.btn-primary.oc-icon-plus');//Нажимаем Создать
$I->waitForElementNotVisible('#Form-field-Category-name');
$I->waitForElementVisible('#Form-field-Category-name');
$I->fillField('#Form-field-Category-name','Профессиональная вертикаль');//Вводим название категории
$I->click('button.btn-primary');//Нажимаем Создать
$I->see('Категория успешно создана.','body > div.mainmenu-collapsed.scroll-after.scroll-active-after');
