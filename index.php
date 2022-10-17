<?php

include_once "bootstrap.php";

$pages = $entityManager->getRepository('Page')->findAll();

function getPath($request){
    $path = explode('/', $request);
    return $path[count($path) - 1];
}

function startsWith( $string,  $startString){
    $len = strlen($startString);
    return (substr($string, 0, $len) === $startString);
}

$request = $_SERVER['REQUEST_URI'];
//echo ($request);
$rootUrl = getPath($request);

if (startsWith($rootUrl, 'page')) {
    require __DIR__ . '/src/views/index.php';
    return;
}
elseif( $rootUrl === '/' || $rootUrl === '' || $rootUrl === 'home') {
    require __DIR__ . '/src/views/index.php';
    return;
}
elseif($rootUrl === 'login' || $rootUrl === 'logout') {
    require __DIR__ . '/src/views/login.php';
    return;
}
elseif($rootUrl === 'cont_manager') {
    require __DIR__ . '/src/views/cont_manager.php';
    return;
}
elseif($rootUrl === 'new_page') {
    require __DIR__ . '/src/views/new_page.php';
    return;
}
elseif($rootUrl === 'update') {
    require __DIR__ . '/src/views/update.php';
    return;
}
else {
    require __DIR__ . '/src/views/404.php';
    return;
}
?>