<?php

$path = $_SERVER['REQUEST_URI'];
$defaultRoot = '/faculdade-ads102/';
$moduleName = explode($defaultRoot, $path)[1];
$moduleName = explode('?', $moduleName)[0];

$paths = [
    '' => 'pages/index.php',
    'desistirhabito' => 'pages/desistirhabito.php',
    'novohabito' => 'pages/novohabito.php',
    'vencerhabito' => 'pages/vencerhabito.php',
    'inserthabito' => 'pages/inserthabito.php',
];

function redirectHome()
{
    header('Location: ./');
}

function defaultLogError($queryString, $connection)
{
    die("Erro: " . $queryString . "<br>" . $connection->error);
}

if (array_key_exists($moduleName, $paths)) {
    include_once './dbConnect.php';
    include_once './queryInDb.php';
    include_once $paths[$moduleName];
} else {
    require_once 'pages/404.php';
}
