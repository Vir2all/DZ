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
$MENU = [
    [
        'menutext' => 'Главная',
        'description' => 'Главная страница'
    ],
    [
        'menutext' => 'Каталог',
        'description' => 'Ассортимент товаров'
    ],
    [
        'menutext' => 'Контакты',
        'description' => 'Наши координаты'
    ],
    [
        'menutext' => 'Отзывы',
        'description' => 'Отзывы покупателей'
    ],
    [
        'menutext' => 'Помощь',
        'description' => 'Центр помощи'
    ],
];

foreach ($MENU as $key => $value)
{
    foreach ($value as $href => $text){
            if($text) {
                echo "<p>Здесь {$text['menutext']}</p>";
            }
        }
    ?>

<?php
}
?>
</body>
</html>


