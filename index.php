<?php
$a = array (10,20,30,50,60,70,80);
$b = [];

foreach (range(1, count($a), 2) as $key) {
  unset($a[$key]);
}
$b = array_merge($a);
print_r($b);