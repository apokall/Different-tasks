<?php
function hammingWeight($number) {
  $array = [];
    for ($number;$number >= 1;$number /= 2 ) {
        if($number % 2 != 0) {
             $array[] = 1;
        } else {
            $number - 0.5;
            $array[] = 0;
        }
    };
    $number = array_sum($array);
    return $number;
}
echo hammingWeight(4) . PHP_EOL;
echo hammingWeight(101) . PHP_EOL;
echo hammingWeight(125) . PHP_EOL;
echo hammingWeight(85813) . PHP_EOL;
echo hammingWeight(0) . PHP_EOL;


function hammingWeight2($num)
{
    $weight = 0;
    $digits = str_split(decbin($num));
    foreach ($digits as $value) {
        if ($value == '1') {
            $weight++;
        }
    }

    return $weight;
}
// echo "\n";
//  echo hammingWeight2(4) . PHP_EOL;
//  echo hammingWeight2(101) . PHP_EOL;
//  echo hammingWeight2(125) . PHP_EOL;
//  echo hammingWeight2(85813) . PHP_EOL;
