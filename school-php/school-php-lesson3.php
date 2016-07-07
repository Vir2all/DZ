<?php
/** Массивы
 * 2х типов
 * -Индексный
 * -Ассоциативный
 */

$array = array(
    'key' => 'value1',
    'key2' => 'value2',
    'key3' => 'value3'
);

$country = array(
    'Азия1' => 'Россия',
    'Европа' => 'Италия',
    'Азия2' => 'Китай'
);

echo '<pre>' . print_r($array,1) . '</pre>';
echo $array['key']. '<br>'; // Ассоциативный массив


/**
 * Многомерный массив, т.е.
 * массив внутри массива
 */
$country = array(
    'Россия' => array('Иркутск', "Москва"),
    'Китай' => array('Харбин', "Пекин"),
);
echo '<br>' . print_r($country,1) . '</pre>';

/**
 * Удаление сточки с массива
 * unset ($country[2]);
 */
/*
$country2 = array();
$country2[0] = 'Любое имя';
$country2['любой ключ'] = 'любое имя2';
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

echo '<pre>' . print_r($MENU,1) . '</pre>';