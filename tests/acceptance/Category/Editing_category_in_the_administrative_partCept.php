<?php 
$I = new AcceptanceTester($scenario);
$I->wantTo('Editing a category in the administrative part');
$I->amOnPage('backend/backend/auth/signin');//Открываем страницу для авторизации на админке
$I->fillField('.form-control.width-1.icon.user','natalia');//Вводим логин
$I->fillField('.form-control.width-1.icon.lock','123123');//Вводим пароль
$I->click('.btn.btn-primary.login-button');//Нажимаем войти
$I->waitForElement('.layout.control-tabs.master-tabs.fancy-layout.oc-logo-transparent',30);
$I->click('ul.nav:nth-child(2) > li:nth-child(5) > a:nth-child(1)');//Нажимаем Конкурс в верхнем меню
$I->waitForElementNotVisible('//*[@id="layout-sidenav"]/ul/li[3]/a');
$I->waitForElementVisible('//*[@id="layout-sidenav"]/ul/li[3]/a');
$I->click('li.active:nth-child(3) > a:nth-child(1)');//Нажимаем Категории в боковом меню
$I->waitForElementNotVisible('.list-cell-index-1 list-cell-name-name list-cell-type-text  ');
$I->click('.list-cell-index-1.list-cell-name-name.list-cell-type-text');//Нажимаем на категорию в списке
$I->waitForElementNotVisible('.form-group.switch-field.span-full');
$I->fillField('.form-control','Категорийная вертикаль');//Вводим в сторку Название Категорийная вертикаль
$I->click('btn btn-primary');//Нажимаем кнопку Сохранить
$I->seeElement('Категория успешно обновлена.''body > div.mainmenu-collapsed.scroll-after.scroll-active-after');
