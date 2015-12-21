<?php 
$I = new FunctionalTester($scenario);
$I->wantTo('test the content on the homepage');
$I->amOnPage('/');
$I->see('Laravel 6'); 