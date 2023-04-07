<?php 

$players = [];
$players[] = [
    'Name' => 'Ronaldo',
    'Age' => 31,
    'Country' => 'Portugal',
    'Team' => 'Real Madrid'
];
$players[] = [
    'Name' => 'Messi',
    'Age' => 27,
    'Country' => 'Argentina',
    'Team' => 'Barcelona'
];


foreach($players as $index => $player_info){
    echo "Info of Player # ". ($index + 1) . "\n";
    foreach($player_info as $key => $value){
        echo $key . ": " . $value . "\n";
    }
    echo "\n";
}

