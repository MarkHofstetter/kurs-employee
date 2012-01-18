<?php

require_once 'C:\xampp\htdocs\employee\Employee.php';

/**
 * Test class for Employee.
 * Generated by PHPUnit on 2012-01-11 at 15:27:31.
 */
class EmployeeTest extends PHPUnit_Framework_TestCase
{
    /**
     * @var Employee
     */
    protected $object;

    /**
     * Sets up the fixture, for example, opens a network connection.
     * This method is called before a test is executed.
     */
    protected function setUp()
    {
        $this->object = new Employee;
    }

    /**
     * Tears down the fixture, for example, closes a network connection.
     * This method is called after a test is executed.
     */
    protected function tearDown()
    {
    }

    /**
     * @covers {className}::{origMethodName}
     * @todo Implement testSet_last_name().
     */
    public function testSet_last_name()
    {
	    $name = 'Bumsti';
        $this->object->last_name = $name;
		$this->assertEquals($this->object->last_name, $name);
    }

    /**
     * @covers {className}::{origMethodName}
     * @todo Implement testRead().
     */
    public function testStore()
    {
	   $emp = new Employee;
	   $emp->last_name = 'bla';
	   $emp->email = 'bla';
	   $emp->salary = 10000;	   
       $emp->store();
	   
	   $emp2 = new Employee;
	   $emp2->last_name = 'bla';
	   $emp2->read();
	   $this->assertEquals($emp->last_name, $emp2->last_name);
	   $this->assertEquals($emp->salary, $emp2->salary);	   
    }

    /**
     * @covers {className}::{origMethodName}
     * @todo Implement testStore().
     */
    public function testRead()
    {	   
	   $name = 'Fay';
       $this->object->set_last_name($name);
	   $this->object->read();
	   $this->assertEquals(6000, $this->object->salary);
	}
	
	public function testReadFail()
	{
	   $this->setExpectedException('PEAR_Exception');
	   $name = 'Bumsti';
       $this->object->set_last_name($name);
	   $this->object->read();
	   
    }
	
	public function testDelete()
	{}
}
?>
