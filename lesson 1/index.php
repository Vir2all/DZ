<?php
$a=5;
$b='05';

var_dump($a==$b); // Почему true?
//var_dump-это операция сравнения, == Сравнение с приведением типов, то есть у нас сравнения переменных $a и $b. Перемаенная $b = 5//

var_dump((int)'012345'); // Почему 12345?
//(int), (integer) - приведение к целому числу//

var_dump((float)123.0===(int)123.0); // Почему false?
// === Сравнение без приведения типов, поэтому false//
//(float),(double),(real)-приведение к числу с плавающей точкой (float), то есть число так и останется 123.0//
//(int) - приведение к целому числу, значит значение будет 123//

var_dump((int)0===(int)'hello, world'); // Почему true?
//(int)0 - приведение к числу 0, (int)'hello, world' - 0//
?>

<br>
<br>
<br>

<?php
$a=1;
$b=2;
echo "a: $a" . '<br>';
echo "b: $b" . '<br>';

$a=$a+$b;   //1=1+2, то есть в памяти переменная $a стала 3
$b=$a-$b;   //2=3-2, здесь переменная #a береться из стоки выше, переменная $b изменилась на 1
$a=$a-$b;   //3=3-1, переменная стала $a=2, переменная $b=1

//показываем результат//
echo "a=" .$a . '<br>';
echo "b=" .$b;
?>

