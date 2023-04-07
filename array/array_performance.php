<?php 
$start_memory = memory_get_usage();
$a1 = range(1, 100000);
// print_r($array);
$end_memory = memory_get_usage();
echo (($end_memory - $start_memory)/1024)/1024 . " MB\n";



$items = 100000;
$start_memory = memory_get_usage();
$a2 = new SplFixedArray($items);
for($i = 0; $i < $items; $i++){
    $a2[$i] = $i;
}
$end_memory = memory_get_usage();
echo ($end_memory - $start_memory)/(1024 * 1024) . " MB\n";