// Комментарий до конца строки
# Тоже самой
/*
Комментарий
*/
<br>
INTEGER - числа
<br>
STRING - текст
<br>
BOOLEAN - правда или ложь ( TRUE или FALSE )
<br>
<br>
/*
<br>
== равенство
<br>
=== равенство + по типу
<br>
!= не равно
<br>
!== не равно + по типу
<br>
<> не равно (синоним !=)
<br>
< меньше
<br>
> больше
<br>
<= меньше или равно
<br>
>= больше или равно
<br>
*/
<br>
<br>
&& - И
<br>
|| - ИЛИ
<br>
<br>
<br>

<?php
$var = 5;
$var2 = 'Текст';
$var3 = $var + $var2;
    echo $var3 .'<br>';
$var3 = $var2 + $var;
    echo $var3 .'<br>';
$var3 = $var . $var2;
    echo $var3 .'<br>';
$var3 = $var2 . $var;
echo $var3 .'<br>';

$var4 = 10;
$var5 = 10;
$var6 = 'text' . $var4 + $var5;
echo $var6 .'<br>';
$var7 = 'text' . ($var4 + $var5) . 'text';
echo $var7;

