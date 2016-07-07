<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
<?php

/**
 * Массив - Меню
 */
$MENU = [];
    $MENU[0] = [
        'menutext' => 'Главная',
        'description' => 'Главная страница'
    ];
    $MENU[1] = [
        'menutext' => 'Каталог',
        'description' => 'Ассортимент товаров'
    ];
    $MENU[2] = [
        'menutext' => 'Контакты',
        'description' => 'Наши координаты'
    ];
    $MENU[3] = [
        'menutext' => 'Отзывы',
        'description' => 'Отзывы покупателей'
    ];
    $MENU[4] = [
        'menutext' => 'Помощь',
        'description' => 'Центр помощи'
    ];

$position = isset($_GET['page']) ? $_GET['page'] : 'null';

foreach ($MENU as $key => $value)
{
    echo '<a href="  $MENU[$key]['menutext'] . '<br>';
}
?>
</body>
</html>


