<?php
use Step\Acceptance\Login as AcceptanceTester;
$I = new AcceptanceTester ($scenario);
$I->wantTo ('edit page');
$I->loginAsManager ();

$I->click('.nav-label');
$I->click('.expand');
$I->fillField('.form-control',  "name1");
$I->click('.btn btn-primary oc-icon-check save');

$I->see('.expand');
$I->click('.expand');
$I->see('name1', '.form-control');  

