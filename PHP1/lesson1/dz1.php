<?php
$name = "Евгений";
$age = 29;
date_default_timezone_set('Asia/Irkutsk');
$date = date('d-F-Y H:i');

$string = "Меня зовут " . $name . "<br>
Через год мне будет " . ++$age . "лет, а еще через год " . ++$age ." год. <br>
На моих часах сейчас " .$date . "<br>";
$string = str_replace(' ', '_' , $string);
echo $string;
    
