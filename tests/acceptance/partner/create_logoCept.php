<?php
use Step\Acceptance\Login as AcceptanceTester;
$I = new AcceptanceTester ($scenario);
$I->wantTo ('create logo');
$I->loginAsManager ();

$I->click('.nav-label');
$I->click('.icon-users');
$I->click('.btn.btn-primary.oc-icon-plus');
$I->fillField('.form-control',  "name");
$I->attachFile('.upload-button-icon.oc-icon-upload',  'dog.jpg');
$I->click('.btn.btn-primary');

$I->see('.list-cell-index-1.list-cell-name-name.list-cell-type-text   ');
$I->click('.list-cell-index-1.list-cell-name-name.list-cell-type-text  ');
$I->see('name', '.form-control');   
$I->see('dog.jpg', '.upload-button-icon.oc-icon-upload'); 
