<?php
use Page\Acceptance\loginpage as LoginPage;

// use of static variables defined in loginpage class

$I = new AcceptanceTester($scenario);
$I-> wantTo('ensure that user is sucessfully logged in');
$I->amOnPage(LoginPage::$URL);
$I->fillField(LoginPage::$usernameField, 'anthony.nolan');
$I->fillField(LoginPage::$passwordField, 'anthony.nolan');
$I->click(LoginPage::$formSubmitButton);
$I-> see('Welcome Anthony');



