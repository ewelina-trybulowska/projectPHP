<?php

$I = new AcceptanceTester($scenario ?? null);
$I->wantTo('Manage users as admin');

$I->amOnPage('/login');

$I->fillField('email', 'john.doe@gmail.com');
$I->fillField('password', 'secret');

$I->click('Log in');

$I->seeCurrentUrlEquals('/admin/dashboard');
