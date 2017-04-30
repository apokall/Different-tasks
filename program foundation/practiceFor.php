<?php

function sumDouble($numStart, $numFinish) {
  $summa = 0;
  for ($numStart; $numStart <= $numFinish; $numStart += 2) {
    $summa += $numStart ** 2;
  }
  return $summa;
}
function sumDouble2($numStart, $numFinish) {
  $summa = 0;
  for ($i = $numStart; $i <= $numFinish; $i += 2) {
     $summa += $i * $i;
  }
  return $summa;
}
echo "TEST1:" . PHP_EOL . sumDouble(8,14) . PHP_EOL . "TEST2:" . PHP_EOL;
echo sumDouble2(3,6) . PHP_EOL;
$goodFish = 5;
function proverk($good) {
  $good = 5;
    return $good * $good;
}
function proverka($sliz) {
  return $GLOBALS['goodFish'] + $sliz;
}
proverk(2);
echo proverka(5);
