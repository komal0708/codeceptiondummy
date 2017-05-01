<?php
  $I = new AcceptanceTester($scenario);
  $I-> wantTo('ensure that user is sucessfully logged in');
  $I-> amOnPage('/auth/login');
  $I-> click('#btnLogin');
  $I-> fillField('#txtUsername',  'anthony.nolan');
  $I-> fillField('#txtPassword',  'anthony.nolan');
  $I-> click('#btnLogin');
  $I->seeInCurrentUrl('/dashboard');
  $I-> see('Welcome Anthony');

