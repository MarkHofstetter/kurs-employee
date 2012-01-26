<?php

class IndexController extends Zend_Controller_Action
{

    public function init()
    {
        $registry = Zend_Registry::getInstance();
        $this->_em = $registry->entitymanager;
    }

    public function indexAction()
    {
        $test = new Default_Model_Department();
        $test->setName('Blabla121');
        $this->_em->persist($test);
        $this->_em->flush();
		
		$this->view;
		
    }

}


