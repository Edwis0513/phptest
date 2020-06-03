
<?php

// 13. Turime masyvą:
// Sukurkite seno masyvo pagrindu naują masyvą. Palikite tiek vardų - elementų, kokia yra 
// pirma masyvo reikšmė ir atspausdinkite. Surasti, kiek masyve elementų,
//  naudokite $count = count($a); sakinį, (masyvo elementų kiekį). 
//  Konfigūracijos parametro, t.y. pirmo elemento nelieka.



$a = [3, "jonas"=>20,"petras" => 20, "simas" =>30, "ana" => 40, "gita" =>50];
$b = array_slice($a, 1, $a[0]); 
print_r($b);
print_r(count($b));
?>
