<?php
header("content-type:text/html;charset=utf-8");
define('APP_HOST',$_SERVER['HTTP_HOST']);
$controller = isset($_GET['c'])?ucfirst($_GET['c']):'ActiveController';
$action = isset($_GET['a'])?$_GET['a']:'welcome';
$config = include("./config.php");
include("./function.php");
use Controller\Controller;
$controller = 'Controller\Admin\\'.$controller;
$obj = new $controller();
$obj->$action();