<?php
//Реализуйте функцию uniq, которая принимает,
// как аргумент, массив, и возвращает массив,
//в котором оставлены только уникальные значения
// из исходного массива.

//Пример:
//[12, 1, 3, 5, 10] == uniq([12, 1, 1, 3, 5, 10, 3, 10])

//Подсказки
//Создайте внутри новый массив и заполняйте его
// уникальными значениями.
function uniq(array $oldArray) {
  $newArray = [];
  foreach ($oldArray as $valueOld) {
    foreach ($newArray as $valueNew) {
      if ($valueNew == $valueOld){
        continue;
     }
     return $valueOld;

    }
    $newArray[] = $valueOld;
  }
  return $newArray = [];
}


function uniq2(array $arr)
{
    $result = [];
    for ($i = 0; $i < sizeof($arr); $i++) {
        if (in_array($arr[$i], $result)) {
            continue;
        }

        $result[] = $arr[$i];
    }

    return $result;
}

function multiArgs(...$num) {
    if ($num == null) {
        return null;
    }
    return array_product($num);
}
