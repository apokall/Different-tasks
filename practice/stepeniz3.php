<?php

function isPowerOfThree($num)
{
    for($num; $num == 3; $num / 3)
    {
        echo "$num";
        if($num / 3)
        {
            return $num;
        }
    }
    echo "fail ";
    return $num;
}

echo isPowerOfThree(27) . PHP_EOL;
echo isPowerOfThree(9) . PHP_EOL;

?>
