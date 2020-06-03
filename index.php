
<?php
// 11. Masyve, t.y. masyvo elementuose patalpinti HTML fragmentai. Masyvas turi tris elementus:

// a) Forma, turinti vieną tekstinį elementą, vieną paslėptą (hidden) elementą ir mygtuką,
// b) Trys nuorodos, išdėliotos į tris eilutes
// c) Lentelė iš dviejų ląstelių ir vienos eilutės.

// Priklausomai nuo kito kintamojo $a reikšmių 1, -1 ir 0, išvedamas atitinkamas masyvo elementas. 
//Jeigu $a neapibrėžtas, nieko neišveda puslapyje. Naudoti if, elseif, else sąlygas.

// Klausimai:
// 1. Koks skirtumas tarp = = =, = =,  = PHP kalboje? Kuo skiriasi $a == 0 ir !$a sąlygos?
// 2. Kuo skiriasi switch nuo if?
$a = -1 ;
if ($a === 1) {
    print '
    <form action="">
        <p>tekstas<p>
        <div class="hidden"></div>
    </form>
    ';
}else if ($a === 0) {
    print '
    <ul>
        <li><a href="">pirmas</a></li>
        <li><a href="">antras</a></li>
        <li><a href="">trecias</a></li>
    </ul>';
}else if ($a === -1) {
    print '
    <table>
        <tr>
            <td>as</td>
            <td>as</td>
        </tr>
    </table>
    ';
}

?>

