<?php

use App\User;
use App\Ticket;

class TicketCest
{
    public function _before(FunctionalTester $I)
    {
    }

    public function _after(FunctionalTester $I)
    {
    }

    public function createATicketSuccessfully(FunctionalTester $I)
    {
        $I->amLoggedAs(User::where('email', 'wayne@chargemasterplc.com')->first());
        $I->seeAuthentication();
        $I->amOnPage('/ticket/create');
        $I->see('Create Ticket', 'h1');
        $I->fillField('customer_name', 'Evie Martell');
        $I->fillField('customer_address', 'Luton, LU1 9AB');
        $I->fillField('customer_tel', '07710999888');
        $I->fillField('customer_email', 'evie.martell@chargemasterplc.com');
        $I->selectOption('select[name=type]', 'Fault');
        $I->selectOption('select[name=category_id]', '1');
        $I->fillField('post_serial', '2997');
        $I->fillField('description', 'Testing the post fault');
        $I->seeAuthentication();
        $I->click('Create');
        $I->see('Ticket created');  

    }

    public function createATicketSuccessfullyWithoutEmail(FunctionalTester $I)
    {

    }
}
