<?php 

$odd = [];
$odd[] = 1;
$odd[] = 3;
$odd[] = 5;
$odd[] = 7;
$odd[] = 9;


$prime = [];
$prime[] = 2;
$prime[] = 3;
$prime[] = 5;

if (in_array(2, $prime)){
    echo "2 is a prime";
}
$union = array_merge($prime, $odd);
print_r($union);

$intersection = array_intersect($prime, $odd);
print_r($intersection);

$compliment = array_diff($prime, $odd);
print_r($compliment);


