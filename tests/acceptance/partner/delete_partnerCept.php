<?php
use Step\Acceptance\Login as AcceptanceTester;
$I = new AcceptanceTester ($scenario);
$I->wantTo('delete partner');
$I->loginAsManager ();

$I->haveInDatabase('lovata_contest_partners', array (
	 'active'=>'1',
   	 'name'=>'Информационные партнеры',
	 'created_at'=>'2016-08-22 18:38:25',	 
	 'updated_at'=>'2016-08-24 13:09:06');
	
$I->click('.nav-label');
$I->click('.icon-users');
$I->click('.list-tree-level-0.rowlink'); 
$I->click('.btn.btn-default.oc-icon-trash-o');
$I->click('.confirm.btn.btn-primary');

$I->dontSee('name1','.icon-users'); 
$I->dontSeeInDatabase('users', array(
'name' => 'name'));