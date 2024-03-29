<?php

## xxx [3] bootstrap
class Bootstrap extends Zend_Application_Bootstrap_Bootstrap
{
    protected function _initAutoload()
    {
    require_once 'Zend/Db.php';
    
        $options = array(
          Zend_Db::CASE_FOLDING => Zend_Db::CASE_UPPER,
          Zend_Db::AUTO_QUOTE_IDENTIFIERS => false,
        );
        
        $params = array ('dbname'   => 'orcl', ## $config->application->mydbname,
                         'username' => 'gb', ## $config->application->myusername, 
                         'password' => 'gb', ## $config->application->mypassword,
                         'options'  => $options
                         );
       
        $db = Zend_Db::factory('oracle', $params);
        Zend_Db_Table_Abstract::setDefaultAdapter($db);


        $autoloader = new Zend_Application_Module_Autoloader(array(
            'namespace' => 'Default',
            'basePath'  => dirname(__FILE__),
        ));
        return $autoloader;
    }

    protected function _initDoctype()
    {
        $this->bootstrap('view');
        $view = $this->getResource('view');
        $view->doctype('XHTML1_STRICT');
    }
}

