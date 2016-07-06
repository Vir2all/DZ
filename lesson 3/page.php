<?php
$page = isset ( $_GET [ 'page' ]) ? $_GET [ 'page' ] : 'index';
switch ( $page ) {
    case 'about' :
        echo 'О сайте';
    break;
    case 'index' :
        echo 'Главная страница';
    break;
}
?>