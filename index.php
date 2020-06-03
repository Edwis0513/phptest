<?php
// 15. Masyve, jo elementuose, yra surašytos HTML spalvos:
// 1 elementas - red, 2 elementas - blue, 3 elementas - green, 4 elementas - yellow, 5 elementas - pink.
//  Atspausdinti spalvotą tekstą foreach ciklo pagalba, kai vartojamos to masyvo elementuose aprašytos spalvos.

$colors = ['red', 'blue', 'green', 'yellow', 'pink'];
foreach ($colors as $color) {
    echo "<p style='color: $color'>$color</p>";
} 