<?php
// 1. Sukurkite masyvą kuris atspindėtų vartotojų registraciją svetainėje:
// Vardas, emailas, slaptazodis,vartotojo_amzus, vartotojo_sukurimo_data, vartotojo_paskutinio_prisijungimo_data, vartotojo_role.
//
//data
 $users = [
    [
        'id' => 1,
        'user_name' => 'Jonas',
        'user_email' => 'jonas@gmail.com',
        'user_age' => '23',
        'user_reg_date' => '2020.01.02',
        'user_login_date' => '2020.04.20',
        'user_role' => 1
    ],
    [
        'id' => 2,
        'user_name' => 'Gedas',
        'user_email' => 'tadas@gmail.com',
        'user_age' => '40',
        'user_reg_date' => '2012.02.06',
        'user_login_date' => '2020.03.20',
        'user_role' => 2
    ],
    [
        'id' => 3,
        'user_name' => 'Petras',
        'user_email' => 'petras@yahoo.com',
        'user_age' => '27',
        'user_reg_date' => '2011.08.09',
        'user_login_date' => '2020.00.20',
        'user_role' => 2
    ],
    [
        'id' => 4,
        'user_name' => 'Giedre',
        'user_email' => 'giedre@gmail.com',
        'user_age' => '32',
        'user_reg_date' => '2013.03.02',
        'user_login_date' => '2020.05.20',
        'user_role' => 1
    ],
    [
        'id' => 5,
        'user_name' => 'Ruta',
        'user_email' => 'ruta@gmail.com',
        'user_age' => '29',
        'user_reg_date' => '2012.01.13',
        'user_login_date' => '2020.06.4',
        'user_role' => 2
    ]
 ];
// 2. Panaudojant 1 uzduoties masyva ir atitinkama cikla sukurkite lentele ir lenteleje atvaizduokite:
//  vartotojo_vardas, emailas, paskutinio_prisijungimo_data, role.
//
//table top
 echo '<table border="1">';
 echo '<tr>';
 echo '<td>Name</td>';
 echo "<td>email</td>";
 echo "<td>age</td>";
 echo "<td>reg-date</td>";
 echo "<td>last-login</td>";
 echo "<td>role</td>";
 echo '</tr>';
 //table data
foreach ($users as $key => $user) {
    echo '<tr>';
    echo "<td>$user[user_name]</td>";
    echo "<td>$user[user_email]</td>";
    echo "<td>$user[user_age]</td>";
    echo "<td>$user[user_reg_date]</td>";
    echo "<td>$user[user_login_date]</td>";
    echo "<td>$user[user_role]</td>";
    echo '</tr>';
}
echo '</table><hr />';
// 3. Panaudojant 1 uzduoties masyva sukurkite nauja masyva kuriame butu i atskirus masyvus sudeti skirtinu roliu vartotojai.
// dar variantas
// foreach ($users as $user) {
//     if ($user['user_role'] === 1) {
//         $role1[] = $user;
//     } else {
//         $role0[] = $user;
//     }
// }
// $new_users = ['role1' => $role1, 'role0' => $role0];

$new_users = [];
$new_users_0 = [];
$new_users_1 = [];
foreach ($users as $key => $user) {
    if ($user['user_role'] === 1) {

        array_push($new_users_1, $user);
    } else {
        array_push($new_users_0, $user);
    }
}
array_push($new_users, $new_users_1, $new_users_0); 

echo "<br><br>";
// 4. panaudojus 1 uzduoties masyva sudeliokite vartotojus masyve nuo jauniausio iki vyriausio.

    // foreach ($users as $user) {
    //     var_dump($user['user_age']);
    // }


// 5. panaudojus 1 uzduoties masyva naudojant for cikla suraskite jauniausia vartotoja ir atvaizduokite jo duomenis ekrane.

// 1. panaudokite while cikla ir aprasykite taip jog fraze
// 'Atspausdina' pasikartotu 5 kartus.
// 2. papildykite pirma uzduoti jog atskausdintu ne tik fraze bet ir ciklo numeri

$x = 1;
$fraze = "labas";
while($x <= 5) {
  echo "$x $fraze<br>";
  $x++;
}
// 3. panaudojant swich metoda aprasykite kvadrato spalva kuri priklauso
// nuo musu kintamojo $color (spalvos 3)

$color = 'blue';

switch ($color) {
    case 'red':
        print "<div style='height: 50px; width: 50px; background: $color;'></div>";
        break;
    case 'blue':
        print "<div style='height: 50px; width: 50px; background: $color;'></div>";
        break;
    case 'green':
        print "<div style='height: 50px; width: 50px; background: $color;'></div>";
        break;
}





// 3. masyvas -> https://gist.githubusercontent.com/Ingramz/a0d02350c56c9e0a9d99/raw/7664e4c581d7863461e6ea0a57b3d4d9abef4f24/famfamfam-php-flags.php
//     pritaikyti foreach cikla ir jo pagalba bei papildomu funciju pagalba
//     atvaizduoti ekrane visas salis kurios prasideda is B raides


