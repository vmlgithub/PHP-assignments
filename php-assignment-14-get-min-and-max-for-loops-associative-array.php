<?php
$sample = array( 135, 2.4, 2.67, 1.23, 332, 2, 1.02); 

function get_max_and_min($sample){
    $output = array();
    $max = $sample[0];
    $min = $sample[0];

    for($x=1; $x<count($sample); $x++) {
        if($sample[$x]>$max){
            $max = $sample[$x];
        }
    }
  
    for($x=1; $x<count($sample); $x++) {
        if($sample[$x]<$min){
            $min = $sample[$x];
        }
    }

    $output ["max"] = $max;
    $output ["min"] = $min;
    var_dump($output);    
}

$output = get_max_and_min($sample);
?>
