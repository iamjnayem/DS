<?php 

$items = 5;
$array = new SplFixedArray($items);
for($i = 0; $i < $items; $i++){
    $array[$i] = $i * 10;
}
$new_arary = $array->toArray();
print_r($new_arary);