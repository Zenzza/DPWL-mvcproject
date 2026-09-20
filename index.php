<?php
require_once 'config/autoload.php';
//include_once 'config/config.php';
$dinamis = new Config();
$config = $dinamis -> CtrlDinamis();

$url = $_GET['url'] ?? $config['default_controller'] . '/' . $config['default_method'];
$url = explode('/', $url);

$controllerName = ucfirst($url[0]);
$methodName = $url[1] ?? 'index';

$controllerPath = './controller/' . $controllerName . '.php';

// if (file_exists($controllerPath)) {
//    include $controllerPath ;
    $controller = new $controllerName();

    if (method_exists($controller, $methodName)) {
        $controller -> $methodName();
    } else {
        echo "Method '$methodName' tidak ditemukan.";
    }
//} else {
//    echo "Controller '$controllerName' tidak ditemukan.";
//}
?>