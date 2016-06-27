<?php
echo 'Hello, world!';
?>
<br>
<br>
<br>
<?php
$name="Evgeny";
echo "Hello, $name";
?>
<br>
<br>
<br>
<?php
$a="Hello";
$b=true;    //Булевое значение (true/false)
$c=45;      //Целочисленное число
$d=4.2;     //Число с плавающей точкой
echo $a;
echo $b;
echo $c;
echo $d;
?>
<br>
<br>
<br>
<?php
$a='Hello';
$b="world";
$c="$a,$b";
$d='$a,$b';
echo $c;
echo $d;
?>
<br>
<br>
<br>
<?php
$a=(int)'05';
$b=(string)145.3;
$c=(bool)-4;
echo 'Строка -> число -> строка :' . $a . '<br>';
echo 'Число -> строка :' . $b . '<br>';
echo 'Число -> булев -> строка :' . $c . '<br>';
?>
<br>
<br>
<br>
<?php
$a=4;
$b=5;
$a+=$b;
echo 'a=' . $a;
?>
<br>
<br>
<br>
<?php
$a=5;
echo $a++;  //Постинкремент
echo ++$a;  //Преинкремент
echo $a--;  //Постдекремент
echo --$a;  //Предекремент
?>
<br>
<br>
<br>
<?php
$a=4;
$b=5;
var_dump($a==$b);
var_dump($a===$b);
var_dump($a>$b);
var_dump($a<$b);
var_dump($a<>$b);
var_dump($a!=$b);
var_dump($a!==$b);
var_dump($a<=$b);
var_dump($a>=$b);
?>
<br>
<br>
<br>
<?php
$a=4;
$b='4';
var_dump($a==$b);
var_dump($a===$b);
?>
<br>
<br>
<br>
<?php
define('MY_CONST',100);
echo MY_CONST;
?>