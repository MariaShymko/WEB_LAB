<?php

use Step\Acceptance\Login as AcceptanceTester;
$I = new AcceptanceTester ($scenario);
$I->wantTo ('create page');
$I->loginAsManager ();

$I->click('.nav-label');
$I->click('.btn.btn-default.oc-icon-plus.last'); 
$I->fillField('.form-control',  "name");	
$I->fillField('.__web-inspector-hide-shortcut__',  "namename");
$I->click('.title');
$I->fillField('.form-control',  "namenamename");
$I->fillField('.form-control field-textarea size-tiny',  "namename2");
$I->click('.btn.btn-primary.oc-icon-check.save');


$I->see('.expand');
$I->click('.expand');
$I->see('name', '.form-control');   

