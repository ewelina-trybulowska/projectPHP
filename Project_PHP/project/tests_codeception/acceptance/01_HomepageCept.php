<?php

$I = new AcceptanceTester($scenario ?? null);
$I->wantTo('See homepage');

$I->amOnPage('/');

$I->seeInTitle('SHOES STORE');
