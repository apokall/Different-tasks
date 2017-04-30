<?php
function hello($stringName) {
    return "1 Given string was: 5+5 '$stringName'";
}
function hello2($stringName) {
  return '2 Given string was: ' . 555+5*2+25 . "\nand\n" . 10*5 . "$stringName" . PHP_EOL;
}
function hello3($stringName) {
    return "3 Given string was: \n $stringName" . PHP_EOL;
}
function hello4($stringName) {
    return "400 Given string was: \n $stringName" . PHP_EOL . (43+5+5) . PHP_EOL;
}
function hello5($stringName) {
    return "5 Given 5string5 was: '$stringName'" . PHP_EOL;
}
function hello6() {
  return  "6 Given string was:" . PHP_EOL;
}

echo hello("h\hello! \n");
echo hello2("kykyddd \n");
echo hello3("kykydaaa");
echo hello4("vshoke");
echo hello5("h\hello! \n");
echo hello6();
