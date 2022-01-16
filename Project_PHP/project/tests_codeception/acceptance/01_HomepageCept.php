<?php

$I = new AcceptanceTester($scenario ?? null);
$I->wantTo('See homepage and shoes by category');

$I->amOnPage('/');

$I->seeInTitle('SHOES STORE');

$I->click("Women");

$I->amOnPage('/women');

$I->click("Men");

$I->amOnPage("/men");

$I->click("Shop");

$I->amOnPage('/');
