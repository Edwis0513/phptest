<?php
//1. Sujunkite kintamuosius, kad atspausdintų tekstą "mano batai buvo du":
$a ="du";
$b ="mano";
$c ="batai buvo";

$tekstas = $b . ' ' . $c . ' ' . $a;
print($tekstas);
print "<br><br>";
//2. Parašykite sąlygą: jeigu kintamasis $a daugiau už $b, spaudintų tekstą: " a daugiau už b" .
if ($a > $b) {
    print "a daugiau už b";
}
print "<br><br>";
//3. Priskirkite dviems konstantoms kokias nors reikšmes ir jas sujunkite. Atspausdinkite.
$pirmas = "vienas";
$antras = "du";
$bus = $pirmas . $antras ;
print $bus . '<br><br>';
//4. Ištaisykite klaidas, rezultate turi spausdinti žodį "Vokietija":
$salis = "de";
switch($salis) {
    case 'ca';
         echo ("Kanada");
         break;
    case "cr";
         echo ("Kosta Rika");
         break;
    case "de";
         echo ("Vokietija");
         break;
    case "uk";
         echo ("Didžioji Britanija");
         break;
    default;
         echo ("JAV");
}
print '<br><br>';
//5. Kokias operacijas atlikti su $a ir $b, kad atspausdintų 11:

$a = "10 maišų";
$b = "1 maišas";

$a = (int) filter_var($a, FILTER_SANITIZE_NUMBER_INT);
$b = (int) filter_var($b, FILTER_SANITIZE_NUMBER_INT);

print $a + $b . '<br><br>';
//6. Kokį kintamąjį (kintamuosius) reikia ištrinti ar užkomentuoti, kad $e įgytų reikšmę 10:

$a =  "11";
$b = "5";
//  $c = "6";
$d = 4;

$e = $d + $a -$b + $c;
print $e . '<br><br>';

$a = 0;
$b = 0;
$c = 0;
$d = 0;

//7. Ką reikia užkomentuoti, kad $e įgytų reikšmę 4:

$a = 5;
$b = $a + 1; //6
$c = $a -  1; //4
$d = $c -  1; //3
//    3 + 5 - 6 + 4
$e = $d + $a -$b + $c;
print $e;
?>
