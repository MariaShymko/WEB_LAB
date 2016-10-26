<?php
use Step\Acceptance\Login as AcceptanceTester;
$I = new AcceptanceTester ($scenario);
$I->wantTo ('delete page');
$I->loginAsManager ();

$I->click('.nav-label');
$I->click('.expand');
$I->click('.checkbox.custom-checkbox.nolabel');
$I->click('.btn btn-default empty oc-icon-trash-o');	


$I->dontSee('name1','.expand');  




