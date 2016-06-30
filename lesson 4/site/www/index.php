<?php
require_once('../config.php');

$route = (isset($_GET['route'])) ? $_GET['route'] : 'main' ;
$sec = (isset($_GET['sec'])) ? $_GET['sec'] : '' ;
$id = (isset($_GET['id'])) ? $_GET['id'] : 0 ;

renderPage(
    $route,
    [
        "sec" => $sec,
        "id" => $id
    ]
);