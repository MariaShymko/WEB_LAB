<?php

use Step\Acceptance\Login as AcceptanceTester;
$I = new AcceptanceTester ($scenario);
$I->wantTo('edit partner');
$I->loginAsManager ();

$I->click('.nav-label');
$I->click('.icon-users');
$I->click('.list-cell-index-1.list-cell-name-name.list-cell-type-text  ');
$I->fillField('.form-control',  "name1");
$I->click('.btn.btn-primary');

$I->see('.list-cell-index-1.list-cell-name-name.list-cell-type-text  ');
$I->click('.list-cell-index-1.list-cell-name-name.list-cell-type-text  ');
$I->see('name1', '.form-control');


