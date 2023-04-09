<?php
$array = [
    4 => 10,
    2 => 100,
    3 => 1000,
    1 => 100000
];

$a1 = SplFixedArray::fromArray($array);
var_dump($a1);

$a2 = SplFixedArray::fromArray($array, false);
var_dump($a2);

$a3 = SplFixedArray::fromArray($array, true);
var_dump($a3);