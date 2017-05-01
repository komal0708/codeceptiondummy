<?php
namespace Page\Acceptance;

class loginpage
{
    // include url of current page
    public static $URL = '/auth/login';

    /**
     * Declare UI map for this page here. CSS or XPath allowed.
     */

      public static $usernameField = '#txtUsername';
      public static $passwordField = '#txtPassword';
      public static $formSubmitButton = "#btnLogin";
     

    /**
     * Basic route example for your current URL
     * You can append any additional parameter to URL
     * and use it in tests like: Page\Edit::route('/123-post');
     */
    // public static function route($param)
    // {
    //     return static::$URL.$param;
    // }

    // /**
    //  * @var \AcceptanceTester;
    //  */
    // protected $acceptanceTester;

    // public function __construct(\AcceptanceTester $I)
    // {
    //     $this->acceptanceTester = $I;
    // }


 

}
