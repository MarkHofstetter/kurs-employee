<?php
require_once 'PHPUnit/Framework/TestCase.php';
require_once 'add.php';

class AddTest extends PHPUnit_Framework_TestCase
{
    public function testAddSimple() {
	  $this->assertEquals(8, add(3, 5));
	}
		
	/**
    * @dataProvider add_provider
    */
    public function testAdd($a, $b, $c) {
	  $this->assertEquals($c, add($a, $b));
	}
	
	public function add_provider()
    {
        return array(
          array(1, 2, 3),          
		  array(-1, 2, 1),          
		  array(4, 3, 7),          
		  array(4, 3, 8),          
        );
    }
	
}

