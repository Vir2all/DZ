<h1>Задание 1</h1>
<h3>Приветствие с пользователем, учитывая дневное время</h3>
<?php
echo "Сегодня - ".date("d F Y")."<br>";
$time = date("H:i:s");
echo $time . "<br>";/* Время по Гринвичу*/
$name=Evgeny;
function timeDay()
{
    global $time;
    global $name;
    if ($time>=24&&$time<6) {
        echo 'Доброй ночи, ' .$name;
    } elseif ($time>=6&&$time<13) {
        echo 'Доброе утро, ' .$name;
    } elseif ($time>=13&&$time<19) {
        echo 'Добрый день, ' .$name;
    } elseif ($time>=19&&$time<24) {
    echo 'Добрый вечер, ' .$name;
    }
}
$goodDay=timeDay();
echo $goodDay;
?>
<br>
<br>
<br>

<h3>Приветствие с пользователем, используя оператор switch</h3>
<?php
$name='Evgeny';
function periodDay($time)
{
    global $name;
    switch ($time) {
        case  good_day:
            echo 'Добрый день, ' .$name;
            break;
        case good_morning:
            echo 'Доброе утро, ' .$name;
            break;
        case good_evening:
            echo 'Добрый вечер, ' .$name;
            break;
        case good_night:
            echo 'Доброй ночи, ' .$name;
            break;
        default:
            echo 'Доброго времени суток, ' .$name;
            break;
    }
}
$time2=periodDay($time);
echo $time2;
?>
<br>
<br>
<br>
/******************************************************************************/
<h1>Задание 2</h1>
<?php
function number ($n) {
    if ($n < 0) {
        echo "$n";
        $n++;
        number ($n);
    } elseif ($n == 0){
        echo "$n";
    } elseif ($n > 0) {
        echo "$n";
        $n--;
        number ($n);
    }
}
number(9);
?>
