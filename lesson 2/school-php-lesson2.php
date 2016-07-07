<?php
$login = 'Vir2all';
$pass = '123';


if($login == 'Vir2all') {
    //Если правда (TRUE)
    echo 'Правда';
} else {
    echo 'Вы ввели неверный логин';
    // Если ложь (FALSE)
}

if($login == 'Vir2all') {
    echo 'Логин совпал'; // что делать, если условие верно
} elseif ($pass == '123') {
    echo 'Пароль совпал'; // что делать, если условие верно
} else {
    echo 'Ни логин, ни пароль не совпали';
    // что делать, если условие не верно
}


/*
isset($var)  // Проверка существования переменной
!            // Это отрицание условия
!empty($var) // Проверка, пустая переманная
*/

$var1 = 'Текст';
if(isset($var2)) {
    echo $var2; //TRUE
} else {
    //FALSE;
};


$var3 = 'Text';
if (!isset($var3)) { // Отрицание условия
    echo 'Нет такой переменной';
}

if (!(5==3)) {
    echo 'вывелся текст'; // Это будет TRUE
}


$var4 = '';
if (empty($var4)) {
    echo 'Данная переменная пустая';
}

$var4 = 0;
if (empty($var4)) {
    echo 'Данная переменная пустая';
}

$var4 = false;
if (empty($var4)) {
    echo 'Данная переменная пустая';
}


$var5 = '';
if (!empty($var5)) {
    echo 'Данная переменная НЕ пустая';
}
?>
<br>
<br>
<br>
<?php
/**
 * ЦИКЛЫ
 * - while
 * - do-while
 * - for
 * - foreach (для массивов)
 */
//WHILE
$x = 1;
echo $x . 'Текст до цикла <br>';
while($x == 1 || $x ==2 || $x ==3) {
    echo 'Произвольный текст <br>';
    ++$x; // Увеличиваем $x на 1
    echo $x . '<br>';
}
echo 'Текст после цикла <br>';
?>
    <br>
    <br>
    <br>
<?php
$x = 1;
echo 'Текст до цикла <br>';
while($x < 5) {
    echo $x .') Произвольный текст <br>';
    ++$x; // Увеличиваем $x на 1
}
echo 'Текст после цикла <br>';
?>
    <br>
    <br>
    <br>
<?php
//DO-WHILE
echo 'Перед циклом<br>';
$x = 10;
do {
    echo $x . '<br>';
    ++$x;
} while ($x < 10);
echo 'После цикла';
?>
    <br>
    <br>
    <br>
<?php
//FOR
echo 'Перед цикла <br>';

for($x = 1; $x < 10; ++$x) {
    echo $x . '<br>';
}
echo 'После цикла';
?>
    <br>
    <br>
    <br>
<?php
//FOREACH
$names = array('Вася','Петя','Влад','Женя');
echo '<pre>' . print_r ($names,1) . '</pre>';
    echo 'В нашем доме живут: ';
foreach ($names as $key => $value) {
    if ($value == 'Влад') {
        break; // обрывает цикл
    }
    echo $value . ', ';
};
echo '<br>Цикл завершился';
?>
    <br>
    <br>
    <br>
<?php
// continie;
$names = array('Вася','Петя','Влад','Женя');
echo '<pre>' . print_r ($names,1) . '</pre>';
echo 'В нашем доме живут: ';
foreach ($names as $key => $value) {
    if ($value == 'Влад') {
        continue; //Завершить интерацию, то есть не выводить, но дальше будет обрабатываться
    }
    echo $value . ', ';
};