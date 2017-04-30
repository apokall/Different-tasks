<?php
function isPrime($num)
{
    for($i = 2; $i <= $num / 2; $i++)
    {
        if ($num % $i == 0)
        {
            return $num . " " . "не простое";
        }
    }
    return $num . " " . "простое";
}
// echo isPrime(97) . PHP_EOL;
// echo isPrime(100) . PHP_EOL;
// echo isPrime(2) . PHP_EOL;
// echo "********************" . PHP_EOL;

function isDrob($number)
{
  if($number % 3 == 0)
  {
    echo $number;
  } else {
    echo "OSTATOK EST";
  }
 }
// echo isDrob(33) . PHP_EOL;
// echo isDrob(3) . PHP_EOL;
// echo 100 % 11 . PHP_EOL;
//$array333 = [4,2,3];
//print "$array333";

?>
