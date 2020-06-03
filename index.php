
<?php
// 9. Turime kintamuosius ir reikšmes $vardas, $pavardė ir $atlyginimas. 
// Parašykite sąlygą, jeigu egzistuoja kinamieji $vardas ir $pavarde, o $atlyginimas 
//> 5000, spausdinti - visi duomenys yra; kitu atveju spausdinti: duomenys netinkami.

$vardas = "";
$pavarde = "";
$atlyginimas = "6000";

if (empty($vardas) || empty($pavarde) || $atlyginimas < 5000) {
    print "duomenys netinkami";
} else {
    print "visi duomenys yra";
}
?>