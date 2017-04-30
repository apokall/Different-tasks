<?php

function factorial($num)
{
    // BEGIN (write your solution here)
     $factorialIter = function ($num, $acc) use (&$factorialIter) {
        if ($num == 0) {
            return $acc;
        }
        return $factorialIter($num - 1, $acc * $num);
    };
    return $factorialIter($num, 1);
    // END
}

echo factorial(5);
// 120х1
// 60х2
// 20х3
// 5х4
// 1х5
//
// 720x1
// 360x2
// 120x3
// 30x4
// 6x5
// 1x6
