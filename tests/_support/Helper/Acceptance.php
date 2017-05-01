<?php
namespace Helper;

// here you can define custom actions
// all public methods declared in helper class will be available in $I

class Acceptance extends \Codeception\Module
{
  public function fillFormField($name, $password){
    $I = $this->getModule('WebDriver');
    $I->fillField('#txtUsername',$name);
    $I->fillField('#txtPassword', $password);
    $I->click('#btnLogin');
  }
}
