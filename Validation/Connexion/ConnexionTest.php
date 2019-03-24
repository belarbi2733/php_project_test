<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);
//require_once("../../lib/go-pear.phar");
define("__ROOT__",dirname(dirname(dirname(__FILE__))));
require_once(__ROOT__.'/WebPortal/application/models/UserModel.php');

// Connexion test case
class ConnexionTest extends PHPUnit_Framework_TestCase
{
    
    /**
     *
     * @var Connexion
     */
    public $connexiontest
    private $connexion;
    public function setUp()
    {
        $this->connexiontest = new UserModel();
    }
    
    
    
    
     public function testIfWheelWorks()
     {
        // Suppose we have 100 gumballs...
        $this->connexiontest->getUserRoles(100);

        // ... And we turn the wheel once...
        $this->connexiontest->authentification("test","test");

        $this->connexiontest->authentification("test","test");

        // ... we should now have 99 gumballs remaining in the machine right?
        //$this->assertEquals(99, $this->connexiontest->getGumballs()); 
    }
    
    //test
    
    
}
/*$login="acools";
$password="test";
$test= new ConnexionTest;
$test->testAuthentification($login, $password);*/

