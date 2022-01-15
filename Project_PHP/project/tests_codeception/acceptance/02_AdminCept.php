<?php

$I = new AcceptanceTester($scenario ?? null);
$I->wantTo('Be Admin');

$I->amOnPage('/admin');
$I->seeCurrentUrlEquals('/login');

