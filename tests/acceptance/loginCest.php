<?php


class loginCest
{
    public function _before(AcceptanceTester $I)
    {

      $I->amOnPage('/auth/login');

    }

    public function _after(AcceptanceTester $I)
    {
       // $I-> browserWindow.close();

    }

    // tests
    public function logininWithValidCredentials(AcceptanceTester $I)
    {
      $I->fillFormField('anthony.nolan', 'anthony.nolan');
      $I-> see('Welcome Anthony');
      $I->seeInCurrentUrl('/dashboard');
    }

    public function loginWithInValidCredentials(AcceptanceTester $I)
    {
      $I->fillFormField('anthony', 'nolan');
      $I-> see('Retry Login');
    }

    // public function loginWithInValidCredentials(AcceptanceTester $I)
    // {

    // }
}
