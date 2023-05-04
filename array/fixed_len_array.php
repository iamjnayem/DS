<?php 

$array = new SplFixedArray(10);
echo gettype($array);

for($i = 0; $i < 10; $i++){
    $array[$i] = $i;
}
for($i = 0; $i < 10; $i++){
    echo $array[$i] . "\n";
}
//Generate RuntimeException
echo $array[10];