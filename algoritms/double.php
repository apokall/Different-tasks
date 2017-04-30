<?php
$second = range(1,10);
$first = range(1,12);
//realize2  надо уточнить как работает while с истинными двумя значениями. см справку.
// function merge($first, $second) {
// $array = [];
// while(empty($first) && empty($second)) {
//     if($first[$i] < $second[$i]) {
//         $array[] = $first[$i];
//         $array[] = $second[$i];
//     } else {
//         $array[] = $second[$i];
//         $array[] = $first[$i];
//     }
// }
// return $array;
// }

//1 realize
//function merge($first, $second) {
// $max1 = count($first);
// $max2 = count($second);
// $max = 0;
// $array = [];
// if($max1 > $max2) {
//     $max = $max1;
//     return $max;
// } else {
//     $max = $max2;
//     return $max;
// }
// for($i = 0; $i < $max; $i++) {
//     if($first[$i] <= $second[$i]) {
//         $array[] = $first[$i];
//         $array[] = $second[$i];
//     } else {
//         $array[] = $second[$i];
//         $array[] = $first[$i];
//     }
// }
// return $array;
//}
