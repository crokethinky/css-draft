<?php

class Router {
    
    public function __construct() {
        define('DIR_ROOT', dirname(dirname(__FILE__)));
        define('DIR_APP', DIR_ROOT . '/app');
        define('DIR_VIEWS', DIR_ROOT . '/views');
        define('DIR_LAYOUT', DIR_VIEWS . '/layout');
        define('DIR_RESOURCES', DIR_ROOT . '/resources');
        define('DIR_WEBROOT', DIR_ROOT . '/webroot');
    }
    
    private $map = array(
        'home' => array(
            'controller' => 'Controller',
            'action' => 'home'
        )
    );
    
    public function loadPage($path) {
        if (isset($this->map[$path]) && method_exists($this->map[$path]['controller'], $this->map[$path]['action'])) {
            call_user_func(array(new $this->map[$path]['controller'], $this->map[$path]['action']));
        }
        else {
            $this->loadPageNotFound();
        }
    }
    
    private function loadPageNotFound() {
        require DIR_VIEWS . '/404.php';
    }
    
}