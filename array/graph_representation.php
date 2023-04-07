<?php 

function display_graph($graph, $nodes){
    echo "# ";
    foreach($nodes as $node){
        echo $node . " ";
    }
    echo "\n";
    foreach($nodes as $x_node){
        echo $x_node . " ";
        foreach($nodes as $y_node){
            echo $graph[$x_node][$y_node] . " ";
        }
        echo "\n";
    }

}

$graph = [];
$nodes = ['A', 'B', 'C', 'D', 'E'];
foreach($nodes as $x_node){
    foreach ($nodes as $y_node ){
        echo "[$x_node][$y_node]: ";
        $graph[$x_node][$y_node] = (int)fgets(STDIN);
    }
}
display_graph($graph, $nodes);
