<?php

$array = [1, 2, 3, 4, 4];

$mixed_array = [];
$mixed_array[0] = 200;
$mixed_array['name'] = 'Mixed Array';
$mixed_array[1] = 10.65;
$mixed_array[2] = ['I', 'am', 'another', 'array'];

var_dump($mixed_array);