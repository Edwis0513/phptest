
<?php
//12. Turime masyvą:
//Padidinkite masyvo elementų reikšmes 10 kartų ir atspausdinkite foreach pagalba. Tekstinės lieka nepakeistos.
$a = array (10,20,30, 1, 1 ,50, 0, 0, "jonas", "petras");

$filtered_num = array_filter($a, 'is_int');
$filtered_string = array_filter($a, 'is_string');
$filtered_num[] = $value * 60;

$a = array_merge($filtered_num, $filtered_string);

foreach ($a as $value) {
    print($value);
   }
