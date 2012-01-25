<?php
// entities/Test.php
require_once "bootstrap.php";


/**
 * @Entity @Table(name="tests")
 */

class Test{
	
	/** @Id @Column(type="integer") @GeneratedValue */
	protected $id;
	/** @Column(type="string") */
	protected $name;
	
	public function getId(){
		return $this->id;
	}
	
	public function setName($name){
		$this->name = $name;
	}
	
	public function getName(){
		return $this->name;
	}
	
}
?>