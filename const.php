<?php
echo "RESULT:\n";

$cube1 = 1;

$cube2 = 2;

$cube2 = $cube2 + $cube1;

  $cube = function ($num): int {
      return $num * $num; //*$num;
  };


echo $cube(4);
echo "\n";
echo $cube($cube2);
echo "\n";

$sumOfCube = function($cube1,$cube2) use ($cube) {
  return  $cube($cube1) + $cube($cube2);
};

echo $sumOfCube($cube1,$cube2);
echo "\n";
echo "result2: ";

$testix = 33;

$testixplus = function ($testix) {
    $resultz = 5;
  $resultz = $testix + $testix;
    return $resultz+$testix;
};
echo "\n";
echo $testixplus($testix);
echo "\n";
//echo $resultz;
echo "\n";



?>
