<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PHP 1, урок 3</title>
</head>
<body>
<?php
/**
 * Создадим массим
 */

$MESSAGE = [
    1 => [
    "menutext" => "Главная",
    "maintext" => "Текст главной стр"
    ],
    2 => [
    "menutext" => "Каталог",
    "maintext" => "Здесь каталог"
    ],
    3 => [
    "menutext" => "Загрузки",
    "maintext" => "Можно сделать загрузки"
    ],
    4 => [
    "menutext" => "Контакты",
    "maintext" => "Как с нами связаться"
    ],
    5 => [
    "menutext" => "Форум",
    "maintext" => "Обсуждения"
    ],
    6 => [
    "menutext" => "Помощь",
    "maintext" => "Раздел помощи"
    ]
];

/**Нужно разобраться с со значением null*/
$position = isset($_GET['pos']) ? $_GET['pos'] : null;

foreach($MESSAGE as $href => $text) {
    if(isset($_GET['pos']) && $href == $position) {
        echo "<p>Здесь {$text['menutext']}</p>";
    }
    else
        echo "<p><a href='?pos={$href}'>Здесь {$text['menutext']}<a/></p>";
}
?>
<br>
<br>

<?php
if($position) {
    ?>
    <p>Текст меню "<?php echo ($MESSAGE[$position]['menutext']) ?>"</p>
    <br/>
    <p>Текст "<?php echo $MESSAGE[$position]['maintext'] ?>"</p>
    <?php
}
else {
    ?>
    <h1>Добро пожаловать!</h1>
    <?php
}
?>
</body>
</html>

