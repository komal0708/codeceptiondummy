<?php
  use Codeception\Util\Fixtures;

  $I = new AcceptanceTester($scenario);
  $I-> wantTo('ensure that user is sucessfully logged in');
  $I-> amOnPage('/auth/login');
  $I-> click('#btnLogin');
  $I-> fillField('#txtUsername',  Fixtures::get('user'));
  $I-> fillField('#txtPassword',  Fixtures::get('password'));
  $I-> click('#btnLogin');
  $I->seeInCurrentUrl('/dashboard');
  $I-> see('Welcome Anthony');

