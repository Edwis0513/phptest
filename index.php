<<?php
// 1. Duota 12 kintamuju (menesiai), kiekviename is ju visada buna 8 laisvos dienos (savaitgaliai) ir random per menesi nuo 1-4 laisvu dienu, apskaiciuokite kiek laisvu dienu turesite per metus.
// $freetime_year = 0;
// for ($month=1; $month <=12 ; $month++) { 
//     $freetime = 8 + rand(1,4);
//     $freetime_year +=$freetime;
// }
// print $freetime_year;

// 2. Sukurkite vienmati masyva kuris atspindetu jusu kelimosi laika savaites dienomis (viena savaite).
// atvaizduokite panaudoje atitinkama php funkcija anksciausia laika.

// $awakening_time = [7.30, 7.45, 8.20, 7.40, 8.10, 9.10, 8.50];
// $awakening_time_sorted[] = asort($awakening_time);
// print_r($awakening_time) ;

// 3. Sukurkite 5 mokiniu masyva su duomenimis: student_id, student_name, student_email, student_score.
// Ekrane atvaizduokite student_name ir student_score

// $students = [
//     [
//         'student_id' => 1 ,
//         'student_name' => 'Jonas',
//         'student_email' => 'jonas@gmail.com',
//         'student_score' => 6.34
//     ],
//     [
//         'student_id' => 2 ,
//         'student_name' => 'Petras',
//         'student_email '=> 'petras@gmail.com',
//         'student_score' => 7.20
//     ],
//     [
//         'student_id' => 3 ,
//         'student_name' => 'Erika',
//         'student_email' => 'erika@gmail.com',
//         'student_score' => 6.45
//     ],
//     [
//         'student_id' => 4 ,
//         'student_name' => 'Laura',
//         'student_email' => 'laura@gmail.com',
//         'student_score' => 9.6
//     ],
//     [
//         'student_id' => 5 ,
//         'student_name' => 'Kestas',
//         'student_email' => 'kestas@gmail.com',
//         'student_score' => 9.34
//     ],
// ];

// foreach ($students as $key => $student) {

//     print $student['student_name'] . $student['student_score'] . '<br>';
// }

// 4. Sukurkite masyva kuriame butu geles, kiekviena gele turi siuos parametrus. flower_id, flower_name, flower_unit, flower_cost.
//     Sukurkite nauja masyva kuriame butu visos geles vienodos kainos uz vieneta ir atvaizduokite ju visus parametrus isskyrus flower_id

// $flowers = [
//     [
//         'flower_id' => 1 ,
//         'flower_name' => "red rose" ,
//         'flower_unit' => 1 ,
//         'flower_cost' => 2.40 
//     ],
//     [
//         'flower_id' => 2 ,
//         'flower_name' => "poppy" ,
//         'flower_unit' => 1 ,
//         'flower_cost' => 5.20 
//     ],
//     [
//         'flower_id' => 3 ,
//         'flower_name' => "pink tulips" ,
//         'flower_unit' => 1 ,
//         'flower_cost' => 6 
//     ],
//     [
//         'flower_id' => 4 ,
//         'flower_name' => "Sunflower" ,
//         'flower_unit' => 1 ,
//         'flower_cost' => 2.40 
//     ],
// ];
// $new_array = [];

// foreach ($flowers as $flower) {
//     if ($flower['flower_cost'] == 2.40) {
//         print $flower['flower_name'] . '<br />' . $flower['flower_unit'] . '<br />' . $flower['flower_cost'] . '<br />';
//     }
// }
// foreach ($flowers as $key => $flower) {
//     if ($flower['flower_cost'] == 2.40) {
//         array_push($new_array, $flower);
//     }
// }

// foreach ($new_array as $key => $value) {
//     print $value['flower_name'] . '<br />' . $value['flower_unit'] . '<br />' . $value['flower_cost'] . '<br />';
// }

// var_dump($new_array);
// 5. Sukurkite masyva kuris atspindetu 2 mobiliuju tel. gamintojus ir juose po 2 telefonus su
// atitinkamais jusu sugalvotais parametrais.
// atvaizduokite ekrane formos selektoriu kuriame butu tel gamintojai, salimais atvaizduokite 
// atskirus 2 selektorius (viename vieno gamintojo visi tel, kitame kito)

// $phones = [
//     'nokia' => 
//     ['3310','5310'],
//     'sony' => 
//     ['experia','media'],
// ];

// foreach ($phones as $key => $phone) {
//     if ($key == 'nokia') {
//         print "<label for='$key'>$key</label>"."<select>";
//         $phone_count = count($phone);
//         for ($i=0; $i <$phone_count ; $i++) { 
//             print "<option value='$phone[$i]'>$phone[$i]</option>";
//         }
//         print "</select>";
//     }
//     else if ($key == 'sony') {
//         print "<label for='$key'>$key</label>"."<select>";
//         $phone_count = count($phone);
//         for ($i=0; $i <$phone_count ; $i++) { 
//             print "<option value='$phone[$i]'>$phone[$i]</option>";
//         }
//         print "</select>";
//     }
// }

// $phones = [
//     'samsung'=> 
//     [
//         'model' => 'galaxy y',
//         'price' => '300'
//     ],
//     [
//         'model' => 'galaxy y',
//         'price' => '600'
//     ],
//     'sony'=> 
//     [
//         'model' => 'mega',
//         'price' => '400'
//     ],
//     [
//         'model' => 'superduper',
//         'price' => '1000'
//     ],
// ];

// foreach ($phones as $phones_brand => $value) {
//     var_dump($phones_brand);
// }

$phones = [
    'samsung' => [
        [
            'model' => 'galaxy 10',
            'color' => 'red rose',
            'price' => 400
        ],
        [
            'model' => 'galaxy 20',
            'color' => 'blue',
            'price' => 800
        ],
    ],
    'sony' => [
        [
            'model' => 'mega',
            'color' => 'blue',
            'price' => 800
        ],
        [
            'model' => 'super',
            'color' => 'blue',
            'price' => 800
        ],
    ]
]
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="/action_page.php">
        <label for="phones">Choose a phone:</label>
        <select name="phones" id="phones">
            <?php foreach ($phones as $phone_brand => $value) : ?>
                <option value=\"\">
                    <?php print $phone_brand; ?>
                </option>
            <?php endforeach; ?>
        </select>
        <br><br>
        <select name="" id="">
            <?php foreach ($phones['samsung'] as $phone) : ?>
                <option value=\"\">
                    <?php print $phone['model']; ?>
                </option>
            <?php endforeach; ?>
        </select>
        <select name="" id="">
            <?php foreach ($phones['sony'] as $phone) : ?>
                <option value=\"\">
                    <?php print $phone['model']; ?>
                </option>
            <?php endforeach; ?>
        </select>
    </form>
</body>

</html>