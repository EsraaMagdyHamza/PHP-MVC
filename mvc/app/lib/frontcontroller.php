<?php
namespace PHPMVC\LIB;
//require_once '..\app\controllers\indexcontroller.php';
//require_once '..\app\controllers\notfoundcontroller.php';
class FrontController{
    const NOT_FOUND_ACTION = 'notFoundAction';
    const NOT_FOUND_CONTROLLER = 'PHPMVC\\Controllers\\NotFoundController';
    private $_controller = 'index';
    private $_action = 'default';
    private $_prams = array();

    public function __construct(){
        $this->_parseUrl();
    }

    private function _parseUrl()
    {
        $url = explode('/',trim(parse_url($_SERVER['REQUEST_URI'],PHP_URL_PATH),"//"),3);
        if (isset($url[0]) && $url[0] != ''){
            $this->_controller = $url[0];
        }
        if(isset($url[1]) && $url[1] != ''){
            $this->_action = $url[1];
        }
        if(isset($url[2]) && $url[2] != ''){
            $this->_prams = explode('/',$url[2]);
        }
        //var_dump($this) ;
        // list($this->_controller,$this->_action,$this->_prams) = explode('/',trim($url,"//"),3);
        // $this->_prams = explode('/',$this->_prams); 
        // var_dump($this) ;
    }

    public function dispatch()
    {
        $controllerClassName = 'PHPMVC\\Controllers\\'.ucfirst($this->_controller).'Controller' ;
        $actionName = $this->_action.'Action';
        //echo $actionName ;//defaultAction
        if(!class_exists($controllerClassName))
        {
            $controllerClassName = self::NOT_FOUND_CONTROLLER ;
        }
        $controller = new $controllerClassName();
        if(!method_exists($controller,$actionName))
        {
            $this->_action = $actionName = self::NOT_FOUND_ACTION;
        }
        // echo '<br>' ;
        // echo $actionName ;//notFoundAction
        // echo '<br>' ;
        //echo $controllerClassName ;//PHPMVC\Controllers\IndexController
        $controller->setController($this->_controller);
        $controller->setAction($this->_action);
        $controller->setPrams($this->_prams);
        $controller->$actionName();
        //var_dump($controller);
    }

}