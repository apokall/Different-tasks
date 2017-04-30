<?php
use function Functional\reduce_left;

$array = [1, 3, 2, 9, 1, 4, 3];

//as array
$result = array_reduce($array, function ($acc, $item) {
  return $item > $acc ? $item : $acc;
}, $array[0] //начальное значение аккумулятора);

$result = reduce_left($array, function ($item, $index, $collection, $acc) {
      return $item > $acc ? $item : $acc; //если итем больше акк то итем возвр
}, $array[0]);
