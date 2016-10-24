<?php 
$I = new AcceptanceTester($scenario);
$I->wantTo('Deleting a category in the administrative part');
$I->amOnPage('backend/backend/auth/signin');//Открываем страницу для авторизации на админке
$I->fillField('.form-control.width-1.icon.user','natalia');//Вводим логин
$I->fillField('.form-control.width-1.icon.lock','123123');//Вводим пароль
$I->click('.btn.btn-primary.login-button');//Нажимаем войти
$I->waitForElement('.layout.control-tabs.master-tabs.fancy-layout.oc-logo-transparent',30);
$I->click('ul.nav:nth-child(2) > li:nth-child(5) > a:nth-child(1)');//Нажимаем Конкурс в верхнем меню
$I->waitForElementNotVisible('//*[@id="layout-sidenav"]/ul/li[3]/a');
$I->waitForElementVisible('//*[@id="layout-sidenav"]/ul/li[3]/a');
$I->click('li.active:nth-child(3) > a:nth-child(1)');//Нажимаем Категории в боковом меню
$I->waitForElementVisible('#Lists-checkbox-2');
$I->click('#Lists-checkboxAll');//Нажимаем чек-бокс Выбрать все
$I->waitForElementNotVisible('button.btn:nth-child(3)');
$I->waitForElementVisible('button.btn:nth-child(3)');
$I->click('button.btn:nth-child(3)');//Нажимаем Удалить выбранные элементы
$I->waitForElementNotVisible('.confirm');
$I->waitForElementVisible('.confirm');
$I->click('.confirm');// В попапе нажимаем ОК
$I->seeElement('Выбранные записи успешно удалены.''body > div.mainmenu-collapsed.scroll-after.scroll-active-after');

