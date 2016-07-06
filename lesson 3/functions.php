<?php
/*
 * заголовок страницы
 */
$title = "PHP 1, урок 3";

/*
 * массив пользователей
 */
$users = [
    [
        'user' => 'Evgeny',
        'age' => 29,
        'email' => 'ev.kravcov@gmail.com'
    ],
    [
        'user' => 'Julia',
        'age' => 32,
        'email' => 'julia@mail.ru'
    ],
    [
        'user' => 'Vladimir',
        'age' => 35,
        'email' => 'vladimir@pisem.net',
        'additional' => 'administrator'
    ]
];
/**
 * @param $key
 * @return bool|mixed   
 */
function getVarAlias($key)
{
    $aliases = [];
    $aliases['user'] = 'Имя';
    $aliases['age'] = 'Возраст';
    $aliases['email'] = 'Почта';
    $aliases['additional'] = 'Дополнительно';

    return isset($aliases[$key]) ? $aliases[$key] : false;
};

function getUserInfo($user)
{
    $output = '<ul>';
        foreach ($user as $key => $value) {
            if (($varAlias = getVarAlias($key)) != false) {
                $output .= '<li>' . $varAlias . ': ' . $value . '</li>';
            }
        }
    $output .= '</ul>';
    return $output;
};
