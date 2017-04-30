<?php

function fib($number) {
    $result1 = 0;
    $result2 = 2;
    $resultSum = 0;
    $i = 0;
while ($i < $number){
    $result1 = $result2;
    $result2 = $resultSum;
    $resultSum = $result1 + $result2;
    $i += 1;

}
return $resultSum;
}
echo fib(5);
