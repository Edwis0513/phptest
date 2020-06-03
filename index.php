<?php
//12. Turime masyvą:
//Padidinkite masyvo elementų reikšmes 10 kartų ir atspausdinkite foreach pagalba. Tekstinės lieka nepakeistos.

   $a = array (10,20,30, 1, 1 ,50, 0, 0, "jonas", "petras");
foreach ($a as $b) {
    if (is_numeric($b)) {
        $new_array[] = $b * 10;
    } else {
        $new_array[] = $b;
    }
}
var_dump($new_array);