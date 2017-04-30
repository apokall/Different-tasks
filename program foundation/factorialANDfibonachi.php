<?php


function factorial($num)
{
    // BEGIN (write your solution here)
    if ($num == 0) { return 1; }
    if ($num == 1) { return $num; }
    return $num * factorial($num - 1);
    // END
}
echo factorial(4);

function fib($num)
{

    // BEGIN (write your solution here)
    if ($num > 2) {
        return $num;
    }
    return fib($num - 1) + fib($num - 2);
    // END
}
echo "\n";
echo fib(10);
echo "\n";

// Формула:
//
// f(0) = 0
// f(1) = 1
// f(n) = f(n-1) + f(n-2)
// Пример:
//
// 2 == fib(3)
// 5 == fib(5)
// 55 == fib(10)
function fib($num)
{
    // BEGIN (write your solution here)

    $tmp;
    $fib1 = 0;
    $fib2 = 1;
    $i = 0;

    $iter = function () use ($num, &$iter, &$fibSum, &$fib1, &$fib2, &$i) {
        if ($i < $num) {
            $tmp = $fib1;
            $fib1 = $fib2;
            $fib2 = $tmp + $fib2;
            $i += 1;
            $iter();
        }
    };

    $iter();
    return $fib1;


    // END
}
