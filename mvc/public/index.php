<?php
namespace PHPMVC ;
use PHPMVC\LIB\FrontController;
use PHPMVC\LIB\autoload;
use PHPMVC\Controller\NotFoundController ;
//use PHPMVC\LIB\Database\DatabaseHandler;

use PHPMVC\Models\AbstractModel;
use PHPMVC\Models\EmployeeModel;


if(!defined ('DS')){
    define('DS', DIRECTORY_SEPARATOR);
}
//require_once  '..'.DS.'app'.DS.'lib'.DS.'frontcontroller.php' ;
//require_once '..'. DIRECTORY_SPERATOR .'app' . DIRECTORY_SPERATOR . 'config.php';
require_once '..\app\config.php';
require_once '..\app\lib\autoload.php';
//require_once '..\app\lib\database\pdodatabasehandler.php';
// require_once '..\app\models\employeemodel.php';
// require_once '..\app\models\abstractmodel.php';
// require_once '..\app\controllers\notfoundcontroller.php';
// require_once '..\app\controllers\indexcontroller.php';
 
session_start();
$frontcontroller = new FrontController();
$frontcontroller->dispatch();
//var_dump($connection);
//$emp = new EmployeeModel();
//var_dump ($emp);
//$emp->create();

//var_dump(get_loaded_extensions());
// $url = parse_url($_SERVER['REQUEST_URI'],PHP_URL_PATH);
// list($controller,$action,$prams) = explode('/',trim($url,"//"),3);
// $prams = explode('/',$prams); 
// var_dump($controller,$action,$prams) ;
