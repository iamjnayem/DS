<?php 

$odd = [];
$odd[1] = true;
$odd[3] = true;
$odd[5] = true;
$odd[7] = true;
$odd[9] = true;



$prime = [];
$prime[2] =true;
$prime[3] =true;
$prime[5] =true;

if(isset($prime[2])){
    echo "2 is a prime";
}

$union = $prime + $odd;
print_r($union);

$intersection = array_intersect_key($prime, $odd);
print_r($intersection);

$compliment = array_diff_key($prime, $odd);
print($compliment);


