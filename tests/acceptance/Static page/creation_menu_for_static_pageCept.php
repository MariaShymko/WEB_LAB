<?php 
use Step\Acceptance\Login as AcceptanceTester;
$I = new AcceptanceTester($scenario);
$I->wantTo('perform actions and see result');
$I = $this;
$I = loginAsManager();
$I->waitForElement('#layout-sidenav li:nth-child(2)', 7);
//$I->click('.nav-label');
$I->click('#layout-sidenav li:nth-child(2) span');
$I->click('#MenuItems-formMenuc7561fb6648597569008ffab41eb85e5580e477289fa8Items-item-list-items > a');
$I->click('#MenuItems-formMenuc7561fb6648597569008ffab41eb85e5580e477289fa8Items-item-list-items > a');
$I->click('#Form-formMenuc7561fb6648597569008ffab41eb85e5580e477289fa8ItemsMenuItem-field-title');
$I->click('#select2-Form-formMenuc7561fb6648597569008ffab41eb85e5580e477289fa8ItemsMenuItem-field-type-container');
$I->click('#Form-formMenuc7561fb6648597569008ffab41eb85e5580e477289fa8ItemsMenuItem-field-type-group > span');
$I->click('#Form-formMenuc7561fb6648597569008ffab41eb85e5580e477289fa8ItemsMenuItem-field-reference-group > span > span.selection > span');
$I->click('#select2-Form-formMenuc7561fb6648597569008ffab41eb85e5580e477289fa8ItemsMenuItem-field-reference-container');
$I->click('body > div.control-popup.modal.fade.in > div > div > div.modal-footer > button.btn.btn-primary');
$I->click('#Form-formMenuc7561fb6648597569008ffab41eb85e5580e477289fa8-field-toolbar-group > div > a');
$I->see('вава', '#MenuItems-formMenuc7561fb6648597569008ffab41eb85e5580e477289fa8Items-item-list-items > ol > li:nth-child(7) > div > a > span.title');