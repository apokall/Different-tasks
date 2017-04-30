<?php
function random($seed)
{
    $init = $seed;
    return function ($method = null) use (&$seed, $init) {
        $a = 45;
        $c = 21;
        $m = 67;

        switch ($method) {
            case "reset":
                $seed = $init;
                break;
            default:
                $seed = ($a * $seed + $c) % $m;
                break;
        }

        return $seed;
    };
}
$a = random(3);
echo $a() . PHP_EOL;
echo $a() . PHP_EOL;
echo $a() . PHP_EOL . "reset" . PHP_EOL;
$a("reset");
echo $a() . PHP_EOL;
echo $a() . PHP_EOL;


 ?>
