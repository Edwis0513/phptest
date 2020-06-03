
<?php
//14. Turime masyvą:
//Sukurkite seno masyvo pagrindu naują masyvą. Sumažinkite jo elementų kiekį 2 kartus,
 //t.y. palikite kas antrą elementą ir atspausdinkite.


$a = array (10,20,30,50,60,70,80);
$b = [];

foreach (range(1, count($a), 2) as $key) {
  unset($a[$key]);
}
$b = array_merge($a);
print_r($b);

// 15. Masyve, jo elementuose, yra surašytos HTML spalvos:
// 1 elementas - red, 2 elementas - blue, 3 elementas - green, 4 elementas - yellow, 5 elementas - pink.
//  Atspausdinti spalvotą tekstą foreach ciklo pagalba, kai vartojamos to masyvo elementuose aprašytos spalvos.


?>