$countries = array(
  'AF' => 'Afghanistan',
  'AX' => '&Aring;land Islands',
  'AL' => 'Albania',
  'DZ' => 'Algeria',
  'AS' => 'American Samoa',
  'AD' => 'Andorra',
  'AO' => 'Angola',
  'AI' => 'Anguilla',
  'AG' => 'Antigua and Barbuda',
  'AR' => 'Argentina',
  'AM' => 'Armenia',
  'AW' => 'Aruba',
  'AU' => 'Australia',
  'AT' => 'Austria',
  'AZ' => 'Azerbaijan',
  'BS' => 'Bahamas (the)',
  'BH' => 'Bahrain',
  'BD' => 'Bangladesh',
  'BB' => 'Barbados',
  'BY' => 'Belarus',
  'BE' => 'Belgium',
  'BZ' => 'Belize',
  'BJ' => 'Benin',
  'BM' => 'Bermuda',
  'BT' => 'Bhutan',
  'BO' => 'Bolivia (Plurinational State of)',
  'BA' => 'Bosnia and Herzegovina',
  'BW' => 'Botswana',
  'BV' => 'Bouvet Island',
  'BR' => 'Brazil',
  'IO' => 'British Indian Ocean Territory (the)',
  'BN' => 'Brunei Darussalam',
  'BG' => 'Bulgaria',
  'BF' => 'Burkina Faso',
  'BI' => 'Burundi',
  'KH' => 'Cambodia',
  'CV' => 'Cabo Verde',
  'CM' => 'Cameroon',
  'CA' => 'Canada',
  'CT' => 'Catalonia',
  'KY' => 'Cayman Islands (the)',
  'CF' => 'Central African Republic (the)',
  'TD' => 'Chad',
  'CL' => 'Chile',
  'CN' => 'China',
  'CX' => 'Christmas Island',
  'CC' => 'Cocos (Keeling) Islands (the)',
  'CO' => 'Colombia',
  'KM' => 'Comoros',
  'CD' => 'Congo (the Democratic Republic of the)',
  'CG' => 'Congo (the)',
  'CK' => 'Cook Islands (the)',
  'CR' => 'Costa Rica',
  'CI' => 'C&ocirc;te d\'Ivoire',
  'HR' => 'Croatia',
  'CU' => 'Cuba',
  'CY' => 'Cyprus',
  'CZ' => 'Czech Republic (the)',
  'DK' => 'Denmark',
  'DJ' => 'Djibouti',
  'DM' => 'Dominica',
  'DO' => 'Dominican Republic (the)',
  'EC' => 'Ecuador',
  'EG' => 'Egypt',
  'SV' => 'El Salvador',
  'EN' => 'England',
  'GQ' => 'Equatorial Guinea',
  'ER' => 'Eritrea',
  'EE' => 'Estonia',
  'ET' => 'Ethiopia',
  'EU' => 'European Union',
  'FK' => 'Falkland Islands (the) [Malvinas]',
  'FO' => 'Faroe Islands (the)',
  'FJ' => 'Fiji',
  'FI' => 'Finland',
  'FR' => 'France',
  'GF' => 'French Guiana',
  'PF' => 'French Polynesia',
  'TF' => 'French Southern Territories (the)',
  'GA' => 'Gabon',
  'GM' => 'Gambia (the)',
  'GE' => 'Georgia',
  'DE' => 'Germany',
  'GH' => 'Ghana',
  'GI' => 'Gibraltar',
  'GR' => 'Greece',
  'GL' => 'Greenland',
  'GD' => 'Grenada',
  'GP' => 'Guadeloupe',
  'GU' => 'Guam',
  'GT' => 'Guatemala',
  'GN' => 'Guinea',
  'GW' => 'Guinea-Bissau',
  'GY' => 'Guyana',
  'HT' => 'Haiti',
  'HM' => 'Heard Island and McDonald Islands',
  'VA' => 'Holy See (the)',
  'HN' => 'Honduras',
  'HK' => 'Hong Kong',
  'HU' => 'Hungary',
  'IS' => 'Iceland',
  'IN' => 'India',
  'ID' => 'Indonesia',
  'IR' => 'Iran (Islamic Republic of)',
  'IQ' => 'Iraq',
  'IE' => 'Ireland',
  'IL' => 'Israel',
  'IT' => 'Italy',
  'JM' => 'Jamaica',
  'JP' => 'Japan',
  'JO' => 'Jordan',
  'KZ' => 'Kazakhstan',
  'KE' => 'Kenya',
  'KI' => 'Kiribati',
  'KP' => 'Korea (the Democratic People\'s Republic of)',
  'KR' => 'Korea (the Republic of)',
  'KW' => 'Kuwait',
  'KG' => 'Kyrgyzstan',
  'LA' => 'Lao People\'s Democratic Republic (the)',
  'LV' => 'Latvia',
  'LB' => 'Lebanon',
  'LS' => 'Lesotho',
  'LR' => 'Liberia',
  'LY' => 'Libya',
  'LI' => 'Liechtenstein',
  'LT' => 'Lithuania',
  'LU' => 'Luxembourg',
  'MO' => 'Macao',
  'MK' => 'Macedonia (the former Yugoslav Republic of)',
  'MG' => 'Madagascar',
  'MW' => 'Malawi',
  'MY' => 'Malaysia',
  'MV' => 'Maldives',
  'ML' => 'Mali',
  'MT' => 'Malta',
  'MH' => 'Marshall Islands (the)',
  'MQ' => 'Martinique',
  'MR' => 'Mauritania',
  'MU' => 'Mauritius',
  'YT' => 'Mayotte',
  'MX' => 'Mexico',
  'FM' => 'Micronesia (Federated States of)',
  'MD' => 'Moldova (the Republic of)',
  'MC' => 'Monaco',
  'MN' => 'Mongolia',
  'ME' => 'Montenegro',
  'MS' => 'Montserrat',
  'MA' => 'Morocco',
  'MZ' => 'Mozambique',
  'MM' => 'Myanmar',
  'NA' => 'Namibia',
  'NR' => 'Nauru',
  'NP' => 'Nepal',
  'NL' => 'Netherlands (the)',
  'AN' => 'Netherlands Antilles',
  'NC' => 'New Caledonia',
  'NZ' => 'New Zealand',
  'NI' => 'Nicaragua',
  'NE' => 'Niger (the)',
  'NG' => 'Nigeria',
  'NU' => 'Niue',
  'NF' => 'Norfolk Island',
  'MP' => 'Northern Mariana Islands (the)',
  'NO' => 'Norway',
  'OM' => 'Oman',
  'PK' => 'Pakistan',
  'PW' => 'Palau',
  'PS' => 'Palestine, State of',
  'PA' => 'Panama',
  'PG' => 'Papua New Guinea',
  'PY' => 'Paraguay',
  'PE' => 'Peru',
  'PH' => 'Philippines (the)',
  'PN' => 'Pitcairn',
  'PL' => 'Poland',
  'PT' => 'Portugal',
  'PR' => 'Puerto Rico',
  'QA' => 'Qatar',
  'RE' => 'R&eacute;union',
  'RO' => 'Romania',
  'RU' => 'Russian Federation (the)',
  'RW' => 'Rwanda',
  'SH' => 'Saint Helena, Ascension and Tristan da Cunha',
  'KN' => 'Saint Kitts and Nevis',
  'LC' => 'Saint Lucia',
  'PM' => 'Saint Pierre and Miquelon',
  'VC' => 'Saint Vincent and the Grenadines',
  'WS' => 'Samoa',
  'SM' => 'San Marino',
  'ST' => 'Sao Tome and Principe',
  'SA' => 'Saudi Arabia',
  'AB' => 'Scotland',
  'SN' => 'Senegal',
  'RS' => 'Serbia',
  'CS' => 'Serbia and Montenegro',
  'SC' => 'Seychelles',
  'SL' => 'Sierra Leone',
  'SG' => 'Singapore',
  'SK' => 'Slovakia',
  'SI' => 'Slovenia',
  'SB' => 'Solomon Islands',
  'SO' => 'Somalia',
  'ZA' => 'South Africa',
  'GS' => 'South Georgia and the South Sandwich Islands',
  'ES' => 'Spain',
  'LK' => 'Sri Lanka',
  'SD' => 'Sudan (the)',
  'SR' => 'Suriname',
  'SJ' => 'Svalbard and Jan Mayen',
  'SZ' => 'Swaziland',
  'SE' => 'Sweden',
  'CH' => 'Switzerland',
  'SY' => 'Syrian Arab Republic',
  'TW' => 'Taiwan (Province of China)',
  'TJ' => 'Tajikistan',
  'TZ' => 'Tanzania, United Republic of',
  'TH' => 'Thailand',
  'TL' => 'Timor-Leste',
  'TG' => 'Togo',
  'TK' => 'Tokelau',
  'TO' => 'Tonga',
  'TT' => 'Trinidad and Tobago',
  'TN' => 'Tunisia',
  'TR' => 'Turkey',
  'TM' => 'Turkmenistan',
  'TC' => 'Turks and Caicos Islands (the)',
  'TV' => 'Tuvalu',
  'UG' => 'Uganda',
  'UA' => 'Ukraine',
  'AE' => 'United Arab Emirates (the)',
  'GB' => 'United Kingdom of Great Britain and Northern Ireland (the)',
  'UM' => 'United States Minor Outlying Islands (the)',
  'US' => 'United States of America (the)',
  'UY' => 'Uruguay',
  'UZ' => 'Uzbekistan',
  'VU' => 'Vanuatu',
  'VE' => 'Venezuela (Bolivarian Republic of)',
  'VN' => 'Viet Nam',
  'VG' => 'Virgin Islands (British)',
  'VI' => 'Virgin Islands (U.S.)',
  'WA' => 'Wales',
  'WF' => 'Wallis and Futuna',
  'EH' => 'Western Sahara',
  'YE' => 'Yemen',
  'ZM' => 'Zambia',
  'ZW' => 'Zimbabwe'
);
print "<br><br>";
foreach ($countries as $key => $country) {
    if (substr($country, 0, 1) == "B" ) {
        print "$country <br>";
    }
}

?>


