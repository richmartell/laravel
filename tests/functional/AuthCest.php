<?php

use App\User;

class AuthCest
{
    public function _before(FunctionalTester $I)
    {
    }

    public function _after(FunctionalTester $I)
    {
    }

    public function registrationWorks(FunctionalTester $I)
    {
        $I->amOnPage('/auth/register');
        $I->dontSeeAuthentication();
        $I->see('Register', 'h1'); 
        $I->fillField('name', 'Wayne');
        $I->fillField('email', 'simon@chargemasterplc.com');
        $I->fillField('password', 'secret');
        $I->fillField('password_confirmation', 'secret');
        $I->click('Register');
        $I->seeCurrentUrlEquals('/dashboard');
        $I->see('You are now logged in');
        $I->seeAuthentication();
    }

     public function registrationFailsWhenTryingToRegisterWithExistingEmail(FunctionalTester $I)
    {
        $I->amOnPage('/auth/register');
        $I->dontSeeAuthentication();
        $I->fillField('name', 'Wayne');
        $I->fillField('email', 'wayne@chargemasterplc.com');
        $I->fillField('password', 'secret2');
        $I->fillField('password_confirmation', 'secret2');
        $I->click('Register');
        $I->dontSeeCurrentUrlEquals('/dashboard');
        $I->seeCurrentUrlEquals('/auth/register');
        //$I->see('That email is already in use'); //should see error about dupe email
        $I->dontSeeAuthentication();
    }

    public function loginWorks(FunctionalTester $I)
    {
        $I->amOnPage('/auth/login');
        $I->see('Login'); 
        $I->fillField('email', 'wayne@chargemasterplc.com');
        $I->fillField('password', 'secret');
        $I->click('Login');
        $I->seeCurrentUrlEquals('/dashboard');
        $I->see('You are now logged in');
    }

    public function checkUserRedirectedToLoginWhenNotAuthd(FunctionalTester $I)
    {
        $I->dontSeeAuthentication();
        $I->amOnPage('/dashboard');
        $I->dontSee('You are now logged in');
        $I->seeCurrentUrlEquals('/auth/login');
    }

    public function loginFailsWhenEmailIsIncorrect(FunctionalTester $I)
    {

    }

    public function loginFailsWhenNoPasswordEntered(FunctionalTester $I)
    {

    }

    public function loginFailsWhenPasswordIncorrect(FunctionalTester $I)
    {

    }

}
