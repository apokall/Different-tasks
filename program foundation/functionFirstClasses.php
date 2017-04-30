<?php

$cube = function($num) {
  return $num * $num * $num;
};

$sumIntegers = function($a, $b) {
  if ($a > $b) { return 0; }
  return $a + $sumIntegers($a + 1, $b);
};

$sumCubes = function($a, $b) {
  if ($a > $b) { return 0; }
  return ($a * $a * $a) + $sumCubes($a + 1, $b);
};

echo $cube(3);
echo "\n";
//echo $sumIntegers(3,3);
echo "\n";

function fackk($num) {
  if ($num == 1) {
    return 1;
  }
  return $num * fackk($num - 1);
};
echo fackk(6) . PHP_EOL . PHP_EOL;
echo "Функция первого класса:" . PHP_EOL;
echo "\n";

function sum($a, $b, $func) {
  if($a > $b) {
    return ;
  }
  return $func($a) + sum($a + 1, $b, $func);
}
echo sum(1, 5, function($x) {return $x * $x;}). "\n" .PHP_EOL.
  "Вот такой вот ответ" . PHP_EOL;
echo "stringa moya \n \n";
$uber = function($x) {return $x * $x + 5;};
echo sum(1, 6, $uber). "\n" .PHP_EOL . "Вот такой вот ответ" . PHP_EOL;

//1 + 4 + 9 + 16 + 25 + 36

function double($func)
{
    // BEGIN (write your solution here)
    return function ($num) use ($func) {
        return $func($func($num));
    };
    // END
}
$inc = function ($arg) {
            return $arg + 1;
        };
$inc2 = double($inc);
//echo double(4, $inc2(2));  ??????!!!!!!
